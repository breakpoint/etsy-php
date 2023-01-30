<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function getMethodTable(array $parameters = []) {
        return $this->requestCollection('GET', '/', $parameters);
    }

}