<?php

namespace Guzzle\Aws\Tests\Mws\Command;

use Guzzle\Tests\GuzzleTestCase;
use Guzzle\Aws\Mws\Type;

/**
 * @covers Guzzle\Aws\Mws\Command\GetReportScheduleCount
 * @author Harold Asbridge <harold@shoebacca.com>
 */
class GetReportScheduleCountTest extends GuzzleTestCase
{
    public function testGetReportScheduleCountTest()
    {
        $client = $this->getServiceBuilder()->get('test.mws');

        $this->setMockResponse($client, 'GetReportScheduleCountResponse');

        $command = $client->getCommand('get_report_schedule_count')
            ->setReportTypeList(array(
                Type\ReportType::MERCHANT_LISTINGS_REPORT
            ));
        $this->assertInstanceOf('Guzzle\Aws\Mws\Command\GetReportScheduleCount', $command);

        $response = $client->execute($command);
        $this->assertInstanceOf('\SimpleXMLElement', $response);
    }
}