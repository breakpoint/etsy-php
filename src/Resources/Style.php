<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/style
 *
 * Class Style
 * @package breakpoint\etsy
 */
class Style extends EtsyRequest {

    /**
     * Retrieve all suggested styles.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findSuggestedStyles(array $parameters = []) {
        return $this->requestCollection('GET', '/taxonomy/styles', $parameters);
    }

}