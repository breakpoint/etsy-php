<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/receiptreviews
 *
 * Class ReceiptReviews
 * @package breakpoint\etsy
 */
class ReceiptReviews extends EtsyRequest {

    /**
     * Retrieves a list of reviews left for listings purchased from a shop
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function getShopReviews(array $parameters = []) {
        return $this->requestCollection('GET', '/shops/:shop_id/reviews', $parameters);
    }

}