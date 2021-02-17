<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at:
 *
 * Class Server
 * @package breakpoint\etsy
 */
class Server extends EtsyRequest {

    /**
     * Check that the server is alive.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function ping(array $parameters = []) {
        return $this->get('/server/ping', $parameters);
    }

    /**
     * Get server time, in epoch seconds notation.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getServerEpoch(array $parameters = []) {
        return $this->get('/server/epoch', $parameters);
    }
}