<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/pageimage
 *
 * Class PageImage
 * @package breakpoint\etsy
 */
class PageImage extends EtsyRequest {

    /**
     * Upload a new avatar
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function uploadAvatar(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/pages/:page_id/avatar', $parameters);
    }

}