<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

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
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllListingShippingProfileEntries(array $parameters = []) {
        return $this->get('/listings/:listing_id/shipping/info', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function createShippingInfo(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/listings/:listing_id/shipping/info', $parameters, $data);
    }

    /**
     * Retrieves a ShippingInfo by id.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getShippingInfo(array $parameters = []) {
        return $this->oauth()->get('/shipping/info/:shipping_info_id', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function updateShippingInfo(array $parameters = [], array $data = []) {
        return $this->oauth()->put('/shipping/info/:shipping_info_id', $parameters, $data);
    }

    /**
     * Deletes the ShippingInfo with the given id.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function deleteShippingInfo(array $parameters = []) {
        return $this->oauth()->delete('/shipping/info/:shipping_info_id', $parameters);
    }

}