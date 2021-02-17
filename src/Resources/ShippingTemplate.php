<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/shippingtemplate
 *
 * Class ShippingTemplate
 * @package breakpoint\etsy
 */
class ShippingTemplate extends EtsyRequest {

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function createShippingTemplate(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/shipping/templates', $parameters, $data);
    }

    /**
     * Retrieves a ShippingTemplate by id.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getShippingTemplate(array $parameters = []) {
        return $this->oauth()->get('/shipping/templates/:shipping_template_id', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function updateShippingTemplate(array $parameters = [], array $data = []) {
        return $this->oauth()->put('/shipping/templates/:shipping_template_id', $parameters, $data);
    }

    /**
     * Deletes the ShippingTemplate with the given id.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function deleteShippingTemplate(array $parameters = []) {
        return $this->oauth()->delete('/shipping/templates/:shipping_template_id', $parameters);
    }

    /**
     * Retrieves a set of ShippingTemplateEntry objects associated to a ShippingTemplate.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllShippingTemplateEntries(array $parameters = []) {
        return $this->oauth()->get('/shipping/templates/:shipping_template_id/entries', $parameters);
    }

    /**
     * Retrieves a set of ShippingTemplate objects associated to a User.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllUserShippingProfiles(array $parameters = []) {
        return $this->oauth()->get('/users/:user_id/shipping/templates', $parameters);
    }

}