<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

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
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getPublicBaseline(array $parameters = []) {
        return $this->get('/baseline', $parameters);
    }

    /**
     * Pings a private v2 uri to get a performance baseline
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getPrivateBaseline(array $parameters = []) {
        return $this->get('/private-baseline', $parameters);
    }

}