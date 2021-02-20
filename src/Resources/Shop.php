<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/shop
 *
 * Class Shop
 * @package breakpoint\etsy
 */
class Shop extends EtsyRequest {

    /**
     * Finds all Shops.  If there is a keywords parameter, finds shops with shop_name starting with keywords.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllShops(array $parameters = []) {
        return $this->requestCollection('GET', '/shops', $parameters);
    }

    /**
     * Retrieves a Shop by id.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getShop(array $parameters = []) {
        return $this->requestObject('GET', '/shops/:shop_id', $parameters);
    }

    /**
     * Updates a Shop
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function updateShop(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('PUT','/shops/:shop_id', $parameters, $data);
    }

    /**
     * Upload a new shop banner image
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function uploadShopBanner(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/shops/:shop_id/appearance/banner', $parameters);
    }

    /**
     * Deletes a shop banner image
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function deleteShopBanner(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/shops/:shop_id/appearance/banner', $parameters, $data);
    }

    /**
     * Retrieves a shop by a listing id.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function getListingShop(array $parameters = []) {
        return $this->requestCollection('GET', '/shops/listing/:listing_id', $parameters);
    }

    /**
     * Retrieves a set of Shop objects associated to a User.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllUserShops(array $parameters = []) {
        return $this->requestCollection('GET', '/users/:user_id/shops', $parameters);
    }

}