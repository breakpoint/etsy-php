<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/listingtranslation
 *
 * Class ListingTranslation
 * @package breakpoint\etsy
 */
class ListingTranslation extends EtsyRequest {

    /**
     * Retrieves a ListingTranslation by listing_id and language
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getListingTranslation(array $parameters = []) {
        return $this->requestObject('GET', '/listings/:listing_id/translations/:language', $parameters);
    }

    /**
     * Creates a ListingTranslation by listing_id and language
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function createListingTranslation(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/listings/:listing_id/translations/:language', $parameters);
    }

    /**
     * Updates a ListingTranslation by listing_id and language
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function updateListingTranslation(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('PUT','/listings/:listing_id/translations/:language', $parameters, $data);
    }

    /**
     * Deletes a ListingTranslation by listing_id and language
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function deleteListingTranslation(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/listings/:listing_id/translations/:language', $parameters, $data);
    }

}