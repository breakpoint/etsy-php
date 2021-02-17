<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/treasury
 *
 * Class Treasury
 * @package breakpoint\etsy
 */
class Treasury extends EtsyRequest {

    /**
     * Search Treasuries or else List all Treasuries
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllTreasuries(array $parameters = []) {
        return $this->get('/treasuries', $parameters);
    }

    /**
     * Get a Treasury
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getTreasury(array $parameters = []) {
        return $this->get('/treasuries/:treasury_key', $parameters);
    }

    /**
     * Delete a Treasury
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function deleteTreasury(array $parameters = []) {
        return $this->oauth()->delete('/treasuries/:treasury_key', $parameters);
    }

    /**
     * Get a user's Treasuries. <strong>Note:</strong> The <code>treasury_r</code> permission scope is required in order to display private Treasuries for a user when the boolean parameter <code>include_private</code> is <code>true</code>.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllUserTreasuries(array $parameters = []) {
        return $this->get('/users/:user_id/treasuries', $parameters);
    }

}