<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/featuredtreasury
 *
 * Class FeaturedTreasury
 * @package breakpoint\etsy
 */
class FeaturedTreasury extends EtsyRequest {

    /**
     * Finds all FeaturedTreasuries.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllFeaturedTreasuries(array $parameters = []) {
        return $this->requestCollection('GET', '/featured_treasuries', $parameters);
    }

    /**
     * Finds FeaturedTreasury by numeric ID.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getFeaturedTreasuryById(array $parameters = []) {
        return $this->requestObject('GET', '/featured_treasuries/:featured_treasury_id', $parameters);
    }

    /**
     * Finds all FeaturedTreasury by numeric owner_id.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllFeaturedTreasuriesByOwner(array $parameters = []) {
        return $this->requestCollection('GET', '/featured_treasuries/owner/:owner_id', $parameters);
    }

}