<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function getVariationImages(array $parameters = []) {
        return $this->requestCollection('GET', '/listings/:listing_id/variation-images', $parameters);
    }

    /**
     * Creates variation images on a listing
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function updateVariationImages(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/listings/:listing_id/variation-images', $parameters);
    }

}