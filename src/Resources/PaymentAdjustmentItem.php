<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/paymentadjustmentitem
 *
 * Class PaymentAdjustmentItem
 * @package breakpoint\etsy
 */
class PaymentAdjustmentItem extends EtsyRequest {

    /**
     * Get Etsy Payments Transaction Adjustment Items
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findPaymentAdjustmentItems(array $parameters = []) {
        return $this->oauth()->get('/payments/:payment_id/adjustments/:payment_adjustment_id/items', $parameters);
    }

    /**
     * Get an Etsy Payments Transaction Adjustment Item
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findPaymentAdjustmentItem(array $parameters = []) {
        return $this->oauth()->get('/payments/:payment_id/adjustments/:payment_adjustment_id/items/:payment_adjustment_item_id', $parameters);
    }

}