<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/page
 *
 * Class Page
 * @package breakpoint\etsy
 */
class Page extends EtsyRequest {

    /**
     * Find a single page.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function findPage(array $parameters = []) {
        return $this->requestObject('GET', '/pages/:page_id', $parameters);
    }

    /**
     * Lists the pages that the current user is following
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function listFollowingPages(array $parameters = []) {
        return $this->requestCollection('GET', '/users/:user_id/connected_pages', $parameters);
    }

}