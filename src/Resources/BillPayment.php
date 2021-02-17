<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/billpayment
 *
 * Class BillPayment
 * @package breakpoint\etsy
 */
class BillPayment extends EtsyRequest {

    /**
     * Retrieves a set of BillPayment objects associated to a User.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllUserPayments(array $parameters = []) {
        return $this->oauth()->get('/users/:user_id/payments', $parameters);
    }

}