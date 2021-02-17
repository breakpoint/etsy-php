<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/receipt
 *
 * Class Receipt
 * @package breakpoint\etsy
 */
class Receipt extends EtsyRequest {

    /**
     * Retrieves a Shop_Receipt2 by id.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getShop_Receipt2(array $parameters = []) {
        return $this->oauth()->get('/receipts/:receipt_id', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function updateReceipt(array $parameters = [], array $data = []) {
        return $this->oauth()->put('/receipts/:receipt_id', $parameters, $data);
    }

    /**
     * Retrieves a set of Receipt objects associated to a Shop.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllShopReceipts(array $parameters = []) {
        return $this->oauth()->get('/shops/:shop_id/receipts', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function submitTracking(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/shops/:shop_id/receipts/:receipt_id/tracking', $parameters, $data);
    }

    /**
     * Retrieves a set of Receipt objects associated to a Shop based on the status.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllShopReceiptsByStatus(array $parameters = []) {
        return $this->oauth()->get('/shops/:shop_id/receipts/:status', $parameters);
    }

    /**
     * Searches the set of Receipt objects associated to a Shop by a query
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function searchAllShopReceipts(array $parameters = []) {
        return $this->oauth()->get('/shops/:shop_id/receipts/search', $parameters);
    }

    /**
     * Retrieves a set of Receipt objects associated to a User.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllUserBuyerReceipts(array $parameters = []) {
        return $this->oauth()->get('/users/:user_id/receipts', $parameters);
    }

}