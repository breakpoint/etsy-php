<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/useraddress
 *
 * Class UserAddress
 * @package breakpoint\etsy
 */
class UserAddress extends EtsyRequest {

    /**
     * Retrieves a set of UserAddress objects associated to a User.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllUserAddresses(array $parameters = []) {
        return $this->oauth()->get('/users/:user_id/addresses', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function createUserAddress(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/users/:user_id/addresses/', $parameters, $data);
    }

    /**
     * Retrieves a UserAddress by id.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getUserAddress(array $parameters = []) {
        return $this->oauth()->get('/users/:user_id/addresses/:user_address_id', $parameters);
    }

    /**
     * Deletes the UserAddress with the given id.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function deleteUserAddress(array $parameters = []) {
        return $this->oauth()->delete('/users/:user_id/addresses/:user_address_id', $parameters);
    }

}