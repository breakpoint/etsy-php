<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function getAttributes(array $parameters = []) {
        return $this->requestCollection('GET', '/listings/:listing_id/attributes', $parameters);
    }

    /**
     * Get an attribute for a listing
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getAttribute(array $parameters = []) {
        return $this->requestObject('GET', '/listings/:listing_id/attributes/:property_id', $parameters);
    }

    /**
     * Update or populate an attribute for a listing
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function updateAttribute(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('PUT','/listings/:listing_id/attributes/:property_id', $parameters, $data);
    }

    /**
     * Delete an attribute for a listing
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function deleteAttribute(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/listings/:listing_id/attributes/:property_id', $parameters, $data);
    }

}