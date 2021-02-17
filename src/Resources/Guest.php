<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/guest
 *
 * Class Guest
 * @package breakpoint\etsy
 */
class Guest extends EtsyRequest {

    /**
     * Get a guest by ID.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getGuest(array $parameters = []) {
        return $this->get('/guests/:guest_id', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function claimGuest(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/guests/:guest_id/claim', $parameters, $data);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function mergeGuest(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/guests/:guest_id/merge', $parameters, $data);
    }

    /**
     * A helper method that generates a Guest ID to associate to this anonymous session. This method is not strictly necessary, as any sufficiently random guest ID that is 13 characters in length will suffice and automatically create a guest account on use if it does not yet exist.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function generateGuest(array $parameters = []) {
        return $this->get('/guests/generator', $parameters);
    }

}