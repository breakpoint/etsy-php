<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/region
 *
 * Class Region
 * @package breakpoint\etsy
 */
class Region extends EtsyRequest {

    /**
     * Finds all Region.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllRegion(array $parameters = []) {
        return $this->requestCollection('GET', '/regions', $parameters);
    }

    /**
     * Retrieves a Region by id.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getRegion(array $parameters = []) {
        return $this->requestObject('GET', '/regions/:region_id', $parameters);
    }

    /**
     * 
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findEligibleRegions(array $parameters = []) {
        return $this->requestCollection('GET', '/regions/eligible', $parameters);
    }

}