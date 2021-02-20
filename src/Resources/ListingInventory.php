<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function getInventory(array $parameters = []) {
        return $this->requestCollection('GET', '/listings/:listing_id/inventory', $parameters);
    }

    /**
     * Update the inventory for a listing
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function updateInventory(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('PUT','/listings/:listing_id/inventory', $parameters, $data);
    }

}