<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at:
 *
 * Class Baseline
 * @package breakpoint\etsy
 */
class Baseline extends EtsyRequest {

    /**
     * Pings a public v2 uri to get a performance baseline
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getPublicBaseline(array $parameters = []) {
        return $this->requestObject('GET', '/baseline', $parameters);
    }

    /**
     * Pings a private v2 uri to get a performance baseline
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getPrivateBaseline(array $parameters = []) {
        return $this->requestObject('GET', '/private-baseline', $parameters);
    }

}