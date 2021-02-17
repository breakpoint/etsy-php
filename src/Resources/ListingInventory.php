<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/listinginventory
 *
 * Class ListingInventory
 * @package breakpoint\etsy
 */
class ListingInventory extends EtsyRequest {

    /**
     * Get the inventory for a listing
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getInventory(array $parameters = []) {
        return $this->get('/listings/:listing_id/inventory', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function updateInventory(array $parameters = [], array $data = []) {
        return $this->oauth()->put('/listings/:listing_id/inventory', $parameters, $data);
    }

}