<?php
/**
 * @package Guzzle PHP <http://www.guzzlephp.org>
 * @license See the LICENSE file that was distributed with this source code.
 */

namespace Guzzle\Aws\Tests\Sqs\Command;

use Guzzle\Aws\Sqs\Command\ListQueues;

/**
 * @author Michael Dowling <michael@guzzlephp.org>
 */
class ListQueuesTest extends \Guzzle\Tests\GuzzleTestCase
{
    /**
     * @covers Guzzle\Aws\Sqs\Command\ListQueues
     */
    public function testListQueues()
    {
        $command = new ListQueues();
        $this->assertSame($command, $command->setQueueNamePrefix('test'));
        
        $client = $this->getServiceBuilder()->get('test.sqs');
        $this->setMockResponse($client, 'ListQueuesResponse');
        $client->execute($command);

        $request = (string) $command->getRequest();
        $response = (string) $command->getResponse();

        $this->assertEquals('GET', $command->getRequest()->getMethod());
        $this->assertContains('GET /?Action=ListQueues&QueueNamePrefix=test', $request);
        $this->assertEquals('sqs.us-east-1.amazonaws.com', $command->getRequest()->getHost());

        $this->assertEquals(array(
            'http://sqs.us-east-1.amazonaws.com/123456789012/testQueue',
            'http://sqs.us-east-1.amazonaws.com/123456789012/testQueue2'
        ), $command->getResult());

        $this->assertEquals('725275ae-0b9b-4762-b238-436d7c65a1ac', $command->getRequestId());
    }
}