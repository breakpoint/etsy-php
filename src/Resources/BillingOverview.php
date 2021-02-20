<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getUserBillingOverview(array $parameters = []) {
        return $this->oauth()->requestObject('GET', '/users/:user_id/billing/overview', $parameters);
    }

}