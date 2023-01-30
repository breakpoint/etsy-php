<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/shippinginfo
 *
 * Class ShippingInfo
 * @package breakpoint\etsy
 */
class ShippingInfo extends EtsyRequest {

    /**
     * Retrieves a set of ShippingProfileEntries objects associated to a Listing.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllListingShippingProfileEntries(array $parameters = []) {
        return $this->requestCollection('GET', '/listings/:listing_id/shipping/info', $parameters);
    }

    /**
     * Creates a new ShippingInfo.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function createShippingInfo(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/listings/:listing_id/shipping/info', $parameters);
    }

    /**
     * Retrieves a ShippingInfo by id.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getShippingInfo(array $parameters = []) {
        return $this->oauth()->requestObject('GET', '/shipping/info/:shipping_info_id', $parameters);
    }

    /**
     * Updates a ShippingInfo with the given id.
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function updateShippingInfo(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('PUT','/shipping/info/:shipping_info_id', $parameters, $data);
    }

    /**
     * Deletes the ShippingInfo with the given id.
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function deleteShippingInfo(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/shipping/info/:shipping_info_id', $parameters, $data);
    }

}