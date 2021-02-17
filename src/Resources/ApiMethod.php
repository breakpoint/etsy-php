<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/apimethod
 *
 * Class ApiMethod
 * @package breakpoint\etsy
 */
class ApiMethod extends EtsyRequest {

    /**
     * Get a list of all methods available.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getMethodTable(array $parameters = []) {
        return $this->get('/', $parameters);
    }

}