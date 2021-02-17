<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/collection
 *
 * Class Collection
 * @package breakpoint\etsy
 */
class Collection extends EtsyRequest {

    /**
     * See all of a page's public collections.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllPageCollections(array $parameters = []) {
        return $this->get('/pages/:page_id/collections', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function createPageCollection(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/pages/:page_id/collections', $parameters, $data);
    }

    /**
     * Retrieve a single page collection.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getPageCollection(array $parameters = []) {
        return $this->get('/pages/:page_id/collections/:collection_id', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function updatePageCollection(array $parameters = [], array $data = []) {
        return $this->oauth()->put('/pages/:page_id/collections/:collection_id', $parameters, $data);
    }

    /**
     * Delete a page collection.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function deletePageCollection(array $parameters = []) {
        return $this->oauth()->delete('/pages/:page_id/collections/:collection_id', $parameters);
    }

    /**
     * Find the collection ids for the authorized page and listing ids
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findPageCollectionsForListings(array $parameters = []) {
        return $this->oauth()->get('/pages/:page_id/collections/listings_map', $parameters);
    }
}