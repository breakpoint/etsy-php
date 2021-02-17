<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

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
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getPropertyOptionModifier(array $parameters = []) {
        return $this->get('/property_options/modifiers', $parameters);
    }

}