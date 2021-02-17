<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/avatar
 *
 * Class Avatar
 * @package breakpoint\etsy
 */
class Avatar extends EtsyRequest {

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function uploadAvatar(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/users/:user_id/avatar', $parameters, $data);
    }

    /**
     * Get avatar image source
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getAvatarImgSrc(array $parameters = []) {
        return $this->get('/users/:user_id/avatar/src', $parameters);
    }

}