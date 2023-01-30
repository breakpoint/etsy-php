<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllUserFavoredBy(array $parameters = []) {
        return $this->requestCollection('GET', '/users/:user_id/favored-by', $parameters);
    }

    /**
     * Finds all favorite users for a user
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllUserFavoriteUsers(array $parameters = []) {
        return $this->requestCollection('GET', '/users/:user_id/favorites/users', $parameters);
    }

    /**
     * Finds a favorite user for a user
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findUserFavoriteUsers(array $parameters = []) {
        return $this->requestCollection('GET', '/users/:user_id/favorites/users/:target_user_id', $parameters);
    }

    /**
     * Creates a new favorite listing for a user
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function createUserFavoriteUsers(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/users/:user_id/favorites/users/:target_user_id', $parameters);
    }

    /**
     * Delete a favorite listing for a user
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function deleteUserFavoriteUsers(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/users/:user_id/favorites/users/:target_user_id', $parameters, $data);
    }

}