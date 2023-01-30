<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getShop_Receipt2(array $parameters = []) {
        return $this->oauth()->requestObject('GET', '/receipts/:receipt_id', $parameters);
    }

    /**
     * Updates a Shop_Receipt2
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function updateReceipt(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('PUT','/receipts/:receipt_id', $parameters, $data);
    }

    /**
     * Retrieves a set of Receipt objects associated to a Shop.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllShopReceipts(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/shops/:shop_id/receipts', $parameters);
    }

    /**
     * Submits tracking information and sends a shipping notification email to the buyer. If <code>send_bcc</code> is <code>true</code>, the shipping notification will be sent to the seller as well. Refer to <a href="/developers/documentation/getting_started/seller_tools#section_tracking_codes">additional documentation</a>.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function submitTracking(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/shops/:shop_id/receipts/:receipt_id/tracking', $parameters);
    }

    /**
     * Retrieves a set of Receipt objects associated to a Shop based on the status.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllShopReceiptsByStatus(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/shops/:shop_id/receipts/:status', $parameters);
    }

    /**
     * Searches the set of Receipt objects associated to a Shop by a query
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function searchAllShopReceipts(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/shops/:shop_id/receipts/search', $parameters);
    }

    /**
     * Retrieves a set of Receipt objects associated to a User.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllUserBuyerReceipts(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/users/:user_id/receipts', $parameters);
    }

}