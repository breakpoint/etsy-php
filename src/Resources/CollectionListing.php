<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/collectionlisting
 *
 * Class CollectionListing
 * @package breakpoint\etsy
 */
class CollectionListing extends EtsyRequest {

    /**
     * Retrieve the listings for a single page collection.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getCollectionListings(array $parameters = []) {
        return $this->get('/pages/:page_id/collections/:collection_id/listings', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function addListingToCollection(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/pages/:page_id/collections/:collection_id/listings/:listing_id', $parameters, $data);
    }

    /**
     * Remove a listing from a collection
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function removeListingFromCollection(array $parameters = []) {
        return $this->oauth()->delete('/pages/:page_id/collections/:collection_id/listings/:listing_id', $parameters);
    }

}