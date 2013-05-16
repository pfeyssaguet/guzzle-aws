<?php
/**
 * @package Guzzle PHP <http://www.guzzlephp.org>
 * @license See the LICENSE file that was distributed with this source code.
 */

namespace Guzzle\Aws\Mws\Command;

/**
 * Returns orders based on the AmazonOrderIds that you specify.
 *
 * @author Harold Asbridge <harold@shoebacca.com>
 *
 */
class GetCompetitivePrice extends AbstractMwsCommand
{

    /**
     * Build the HTTP request
     */
    protected function build()
    {
        parent::build();
        // Change path
        $this->getRequest()->setPath('/Products/2011-10-01');

        // Copy Merchant parameter to SellerId, because Amazon is stupid and can't even follow their own standards
        $this->getRequest()->getQuery()->set('SellerId', $this->getRequest()->getQuery()->get('Merchant'));
        
        // Copy Marketplace parameter to MarketplaceId, because Amazon is stupid and can't even follow their own standards
        $this->getRequest()->getQuery()->set('MarketplaceId', $this->getRequest()->getQuery()->get('Marketplace'));
    }

    /**
     * {@inheritdoc}
     */
    protected $action = 'GetCompetitivePricingForASIN';
    
    /**
     * {@inheritdoc}
     */
    //protected $recordPath = '//Orders/Order';
    
    /**
     * {@inheritdoc}
     */
    protected $version = '2011-10-01';


    protected $resultNode = '.';
    /**
     * Set amazon order ID(s)
     *
     * @param array $amazonOrderIds
     *
     * @return GetOrder
     */
    public function setSearchASIN(array $skus)
    {
        return $this->set('ASINList', array(
            'ASIN' => $skus
        ));
    }

    /**
     * {@inheritdoc}
     */
    protected function process()
    {
        parent::process();
        
        foreach($this->result->GetCompetitivePricingForASINResult as $resultSet){
            $node[] = $resultSet;
        }
        $this->result =  $node;
    }
}