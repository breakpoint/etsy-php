<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/treasurylisting
 *
 * Class TreasuryListing
 * @package breakpoint\etsy
 */
class TreasuryListing extends EtsyRequest {

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function addTreasuryListing(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/treasuries/:treasury_key/listings', $parameters, $data);
    }

    /**
     * Remove listing from a Treasury
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function removeTreasuryListing(array $parameters = []) {
        return $this->oauth()->delete('/treasuries/:treasury_key/listings/:listing_id', $parameters);
    }

}