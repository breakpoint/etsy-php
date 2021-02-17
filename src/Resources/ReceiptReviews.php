<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

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
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getShopReviews(array $parameters = []) {
        return $this->get('/shops/:shop_id/reviews', $parameters);
    }

}