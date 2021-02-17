<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

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
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findPropertySet(array $parameters = []) {
        return $this->get('/property_sets', $parameters);
    }

}