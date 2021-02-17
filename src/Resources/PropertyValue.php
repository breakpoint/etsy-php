<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/propertyvalue
 *
 * Class PropertyValue
 * @package breakpoint\etsy
 */
class PropertyValue extends EtsyRequest {

    /**
     * Get all of the attributes for a listing
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getAttributes(array $parameters = []) {
        return $this->get('/listings/:listing_id/attributes', $parameters);
    }

    /**
     * Get an attribute for a listing
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getAttribute(array $parameters = []) {
        return $this->get('/listings/:listing_id/attributes/:property_id', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function updateAttribute(array $parameters = [], array $data = []) {
        return $this->oauth()->put('/listings/:listing_id/attributes/:property_id', $parameters, $data);
    }

    /**
     * Delete an attribute for a listing
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function deleteAttribute(array $parameters = []) {
        return $this->oauth()->delete('/listings/:listing_id/attributes/:property_id', $parameters);
    }

}