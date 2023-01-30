<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/country
 *
 * Class Country
 * @package breakpoint\etsy
 */
class Country extends EtsyRequest {

    /**
     * Finds all Country.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllCountry(array $parameters = []) {
        return $this->requestCollection('GET', '/countries', $parameters);
    }

    /**
     * Retrieves a Country by id.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getCountry(array $parameters = []) {
        return $this->requestObject('GET', '/countries/:country_id', $parameters);
    }

    /**
     * Get the country info for the given ISO code.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function findByIsoCode(array $parameters = []) {
        return $this->requestObject('GET', '/countries/iso/:iso_code', $parameters);
    }

}