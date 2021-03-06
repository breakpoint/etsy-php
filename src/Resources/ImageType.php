<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function listImageTypes(array $parameters = []) {
        return $this->requestCollection('GET', '/image_types', $parameters);
    }

}