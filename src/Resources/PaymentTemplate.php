<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/paymenttemplate
 *
 * Class PaymentTemplate
 * @package breakpoint\etsy
 */
class PaymentTemplate extends EtsyRequest {

    /**
     * Retrieves the PaymentTemplate associated with the Shop
     *
     * @param array $parameters
     * @return EtsyObject
     */
    public function findShopPaymentTemplates(array $parameters = []) {
        return $this->requestObject('GET', '/shops/:shop_id/payment_templates', $parameters);
    }

    /**
     * Creates a new PaymentTemplate
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function createShopPaymentTemplate(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/shops/:shop_id/payment_templates', $parameters);
    }

    /**
     * Updates a PaymentTemplate
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function updateShopPaymentTemplate(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('PUT','/shops/:shop_id/payment_templates/:payment_template_id', $parameters, $data);
    }

    /**
     * Retrieves a set of PaymentTemplate objects associated to a User.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllUserPaymentTemplates(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/users/:user_id/payments/templates', $parameters);
    }

}