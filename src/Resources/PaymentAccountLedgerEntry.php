<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findPaymentAccountEntries(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/shops/:shop_id/payment_account/entries', $parameters);
    }

}