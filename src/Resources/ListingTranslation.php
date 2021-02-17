<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

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
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getListingTranslation(array $parameters = []) {
        return $this->get('/listings/:listing_id/translations/:language', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function createListingTranslation(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/listings/:listing_id/translations/:language', $parameters, $data);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function updateListingTranslation(array $parameters = [], array $data = []) {
        return $this->oauth()->put('/listings/:listing_id/translations/:language', $parameters, $data);
    }

    /**
     * Deletes a ListingTranslation by listing_id and language
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function deleteListingTranslation(array $parameters = []) {
        return $this->oauth()->delete('/listings/:listing_id/translations/:language', $parameters);
    }

}