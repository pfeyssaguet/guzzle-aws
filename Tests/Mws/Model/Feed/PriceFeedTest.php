<?php

namespace Guzzle\Aws\Tests\Mws\Model\Feed;

use Guzzle\Tests\GuzzleTestCase;
use Guzzle\Aws\Mws\Model\Feed\PriceFeed\Price;

class PriceFeedTest extends GuzzleTestCase
{
    public function testPriceFeed()
    {
        $client = $this->getServiceBuilder()->get('test.mws');
        $feed = $client->getFeed('price');
        
        $this->assertInstanceOf('Guzzle\Aws\Mws\Model\Feed\PriceFeed', $feed);
        
        $dom = new \DOMDocument();
        $dom->loadXML($feed->toString());
        
        $this->assertSelectEquals('AmazonEnvelope MessageType', 'Price', true, $dom, null, false);
    }
    
    /**
     * @depends testPriceFeed
     */
    public function testAddPrice()
    {
        $client = $this->getServiceBuilder()->get('test.mws');
        $feed = $client->getFeed('price');
        
        $feed->addPrice(new Price($feed->getXml()));
        
        $dom = new \DOMDocument();
        $dom->loadXML($feed->toString());
        
        $this->assertSelectEquals('AmazonEnvelope Message MessageID', '1', true, $dom, null, false);
        $this->assertSelectEquals('AmazonEnvelope Message OperationType', 'Update', true, $dom, null, false);
        $this->assertSelectCount('AmazonEnvelope Message Price', 1, $dom, null, false);
    }
}