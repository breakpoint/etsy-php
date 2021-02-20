<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllUserPayments(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/users/:user_id/payments', $parameters);
    }

}