<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllUserAddresses(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/users/:user_id/addresses', $parameters);
    }

    /**
     * Creates a new UserAddress. Note: state is required when the country is US, Canada, or Australia. See section above about valid codes.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function createUserAddress(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/users/:user_id/addresses/', $parameters);
    }

    /**
     * Retrieves a UserAddress by id.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getUserAddress(array $parameters = []) {
        return $this->oauth()->requestObject('GET', '/users/:user_id/addresses/:user_address_id', $parameters);
    }

    /**
     * Deletes the UserAddress with the given id.
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function deleteUserAddress(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/users/:user_id/addresses/:user_address_id', $parameters, $data);
    }

}