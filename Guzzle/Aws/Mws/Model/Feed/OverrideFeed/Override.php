<?php

namespace Guzzle\Aws\Mws\Model\Feed\OverrideFeed;

use Guzzle\Aws\Mws\Model\Feed\AbstractFeedItem;

/**
 * Override feed item
 *
 * @author jason@shoebacca.com
 */
class Override extends AbstractFeedItem
{

    /**
     * Set SKU
     *
     * @param string $value
     *
     * @return Inventory
     */
    public function setSku($value)
    {
        return $this->set('SKU', $value);
    }

    public function setShipOption($value)
    {
        return $this->set('ShipOption', $value);
    }

    public function setIsShippingRestricted($value)
    {
        return $this->set('IsShippingRestricted', $value);
    }

    public function setType($value)
    {
        return $this->set('Type', $value);
    }

    public function setShipAmount($value)
    {
        return $this->set('ShipAmount', $value);
    }

    public function setShipAmountCurrency($value)
    {
        return $this->set('ShipAmountCurrency', $value);
    }

    /**
     * Write XML output
     */
    public function writeXml()
    {
        //Override
        $this->xml->startElement('Override');
        $this->writeNode('SKU');
        //ShippingOverride
        $this->xml->startElement('ShippingOverride');
        $this->writeNode('ShipOption');
        $this->writeNode('Type');
        //ShipAmount
        $this->xml->startElement('ShipAmount');
        $this->xml->writeAttribute('currency', $this->get('ShipAmountCurrency'));
        $this->xml->text($this->get('ShipAmount'));
        //ShipAmount
        $this->xml->endElement();
        //ShippingOverride
        $this->xml->endElement();
        //ShippingOverride
        $this->xml->startElement('ShippingOverride');
        $this->writeNode('ShipOption');
        $this->writeNode('IsShippingRestricted');
        //ShippingOverride
        $this->xml->endElement();
        //Override
        $this->xml->endElement();
    }

}