<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/listingoffering
 *
 * Class ListingOffering
 * @package breakpoint\etsy
 */
class ListingOffering extends EtsyRequest {

    /**
     * Get a specific offering for a listing
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getOffering(array $parameters = []) {
        return $this->requestObject('GET', '/listings/:listing_id/products/:product_id/offerings/:offering_id', $parameters);
    }

}