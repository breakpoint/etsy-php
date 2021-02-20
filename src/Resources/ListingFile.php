<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/listingfile
 *
 * Class ListingFile
 * @package breakpoint\etsy
 */
class ListingFile extends EtsyRequest {

    /**
     * Finds all ListingFiles on a Listing
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllListingFiles(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/listings/:listing_id/files', $parameters);
    }

    /**
     * Upload a new listing file, or attach an existing file to this listing.  You must either provide the listing_file_id
of an existing listing file, or the name and file data of a new file that you are uploading.  If you are attaching
a file to a listing that is currently not digital, the listing will be converted to a digital listing.  This will
cause the listing to have free shipping and will remove any variations.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function uploadListingFile(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/listings/:listing_id/files', $parameters);
    }

    /**
     * Finds a ListingFile by ID
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function findListingFile(array $parameters = []) {
        return $this->oauth()->requestObject('GET', '/listings/:listing_id/files/:listing_file_id', $parameters);
    }

    /**
     * Removes the listing file from this listing.  If this is the last file on a listing, the listing will no longer
be considered a digital listing.
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function deleteListingFile(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/listings/:listing_id/files/:listing_file_id', $parameters, $data);
    }

}