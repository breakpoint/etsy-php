<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/transaction
 *
 * Class Transaction
 * @package breakpoint\etsy
 */
class Transaction extends EtsyRequest {

    /**
     * Retrieves a set of Transaction objects associated to a Listing.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllListingTransactions(array $parameters = []) {
        return $this->oauth()->get('/listings/:listing_id/transactions', $parameters);
    }

    /**
     * Retrieves a set of Transaction objects associated to a Shop_Receipt2.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllShop_Receipt2Transactions(array $parameters = []) {
        return $this->oauth()->get('/receipts/:receipt_id/transactions', $parameters);
    }

    /**
     * Retrieves a set of Transaction objects associated to a Shop.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllShopTransactions(array $parameters = []) {
        return $this->oauth()->get('/shops/:shop_id/transactions', $parameters);
    }

    /**
     * Retrieves a Shop_Transaction by id.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getShop_Transaction(array $parameters = []) {
        return $this->oauth()->get('/transactions/:transaction_id', $parameters);
    }

    /**
     * Retrieves a set of Transaction objects associated to a User.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllUserBuyerTransactions(array $parameters = []) {
        return $this->oauth()->get('/users/:user_id/transactions', $parameters);
    }

}