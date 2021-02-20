<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/datatype
 *
 * Class DataType
 * @package breakpoint\etsy
 */
class DataType extends EtsyRequest {

    /**
     * Describes the legal values for Listing.occasion.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function describeOccasionEnum(array $parameters = []) {
        return $this->requestCollection('GET', '/types/enum/occasion', $parameters);
    }

    /**
     * Describes the legal values for Listing.recipient.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function describeRecipientEnum(array $parameters = []) {
        return $this->requestCollection('GET', '/types/enum/recipient', $parameters);
    }

    /**
     * Describes the legal values for Listing.when_made.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function describeWhenMadeEnum(array $parameters = []) {
        return $this->requestCollection('GET', '/types/enum/when_made', $parameters);
    }

    /**
     * Describes the legal values for Listing.who_made.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function describeWhoMadeEnum(array $parameters = []) {
        return $this->requestCollection('GET', '/types/enum/who_made', $parameters);
    }

}