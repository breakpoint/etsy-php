<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/billingoverview
 *
 * Class BillingOverview
 * @package breakpoint\etsy
 */
class BillingOverview extends EtsyRequest {

    /**
     * Retrieves the user's current balance.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getUserBillingOverview(array $parameters = []) {
        return $this->oauth()->get('/users/:user_id/billing/overview', $parameters);
    }

}