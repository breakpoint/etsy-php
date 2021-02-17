<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/payment
 *
 * Class Payment
 * @package breakpoint\etsy
 */
class Payment extends EtsyRequest {

    /**
     * Get an Etsy Payments Transaction
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findPayment(array $parameters = []) {
        return $this->oauth()->get('/payments/:payment_id', $parameters);
    }

    /**
     * Get a Payment from a Ledger Entry ID, if applicable
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findPaymentForLedgerEntry(array $parameters = []) {
        return $this->oauth()->get('/shops/:shop_id/ledger/entries/:ledger_entry_id/payment', $parameters);
    }

    /**
     * Get a Payment from a PaymentAccount Ledger Entry ID, if applicable
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findPaymentForPaymentAccountLedgerEntry(array $parameters = []) {
        return $this->oauth()->get('/shops/:shop_id/payment_account/entries/:ledger_entry_id/payment', $parameters);
    }

    /**
     * Get a Payment by Shop Receipt ID
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findShopPaymentByReceipt(array $parameters = []) {
        return $this->oauth()->get('/shops/:shop_id/receipts/:receipt_id/payments', $parameters);
    }

}