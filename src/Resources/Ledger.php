<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

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
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findLedger(array $parameters = []) {
        return $this->oauth()->get('/shops/:shop_id/ledger/', $parameters);
    }

}