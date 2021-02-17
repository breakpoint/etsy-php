<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/shippingupgrade
 *
 * Class ShippingUpgrade
 * @package breakpoint\etsy
 */
class ShippingUpgrade extends EtsyRequest {

    /**
     * Get the shipping upgrades available for a listing.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getListingShippingUpgrades(array $parameters = []) {
        return $this->oauth()->get('/listings/:listing_id/shipping/upgrades', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function createListingShippingUpgrade(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/listings/:listing_id/shipping/upgrades', $parameters, $data);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function updateListingShippingUpgrade(array $parameters = [], array $data = []) {
        return $this->oauth()->put('/listings/:listing_id/shipping/upgrades', $parameters, $data);
    }

    /**
     * Deletes the ShippingUpgrade from the listing. Will unlink the listing if linked to a ShippingTemplate.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function deleteListingShippingUpgrade(array $parameters = []) {
        return $this->oauth()->delete('/listings/:listing_id/shipping/upgrades', $parameters);
    }

    /**
     * Retrieves a list of shipping upgrades for the parent ShippingTemplate
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllShippingTemplateUpgrades(array $parameters = []) {
        return $this->oauth()->get('/shipping/templates/:shipping_template_id/upgrades', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function createShippingTemplateUpgrade(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/shipping/templates/:shipping_template_id/upgrades', $parameters, $data);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function updateShippingTemplateUpgrade(array $parameters = [], array $data = []) {
        return $this->oauth()->put('/shipping/templates/:shipping_template_id/upgrades', $parameters, $data);
    }

    /**
     * Deletes the ShippingUpgrade from the parent ShippingTemplate. Updates any listings linked to the ShippingTemplate.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function deleteShippingTemplateUpgrade(array $parameters = []) {
        return $this->oauth()->delete('/shipping/templates/:shipping_template_id/upgrades', $parameters);
    }

}