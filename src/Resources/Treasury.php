<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllTreasuries(array $parameters = []) {
        return $this->requestCollection('GET', '/treasuries', $parameters);
    }

    /**
     * Get a Treasury
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function getTreasury(array $parameters = []) {
        return $this->requestCollection('GET', '/treasuries/:treasury_key', $parameters);
    }

    /**
     * Delete a Treasury
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function deleteTreasury(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/treasuries/:treasury_key', $parameters, $data);
    }

    /**
     * Get a user's Treasuries. <strong>Note:</strong> The <code>treasury_r</code> permission scope is required in order to display private Treasuries for a user when the boolean parameter <code>include_private</code> is <code>true</code>.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllUserTreasuries(array $parameters = []) {
        return $this->requestCollection('GET', '/users/:user_id/treasuries', $parameters);
    }

}