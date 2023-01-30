<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/variations_propertyset
 *
 * Class Variations_PropertySet
 * @package breakpoint\etsy
 */
class Variations_PropertySet extends EtsyRequest {

    /**
     * Find the property set for the category id
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function findPropertySet(array $parameters = []) {
        return $this->requestObject('GET', '/property_sets', $parameters);
    }

}