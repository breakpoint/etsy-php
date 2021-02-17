<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

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
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getOffering(array $parameters = []) {
        return $this->get('/listings/:listing_id/products/:product_id/offerings/:offering_id', $parameters);
    }

}