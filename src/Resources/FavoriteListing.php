<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/favoritelisting
 *
 * Class FavoriteListing
 * @package breakpoint\etsy
 */
class FavoriteListing extends EtsyRequest {

    /**
     * Retrieves a set of FavoriteListing objects associated to a Listing.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllListingFavoredBy(array $parameters = []) {
        return $this->requestCollection('GET', '/listings/:listing_id/favored-by', $parameters);
    }

    /**
     * Finds all favorite listings for a user
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllUserFavoriteListings(array $parameters = []) {
        return $this->requestCollection('GET', '/users/:user_id/favorites/listings', $parameters);
    }

    /**
     * Finds a favorite listing for a user
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findUserFavoriteListings(array $parameters = []) {
        return $this->requestCollection('GET', '/users/:user_id/favorites/listings/:listing_id', $parameters);
    }

    /**
     * Creates a new favorite listing for a user
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function createUserFavoriteListings(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/users/:user_id/favorites/listings/:listing_id', $parameters);
    }

    /**
     * Delete a favorite listing for a user
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function deleteUserFavoriteListings(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/users/:user_id/favorites/listings/:listing_id', $parameters, $data);
    }

}