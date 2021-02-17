<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/imagetype
 *
 * Class ImageType
 * @package breakpoint\etsy
 */
class ImageType extends EtsyRequest {

    /**
     * Lists available image types along with their supported sizes.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function listImageTypes(array $parameters = []) {
        return $this->get('/image_types', $parameters);
    }

}