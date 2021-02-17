<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/cart
 *
 * Class Cart
 * @package breakpoint\etsy
 */
class Cart extends EtsyRequest {

    /**
     * Get a user's Carts
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getAllUserCarts(array $parameters = []) {
        return $this->oauth()->get('/users/:user_id/carts', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function addToCart(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/users/:user_id/carts', $parameters, $data);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function updateCartListingQuantity(array $parameters = [], array $data = []) {
        return $this->oauth()->put('/users/:user_id/carts', $parameters, $data);
    }

    /**
     * Remove a listing from a cart
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function removeCartListing(array $parameters = []) {
        return $this->oauth()->delete('/users/:user_id/carts', $parameters);
    }

    /**
     * Get a cart
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getUserCart(array $parameters = []) {
        return $this->oauth()->get('/users/:user_id/carts/:cart_id', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function updateCart(array $parameters = [], array $data = []) {
        return $this->oauth()->put('/users/:user_id/carts/:cart_id', $parameters, $data);
    }

    /**
     * Delete a cart
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function deleteCart(array $parameters = []) {
        return $this->oauth()->delete('/users/:user_id/carts/:cart_id', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function addAndSelectShippingForApplePay(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/users/:user_id/carts/:cart_id/add_and_select_shipping_for_apple', $parameters, $data);
    }

    /**
     * Move a listing to Saved for Later
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function saveListingForLater(array $parameters = []) {
        return $this->oauth()->delete('/users/:user_id/carts/save', $parameters);
    }

    /**
     * Get a cart from a shop ID
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getUserCartForShop(array $parameters = []) {
        return $this->oauth()->get('/users/:user_id/carts/shop/:shop_id', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function createSingleListingCart(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/users/:user_id/carts/single_listing', $parameters, $data);
    }

}