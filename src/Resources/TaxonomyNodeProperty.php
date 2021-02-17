<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/taxonomynodeproperty
 *
 * Class TaxonomyNodeProperty
 * @package breakpoint\etsy
 */
class TaxonomyNodeProperty extends EtsyRequest {

    /**
     * Get the possible properties of a taxonomy node
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getTaxonomyNodeProperties(array $parameters = []) {
        return $this->get('/taxonomy/seller/:taxonomy_id/properties', $parameters);
    }

}