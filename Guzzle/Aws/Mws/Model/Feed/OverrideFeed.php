<?php

namespace Guzzle\Aws\Mws\Model\Feed;

use \Guzzle\Aws\Mws\Model\Feed\OverrideFeed\Override;

/**
 * Override feed class
 *
 * Used for setting shipping override on products
 *
 * @author jason@shoebacca.com
 */
class OverrideFeed extends AbstractFeed
{
    /**
     * {@inheritdoc}
     */
    protected $feedType = 'Override';

    /**
     * Add inventory to feed
     *
     * @param Inventory $inventory
     *
     * @return InventoryFeed
     */
    public function addOverride(Override $override)
    {
        $this->xml->startElement('Message');
        $this->xml->writeElement('MessageID', $this->messageCount);
        $this->xml->writeElement('OperationType', 'Update');

        $override->writeXml();

        $this->xml->endElement();
        $this->messageCount++;

        return $this;
    }

}