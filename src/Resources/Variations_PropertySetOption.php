<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/variations_propertysetoption
 *
 * Class Variations_PropertySetOption
 * @package breakpoint\etsy
 */
class Variations_PropertySetOption extends EtsyRequest {

    /**
     * Finds all suggested property options for a given property.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllSuggestedPropertyOptions(array $parameters = []) {
        return $this->requestCollection('GET', '/property_options/suggested', $parameters);
    }

}