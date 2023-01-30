<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/shippingtemplate
 *
 * Class ShippingTemplate
 * @package breakpoint\etsy
 */
class ShippingTemplate extends EtsyRequest {

    /**
     * Creates a new ShippingTemplate
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function createShippingTemplate(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/shipping/templates', $parameters);
    }

    /**
     * Retrieves a ShippingTemplate by id.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getShippingTemplate(array $parameters = []) {
        return $this->oauth()->requestObject('GET', '/shipping/templates/:shipping_template_id', $parameters);
    }

    /**
     * Updates a ShippingTemplate
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function updateShippingTemplate(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('PUT','/shipping/templates/:shipping_template_id', $parameters, $data);
    }

    /**
     * Deletes the ShippingTemplate with the given id.
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function deleteShippingTemplate(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/shipping/templates/:shipping_template_id', $parameters, $data);
    }

    /**
     * Retrieves a set of ShippingTemplateEntry objects associated to a ShippingTemplate.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllShippingTemplateEntries(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/shipping/templates/:shipping_template_id/entries', $parameters);
    }

    /**
     * Retrieves a set of ShippingTemplate objects associated to a User.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllUserShippingProfiles(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/users/:user_id/shipping/templates', $parameters);
    }

}