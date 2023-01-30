<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/taxonomy
 *
 * Class Taxonomy
 * @package breakpoint\etsy
 */
class Taxonomy extends EtsyRequest {

    /**
     * Retrieve the entire taxonomy as seen by buyers in search.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function getBuyerTaxonomy(array $parameters = []) {
        return $this->requestCollection('GET', '/taxonomy/buyer/get', $parameters);
    }

    /**
     * Retrieve the entire taxonomy as used by sellers in the listing process.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function getSellerTaxonomy(array $parameters = []) {
        return $this->requestCollection('GET', '/taxonomy/seller/get', $parameters);
    }

    /**
     * Get the current version of the seller taxonomy
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function getSellerTaxonomyVersion(array $parameters = []) {
        return $this->requestCollection('GET', '/taxonomy/seller/version', $parameters);
    }

}