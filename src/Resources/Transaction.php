<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllListingTransactions(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/listings/:listing_id/transactions', $parameters);
    }

    /**
     * Retrieves a set of Transaction objects associated to a Shop_Receipt2.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllShop_Receipt2Transactions(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/receipts/:receipt_id/transactions', $parameters);
    }

    /**
     * Retrieves a set of Transaction objects associated to a Shop.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllShopTransactions(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/shops/:shop_id/transactions', $parameters);
    }

    /**
     * Retrieves a Shop_Transaction by id.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getShop_Transaction(array $parameters = []) {
        return $this->oauth()->requestObject('GET', '/transactions/:transaction_id', $parameters);
    }

    /**
     * Retrieves a set of Transaction objects associated to a User.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllUserBuyerTransactions(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/users/:user_id/transactions', $parameters);
    }

}