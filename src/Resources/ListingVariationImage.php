<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/listingvariationimage
 *
 * Class ListingVariationImage
 * @package breakpoint\etsy
 */
class ListingVariationImage extends EtsyRequest {

    /**
     * Gets all variation images on a listing
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getVariationImages(array $parameters = []) {
        return $this->get('/listings/:listing_id/variation-images', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function updateVariationImages(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/listings/:listing_id/variation-images', $parameters, $data);
    }

}