<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/billcharge
 *
 * Class BillCharge
 * @package breakpoint\etsy
 */
class BillCharge extends EtsyRequest {

    /**
     * Retrieves a set of BillCharge objects associated to a User. NOTE: from 8/8/12 the min_created and max_created arguments will be mandatory and can be no more than 31 days apart.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllUserCharges(array $parameters = []) {
        return $this->oauth()->get('/users/:user_id/charges', $parameters);
    }

    /**
     * Metadata for the set of BillCharges objects associated to a User
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getUserChargesMetadata(array $parameters = []) {
        return $this->oauth()->get('/users/:user_id/charges/meta', $parameters);
    }

}