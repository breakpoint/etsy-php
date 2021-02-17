<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

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
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllListingFiles(array $parameters = []) {
        return $this->oauth()->get('/listings/:listing_id/files', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function uploadListingFile(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/listings/:listing_id/files', $parameters, $data);
    }

    /**
     * Finds a ListingFile by ID
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findListingFile(array $parameters = []) {
        return $this->oauth()->get('/listings/:listing_id/files/:listing_file_id', $parameters);
    }

    /**
     * Removes the listing file from this listing.  If this is the last file on a listing, the listing will no longer
be considered a digital listing.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function deleteListingFile(array $parameters = []) {
        return $this->oauth()->delete('/listings/:listing_id/files/:listing_file_id', $parameters);
    }

}