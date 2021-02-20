<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllListingImages(array $parameters = []) {
        return $this->requestCollection('GET', '/listings/:listing_id/images', $parameters);
    }

    /**
     * Upload a new listing image, or re-associate a previously deleted one. You may associate an image
                                      to any listing within the same shop that the image's original listing belongs to.
                                      You MUST pass either a listing_image_id OR an image to this method.
                                      Passing a listing_image_id serves to re-associate an image that was previously deleted.
                                      If you wish to re-associate an image, we strongly recommend using the listing_image_id
                                      argument as opposed to re-uploading a new image each time, to save bandwidth for you as well as us.
                                      Pass overwrite=1 to replace the existing image at a given rank.
                                      When uploading a new listing image with a watermark, pass is_watermarked=1; existing listing images
                                      will not be affected by this parameter.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function uploadListingImage(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/listings/:listing_id/images', $parameters);
    }

    /**
     * Retrieves a Image_Listing by id.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getImage_Listing(array $parameters = []) {
        return $this->requestObject('GET', '/listings/:listing_id/images/:listing_image_id', $parameters);
    }

    /**
     * Deletes a listing image. A copy of the file remains on our servers,
                                       and so a deleted image may be re-associated with the listing without
                                       re-uploading the original image; see uploadListingImage
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function deleteListingImage(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/listings/:listing_id/images/:listing_image_id', $parameters, $data);
    }

}