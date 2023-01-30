<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function ping(array $parameters = []) {
        return $this->requestObject('GET', '/server/ping', $parameters);
    }

    /**
     * Get server time, in epoch seconds notation.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getServerEpoch(array $parameters = []) {
        return $this->requestObject('GET', '/server/epoch', $parameters);
    }
}