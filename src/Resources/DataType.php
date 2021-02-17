<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

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
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function describeOccasionEnum(array $parameters = []) {
        return $this->get('/types/enum/occasion', $parameters);
    }

    /**
     * Describes the legal values for Listing.recipient.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function describeRecipientEnum(array $parameters = []) {
        return $this->get('/types/enum/recipient', $parameters);
    }

    /**
     * Describes the legal values for Listing.when_made.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function describeWhenMadeEnum(array $parameters = []) {
        return $this->get('/types/enum/when_made', $parameters);
    }

    /**
     * Describes the legal values for Listing.who_made.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function describeWhoMadeEnum(array $parameters = []) {
        return $this->get('/types/enum/who_made', $parameters);
    }

}