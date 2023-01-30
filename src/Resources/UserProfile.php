<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function findUserProfile(array $parameters = []) {
        return $this->requestObject('GET', '/users/:user_id/profile', $parameters);
    }

    /**
     * Updates the UserProfile object associated with a User. <br /><b>Notes:</b><ul><li>Name changes are subject to admin review and therefore unavailable via the API.</li><li>Materials must be provided as a <i>period-separated</i> list of ASCII words.</ul>
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function updateUserProfile(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('PUT','/users/:user_id/profile', $parameters, $data);
    }

}