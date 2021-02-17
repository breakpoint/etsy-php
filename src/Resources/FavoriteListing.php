<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

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
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllListingFavoredBy(array $parameters = []) {
        return $this->get('/listings/:listing_id/favored-by', $parameters);
    }

    /**
     * Finds all favorite listings for a user
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllUserFavoriteListings(array $parameters = []) {
        return $this->get('/users/:user_id/favorites/listings', $parameters);
    }

    /**
     * Finds a favorite listing for a user
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findUserFavoriteListings(array $parameters = []) {
        return $this->get('/users/:user_id/favorites/listings/:listing_id', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function createUserFavoriteListings(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/users/:user_id/favorites/listings/:listing_id', $parameters, $data);
    }

    /**
     * Delete a favorite listing for a user
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function deleteUserFavoriteListings(array $parameters = []) {
        return $this->oauth()->delete('/users/:user_id/favorites/listings/:listing_id', $parameters);
    }

}