<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/userprofile
 *
 * Class UserProfile
 * @package breakpoint\etsy
 */
class UserProfile extends EtsyRequest {

    /**
     * Returns the UserProfile object associated with a User.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findUserProfile(array $parameters = []) {
        return $this->get('/users/:user_id/profile', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function updateUserProfile(array $parameters = [], array $data = []) {
        return $this->oauth()->put('/users/:user_id/profile', $parameters, $data);
    }

}