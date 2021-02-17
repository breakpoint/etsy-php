<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/paymentadjustment
 *
 * Class PaymentAdjustment
 * @package breakpoint\etsy
 */
class PaymentAdjustment extends EtsyRequest {

    /**
     * Get a Payment Adjustments from a Payment Id
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findPaymentAdjustments(array $parameters = []) {
        return $this->oauth()->get('/payments/:payment_id/adjustments', $parameters);
    }

    /**
     * Get an Etsy Payments Transaction Adjustment
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findPaymentAdjustment(array $parameters = []) {
        return $this->oauth()->get('/payments/:payment_id/adjustments/:payment_adjustment_id', $parameters);
    }

    /**
     * Get a Payment Adjustment from a Ledger Entry ID, if applicable
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findPaymentAdjustmentForLedgerEntry(array $parameters = []) {
        return $this->oauth()->get('/shops/:shop_id/ledger/entries/:ledger_entry_id/adjustment', $parameters);
    }

    /**
     * Get a Payment Adjustment from a Payment Account Ledger Entry ID, if applicable
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findPaymentAdjustmentForPaymentAccountLedgerEntry(array $parameters = []) {
        return $this->oauth()->get('/shops/:shop_id/payment_account/entries/:ledger_entry_id/adjustment', $parameters);
    }

}