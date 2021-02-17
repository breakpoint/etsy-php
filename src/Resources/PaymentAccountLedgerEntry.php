<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/paymentaccountledgerentry
 *
 * Class PaymentAccountLedgerEntry
 * @package breakpoint\etsy
 */
class PaymentAccountLedgerEntry extends EtsyRequest {

    /**
     * Get a Shop Payment Account Ledger's Entries
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findPaymentAccountEntries(array $parameters = []) {
        return $this->oauth()->get('/shops/:shop_id/payment_account/entries', $parameters);
    }

}