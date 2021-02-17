<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

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
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllUsersForTeam(array $parameters = []) {
        return $this->get('/teams/:team_id/users/', $parameters);
    }

    /**
     * Finds all Users whose name or username match the keywords parameter.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllUsers(array $parameters = []) {
        return $this->get('/users', $parameters);
    }

    /**
     * Retrieves a User by id.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getUser(array $parameters = []) {
        return $this->get('/users/:user_id', $parameters);
    }

    /**
     * Returns a list of users who have circled this user
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getCirclesContainingUser(array $parameters = []) {
        return $this->get('/users/:user_id/circles', $parameters);
    }

    /**
     * Returns details about a connection between users
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getConnectedUser(array $parameters = []) {
        return $this->get('/users/:user_id/circles/:to_user_id', $parameters);
    }

    /**
     * Removes a user (to_user_id) from the logged in user's (user_id) circle
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function unconnectUsers(array $parameters = []) {
        return $this->oauth()->delete('/users/:user_id/circles/:to_user_id', $parameters);
    }

    /**
     * Returns a list of users that are in this user's cricle
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getConnectedUsers(array $parameters = []) {
        return $this->get('/users/:user_id/connected_users', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function connectUsers(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/users/:user_id/connected_users', $parameters, $data);
    }

}