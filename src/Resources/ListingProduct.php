<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/listingproduct
 *
 * Class ListingProduct
 * @package breakpoint\etsy
 */
class ListingProduct extends EtsyRequest {

    /**
     * Get a specific offering for a listing
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getProduct(array $parameters = []) {
        return $this->get('/listings/:listing_id/products/:product_id', $parameters);
    }

}