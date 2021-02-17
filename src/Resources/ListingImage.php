<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/listingimage
 *
 * Class ListingImage
 * @package breakpoint\etsy
 */
class ListingImage extends EtsyRequest {

    /**
     * Retrieves a set of ListingImage objects associated to a Listing.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllListingImages(array $parameters = []) {
        return $this->get('/listings/:listing_id/images', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function uploadListingImage(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/listings/:listing_id/images', $parameters, $data);
    }

    /**
     * Retrieves a Image_Listing by id.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getImage_Listing(array $parameters = []) {
        return $this->get('/listings/:listing_id/images/:listing_image_id', $parameters);
    }

    /**
     * Deletes a listing image. A copy of the file remains on our servers,
                                       and so a deleted image may be re-associated with the listing without
                                       re-uploading the original image; see uploadListingImage
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function deleteListingImage(array $parameters = []) {
        return $this->oauth()->delete('/listings/:listing_id/images/:listing_image_id', $parameters);
    }

}