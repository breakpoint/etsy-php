<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllPageCollections(array $parameters = []) {
        return $this->requestCollection('GET', '/pages/:page_id/collections', $parameters);
    }

    /**
     * Create a page collection for the given page.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function createPageCollection(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/pages/:page_id/collections', $parameters);
    }

    /**
     * Retrieve a single page collection.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getPageCollection(array $parameters = []) {
        return $this->requestObject('GET', '/pages/:page_id/collections/:collection_id', $parameters);
    }

    /**
     * Update a page collection.
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function updatePageCollection(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('PUT','/pages/:page_id/collections/:collection_id', $parameters, $data);
    }

    /**
     * Delete a page collection.
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function deletePageCollection(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/pages/:page_id/collections/:collection_id', $parameters, $data);
    }

}