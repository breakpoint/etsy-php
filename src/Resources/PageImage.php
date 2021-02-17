<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/pageimage
 *
 * Class PageImage
 * @package breakpoint\etsy
 */
class PageImage extends EtsyRequest {

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function uploadAvatar(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/pages/:page_id/avatar', $parameters, $data);
    }

}