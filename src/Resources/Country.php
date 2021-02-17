<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

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
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllCountry(array $parameters = []) {
        return $this->get('/countries', $parameters);
    }

    /**
     * Retrieves a Country by id.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getCountry(array $parameters = []) {
        return $this->get('/countries/:country_id', $parameters);
    }

    /**
     * Get the country info for the given ISO code.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findByIsoCode(array $parameters = []) {
        return $this->get('/countries/iso/:iso_code', $parameters);
    }

}