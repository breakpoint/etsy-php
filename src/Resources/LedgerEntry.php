<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/ledgerentry
 *
 * Class LedgerEntry
 * @package breakpoint\etsy
 */
class LedgerEntry extends EtsyRequest {

    /**
     * Get a Shop Payment Account Ledger's Entries
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findLedgerEntries(array $parameters = []) {
        return $this->oauth()->get('/shops/:shop_id/ledger/entries', $parameters);
    }

    /**
     * Get a Shop Payment Account Ledger Entry
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findLedgerEntry(array $parameters = []) {
        return $this->oauth()->get('/shops/:shop_id/ledger/entries/:ledger_entry_id', $parameters);
    }

}