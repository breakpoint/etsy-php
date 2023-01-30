<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/avatar
 *
 * Class Avatar
 * @package breakpoint\etsy
 */
class Avatar extends EtsyRequest {

    /**
     * Upload a new user avatar image
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function uploadAvatar(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/users/:user_id/avatar', $parameters);
    }

    /**
     * Get avatar image source
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getAvatarImgSrc(array $parameters = []) {
        return $this->requestObject('GET', '/users/:user_id/avatar/src', $parameters);
    }

}