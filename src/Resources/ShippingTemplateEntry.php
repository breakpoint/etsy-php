<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/shippingtemplateentry
 *
 * Class ShippingTemplateEntry
 * @package breakpoint\etsy
 */
class ShippingTemplateEntry extends EtsyRequest {

    /**
     * Creates a new ShippingTemplateEntry
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function createShippingTemplateEntry(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/shipping/templates/entries', $parameters);
    }

    /**
     * Retrieves a ShippingTemplateEntry by id.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getShippingTemplateEntry(array $parameters = []) {
        return $this->oauth()->requestObject('GET', '/shipping/templates/entries/:shipping_template_entry_id', $parameters);
    }

    /**
     * Updates a ShippingTemplateEntry
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function updateShippingTemplateEntry(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('PUT','/shipping/templates/entries/:shipping_template_entry_id', $parameters, $data);
    }

    /**
     * Deletes the ShippingTemplateEntry
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function deleteShippingTemplateEntry(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/shipping/templates/entries/:shipping_template_entry_id', $parameters, $data);
    }

}