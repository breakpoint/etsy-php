<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

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
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllShops(array $parameters = []) {
        return $this->get('/shops', $parameters);
    }

    /**
     * Retrieves a Shop by id.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getShop(array $parameters = []) {
        return $this->get('/shops/:shop_id', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function updateShop(array $parameters = [], array $data = []) {
        return $this->oauth()->put('/shops/:shop_id', $parameters, $data);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function uploadShopBanner(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/shops/:shop_id/appearance/banner', $parameters, $data);
    }

    /**
     * Deletes a shop banner image
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function deleteShopBanner(array $parameters = []) {
        return $this->oauth()->delete('/shops/:shop_id/appearance/banner', $parameters);
    }

    /**
     * Retrieves a shop by a listing id.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getListingShop(array $parameters = []) {
        return $this->get('/shops/listing/:listing_id', $parameters);
    }

    /**
     * Retrieves a set of Shop objects associated to a User.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllUserShops(array $parameters = []) {
        return $this->get('/users/:user_id/shops', $parameters);
    }

}