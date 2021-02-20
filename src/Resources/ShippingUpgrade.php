<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function getListingShippingUpgrades(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/listings/:listing_id/shipping/upgrades', $parameters);
    }

    /**
     * Creates a new ShippingUpgrade for the listing. Will unlink the listing if linked to a ShippingTemplate.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function createListingShippingUpgrade(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/listings/:listing_id/shipping/upgrades', $parameters);
    }

    /**
     * Updates a ShippingUpgrade on a listing. Will unlink the listing if linked to a ShippingTemplate.
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function updateListingShippingUpgrade(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('PUT','/listings/:listing_id/shipping/upgrades', $parameters, $data);
    }

    /**
     * Deletes the ShippingUpgrade from the listing. Will unlink the listing if linked to a ShippingTemplate.
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function deleteListingShippingUpgrade(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/listings/:listing_id/shipping/upgrades', $parameters, $data);
    }

    /**
     * Retrieves a list of shipping upgrades for the parent ShippingTemplate
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllShippingTemplateUpgrades(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/shipping/templates/:shipping_template_id/upgrades', $parameters);
    }

    /**
     * Creates a new ShippingUpgrade for the parent ShippingTemplate. Updates any listings linked to the ShippingTemplate.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function createShippingTemplateUpgrade(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/shipping/templates/:shipping_template_id/upgrades', $parameters);
    }

    /**
     * Updates a ShippingUpgrade of the parent ShippingTemplate. Updates any listings linked to the ShippingTemplate.
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function updateShippingTemplateUpgrade(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('PUT','/shipping/templates/:shipping_template_id/upgrades', $parameters, $data);
    }

    /**
     * Deletes the ShippingUpgrade from the parent ShippingTemplate. Updates any listings linked to the ShippingTemplate.
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function deleteShippingTemplateUpgrade(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/shipping/templates/:shipping_template_id/upgrades', $parameters, $data);
    }

}