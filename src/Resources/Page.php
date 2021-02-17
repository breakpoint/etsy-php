<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

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
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findPage(array $parameters = []) {
        return $this->get('/pages/:page_id', $parameters);
    }

    /**
     * Lists the pages that the current user is following
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function listFollowingPages(array $parameters = []) {
        return $this->get('/users/:user_id/connected_pages', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function pagesSignup(array $parameters = [], array $data = []) {
        return $this->post('/pages-signup', $parameters, $data);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function followPage(array $parameters = [], array $data = []) {
        return $this->post('/users/:user_id/connected_pages', $parameters, $data);
    }

    /**
     * Unfollow a page.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function unfollowPage(array $parameters = []) {
        return $this->delete('/users/:user_id/connected_pages/:page_id', $parameters);
    }

}