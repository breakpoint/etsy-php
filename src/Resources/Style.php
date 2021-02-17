<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

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
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findSuggestedStyles(array $parameters = []) {
        return $this->get('/taxonomy/styles', $parameters);
    }

}