<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

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
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllRegion(array $parameters = []) {
        return $this->get('/regions', $parameters);
    }

    /**
     * Retrieves a Region by id.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getRegion(array $parameters = []) {
        return $this->get('/regions/:region_id', $parameters);
    }

    /**
     * 
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findEligibleRegions(array $parameters = []) {
        return $this->get('/regions/eligible', $parameters);
    }

}