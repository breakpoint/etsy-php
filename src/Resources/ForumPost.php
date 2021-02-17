<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/forumpost
 *
 * Class ForumPost
 * @package breakpoint\etsy
 */
class ForumPost extends EtsyRequest {

    /**
     * Get a Treasury's Comments
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findTreasuryComments(array $parameters = []) {
        return $this->get('/treasuries/:treasury_key/comments', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function postTreasuryComment(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/treasuries/:treasury_key/comments', $parameters, $data);
    }

    /**
     * Delete a given comment on a Treasury List
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function deleteTreasuryComment(array $parameters = []) {
        return $this->oauth()->delete('/treasuries/:treasury_key/comments/:comment_id', $parameters);
    }

}