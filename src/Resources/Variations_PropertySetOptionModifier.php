<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/variations_propertysetoptionmodifier
 *
 * Class Variations_PropertySetOptionModifier
 * @package breakpoint\etsy
 */
class Variations_PropertySetOptionModifier extends EtsyRequest {

    /**
     * Add a value for a given property.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function getPropertyOptionModifier(array $parameters = []) {
        return $this->requestCollection('GET', '/property_options/modifiers', $parameters);
    }

}