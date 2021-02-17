<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://groups.google.com/g/etsy-api-v2/c/_TA7DrM2uSU/m/rSs2INR9orQJ
 *
 * Class Application
 * @package breakpoint\etsy
 */
class Application extends EtsyRequest {

    /**
     * Returns all provisional users currently added for your application. Initially, this will be an empty list, []. This list does not include the user who owns the application, so seeing an empty list does not indicate that you can no longer authenticate as the application owner.
     *
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getProvisional() {
        return $this->v3()->get('application/provisional-users');
    }

    /**
     * Submit this request as a POST, and replace :user_id with the login name or ID of the user you would like to add as a provisional user. Once this user is added, your provisional application will be able to authenticate this user via OAuth. Note that this call only works for applications that do not yet have full access.
     *
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function addProvisional(array $parameters = [], array $data = []) {
        return $this->v3()->post('/application/provisional-users/:user_id', $parameters, $data);
    }

    /**
     * Submit this with the DELETE method, and again, replace :user_id with the login_name or ID of the user you would like to remove as a provisional user.
     *
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function removeProvisional(array $parameters = []) {
        return $this->v3()->delete('application/provisional-users/:user_id', $parameters);
    }


}