<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function getCollectionListings(array $parameters = []) {
        return $this->requestCollection('GET', '/pages/:page_id/collections/:collection_id/listings', $parameters);
    }

    /**
     * Add a listing to a page collection
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function addListingToCollection(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/pages/:page_id/collections/:collection_id/listings/:listing_id', $parameters);
    }

    /**
     * Remove a listing from a collection
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function removeListingFromCollection(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/pages/:page_id/collections/:collection_id/listings/:listing_id', $parameters, $data);
    }

}