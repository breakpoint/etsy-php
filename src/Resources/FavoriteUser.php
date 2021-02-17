<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/favoriteuser
 *
 * Class FavoriteUser
 * @package breakpoint\etsy
 */
class FavoriteUser extends EtsyRequest {

    /**
     * Retrieves a set of FavoriteUser objects associated to a User.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllUserFavoredBy(array $parameters = []) {
        return $this->get('/users/:user_id/favored-by', $parameters);
    }

    /**
     * Finds all favorite users for a user
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllUserFavoriteUsers(array $parameters = []) {
        return $this->get('/users/:user_id/favorites/users', $parameters);
    }

    /**
     * Finds a favorite user for a user
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findUserFavoriteUsers(array $parameters = []) {
        return $this->get('/users/:user_id/favorites/users/:target_user_id', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function createUserFavoriteUsers(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/users/:user_id/favorites/users/:target_user_id', $parameters, $data);
    }

    /**
     * Delete a favorite listing for a user
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function deleteUserFavoriteUsers(array $parameters = []) {
        return $this->oauth()->delete('/users/:user_id/favorites/users/:target_user_id', $parameters);
    }

}