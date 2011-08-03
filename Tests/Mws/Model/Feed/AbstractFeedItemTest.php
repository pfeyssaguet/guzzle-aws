<?php

namespace Guzzle\Aws\Tests\Mws\Model\Feed;

use Guzzle\Tests\GuzzleTestCase;
use Guzzle\Aws\Mws\Model\Feed\PriceFeed\Price;
use Guzzle\Aws\Mws\Model\Feed\Schema\DataType;

class AbstractFeedItemTest extends GuzzleTestCase
{
    public function testAbstractFeedItem()
    {
        $xml = new \XMLWriter();
        $xml->openMemory();
        $xml->setIndent(true);
        
        $price = new Price($xml);
        
        $price->add('Field1', 'Foo');
        $price->set('Field2', 'Bar');
        $price->set('Field3', array(
            'Sample' => DataType\LengthDimension::factory(1, 'IN')
        ));
        
        $foo = $price->get('Field2');
        $this->assertEquals($foo, 'Bar');
        
        $price->writeNode('Field1');
        $price->writeNode('Field2');
        $price->writeNode('Field3');
        
        $price->writeXml();
        
        $price->toString();
        $price->__toString();
    }
}