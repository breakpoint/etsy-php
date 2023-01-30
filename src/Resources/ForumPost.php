<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findTreasuryComments(array $parameters = []) {
        return $this->requestCollection('GET', '/treasuries/:treasury_key/comments', $parameters);
    }

    /**
     * Leave a comment on a Treasury List
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function postTreasuryComment(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/treasuries/:treasury_key/comments', $parameters);
    }

    /**
     * Delete a given comment on a Treasury List
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function deleteTreasuryComment(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/treasuries/:treasury_key/comments/:comment_id', $parameters, $data);
    }

}