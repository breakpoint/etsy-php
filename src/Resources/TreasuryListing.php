<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/treasurylisting
 *
 * Class TreasuryListing
 * @package breakpoint\etsy
 */
class TreasuryListing extends EtsyRequest {

    /**
     * Add listing to a Treasury
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function addTreasuryListing(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/treasuries/:treasury_key/listings', $parameters);
    }

    /**
     * Remove listing from a Treasury
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function removeTreasuryListing(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/treasuries/:treasury_key/listings/:listing_id', $parameters, $data);
    }

}