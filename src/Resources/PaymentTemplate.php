<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

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
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findShopPaymentTemplates(array $parameters = []) {
        return $this->get('/shops/:shop_id/payment_templates', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function createShopPaymentTemplate(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/shops/:shop_id/payment_templates', $parameters, $data);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function updateShopPaymentTemplate(array $parameters = [], array $data = []) {
        return $this->oauth()->put('/shops/:shop_id/payment_templates/:payment_template_id', $parameters, $data);
    }

    /**
     * Retrieves a set of PaymentTemplate objects associated to a User.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllUserPaymentTemplates(array $parameters = []) {
        return $this->oauth()->get('/users/:user_id/payments/templates', $parameters);
    }

}