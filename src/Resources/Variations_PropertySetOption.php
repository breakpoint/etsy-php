<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

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
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllSuggestedPropertyOptions(array $parameters = []) {
        return $this->get('/property_options/suggested', $parameters);
    }

}