<?php

namespace Guzzle\Aws;

use Guzzle\Common\Event\Observer;
use Guzzle\Common\Event\Subject;
use Guzzle\Http\Message\RequestInterface;
use Guzzle\Aws\Filter\AddRequiredQueryStringFilter;
use Guzzle\Aws\Filter\QueryStringSignatureFilter;

/**
 * This plugin guarantees that a certain amount of time has passed between requests.
 * It will automatically wait until the specified  amount of time has passed
 * before allowing a command to execute.
 */
class ThrottlePlugin implements Observer
{
    /**
     * @var int Time to wait inbetw
     */
    protected $timeBetweenRequests;
    
    /**
     * @var int Last request unix timestamp
     */
    protected $lastRequest;
    
    /**
     * Initialize plugin
     * 
     * @param int $timeBetweenRequests 
     */
    public function __construct($timeBetweenRequests)
    {
        $this->timeBetweenRequests = $timeBetweenRequests;
    }
    
    /**
     * Receive notifications from a EventManager
     *
     * @param Subject $subject Subject emitting the event
     * @param string $event Event signal state
     * @param mixed $context (optional) Contextual information
     *
     * @return null|bool|mixed
     */
    function update(Subject $subject, $event, $context = null)
    {
        // @codeCoverageIgnoreStart
        if (!($subject instanceof RequestInterface)) {
            return;
        }
        // @codeCoverageIgnoreEnd

        if ($event == 'request.before_send') {
            $timestamp = microtime(true);
            
            if ($this->lastRequest) {
                $diff =  ($timestamp - $this->lastRequest) * 1000; // Time since last request in ms
                
                print $diff;
                
                // If it has been less than the specified time, sleep off the difference
                if ($diff < $this->timeBetweenRequests) {
                    $duration = ($this->timeBetweenRequests - $diff);
                    printf('SLEEPING FOR %s', $duration); 
                    usleep($duration * 1000); // Convert to microseconds
                }
            }
            
            $this->lastRequest = $timestamp;
        }
    }
    
}