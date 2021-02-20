<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/ledger
 *
 * Class Ledger
 * @package breakpoint\etsy
 */
class Ledger extends EtsyRequest {

    /**
     * Get a Shop Payment Account Ledger
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function findLedger(array $parameters = []) {
        return $this->oauth()->requestObject('GET', '/shops/:shop_id/ledger/', $parameters);
    }

}