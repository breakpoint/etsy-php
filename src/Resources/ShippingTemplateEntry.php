<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/shippingtemplateentry
 *
 * Class ShippingTemplateEntry
 * @package breakpoint\etsy
 */
class ShippingTemplateEntry extends EtsyRequest {

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function createShippingTemplateEntry(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/shipping/templates/entries', $parameters, $data);
    }

    /**
     * Retrieves a ShippingTemplateEntry by id.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getShippingTemplateEntry(array $parameters = []) {
        return $this->oauth()->get('/shipping/templates/entries/:shipping_template_entry_id', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function updateShippingTemplateEntry(array $parameters = [], array $data = []) {
        return $this->oauth()->put('/shipping/templates/entries/:shipping_template_entry_id', $parameters, $data);
    }

    /**
     * Deletes the ShippingTemplateEntry
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function deleteShippingTemplateEntry(array $parameters = []) {
        return $this->oauth()->delete('/shipping/templates/entries/:shipping_template_entry_id', $parameters);
    }

}