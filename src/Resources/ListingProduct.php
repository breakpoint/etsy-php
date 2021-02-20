<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getProduct(array $parameters = []) {
        return $this->requestObject('GET', '/listings/:listing_id/products/:product_id', $parameters);
    }

}