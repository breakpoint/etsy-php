<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/user
 *
 * Class User
 * @package breakpoint\etsy
 */
class User extends EtsyRequest {

    /**
     * Returns a list of users for a specific team
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllUsersForTeam(array $parameters = []) {
        return $this->requestCollection('GET', '/teams/:team_id/users/', $parameters);
    }

    /**
     * Finds all Users whose name or username match the keywords parameter.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllUsers(array $parameters = []) {
        return $this->requestCollection('GET', '/users', $parameters);
    }

    /**
     * Retrieves a User by id.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getUser(array $parameters = []) {
        return $this->requestObject('GET', '/users/:user_id', $parameters);
    }

    /**
     * Returns a list of users who have circled this user
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function getCirclesContainingUser(array $parameters = []) {
        return $this->requestCollection('GET', '/users/:user_id/circles', $parameters);
    }

    /**
     * Returns details about a connection between users
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function getConnectedUser(array $parameters = []) {
        return $this->requestCollection('GET', '/users/:user_id/circles/:to_user_id', $parameters);
    }

    /**
     * Removes a user (to_user_id) from the logged in user's (user_id) circle
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function unconnectUsers(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/users/:user_id/circles/:to_user_id', $parameters, $data);
    }

    /**
     * Returns a list of users that are in this user's cricle
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function getConnectedUsers(array $parameters = []) {
        return $this->requestCollection('GET', '/users/:user_id/connected_users', $parameters);
    }

    /**
     * Adds user (to_user_id) to the user's (user_id) circle
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function connectUsers(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/users/:user_id/connected_users', $parameters);
    }

}