<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getGuest(array $parameters = []) {
        return $this->requestObject('GET', '/guests/:guest_id', $parameters);
    }

    /**
     * Claim this guest to the associated user. Merges the GuestCart's associated with this GuestId into the logged in User's Carts. Returns the number of listings merged in meta['listings_merged'].
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function claimGuest(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/guests/:guest_id/claim', $parameters);
    }

    /**
     * Merge this guest to a different guest. Merges the GuestCart's associated with this GuestId into the target guest's cart. Returns the number of listings merged in meta['listings_merged'].
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function mergeGuest(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/guests/:guest_id/merge', $parameters);
    }

    /**
     * A helper method that generates a Guest ID to associate to this anonymous session. This method is not strictly necessary, as any sufficiently random guest ID that is 13 characters in length will suffice and automatically create a guest account on use if it does not yet exist.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function generateGuest(array $parameters = []) {
        return $this->requestCollection('GET', '/guests/generator', $parameters);
    }

}