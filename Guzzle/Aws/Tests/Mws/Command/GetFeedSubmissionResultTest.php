<?php

namespace Guzzle\Aws\Tests\Mws\Command;

use Guzzle\Tests\GuzzleTestCase;

/**
 * @covers Guzzle\Aws\Mws\Command\GetFeedSubmissionResult
 * @author Harold Asbridge <harold@shoebacca.com>
 */
class GetFeedSubmissionResult extends GuzzleTestCase
{
    public function testGetFeedSubmissionResult()
    {
        $client = $this->getServiceBuilder()->get('test.mws');

        $this->setMockResponse($client, 'GetFeedSubmissionResultResponse');

        $command = $client->getCommand('get_feed_submission_result')
            ->setFeedSubmissionId(12345);
        $this->assertInstanceOf('Guzzle\Aws\Mws\Command\GetFeedSubmissionResult', $command);

        $response = $client->execute($command);
        $this->assertInstanceOf('\SimpleXMLElement', $response);
    }
}