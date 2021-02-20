<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function getAllUserCarts(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/users/:user_id/carts', $parameters);
    }

    /**
     * Add a listing to a cart
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function addToCart(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/users/:user_id/carts', $parameters);
    }

    /**
     * Update a cart listing purchase quantity
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function updateCartListingQuantity(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('PUT','/users/:user_id/carts', $parameters, $data);
    }

    /**
     * Remove a listing from a cart
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function removeCartListing(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/users/:user_id/carts', $parameters, $data);
    }

    /**
     * Get a cart
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getUserCart(array $parameters = []) {
        return $this->oauth()->requestObject('GET', '/users/:user_id/carts/:cart_id', $parameters);
    }

    /**
     * Update a cart
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function updateCart(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('PUT','/users/:user_id/carts/:cart_id', $parameters, $data);
    }

    /**
     * Delete a cart
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function deleteCart(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/users/:user_id/carts/:cart_id', $parameters, $data);
    }

    /**
     * Saves and selects a shipping address for apple pay
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function addAndSelectShippingForApplePay(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/users/:user_id/carts/:cart_id/add_and_select_shipping_for_apple', $parameters);
    }

    /**
     * Move a listing to Saved for Later
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function saveListingForLater(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/users/:user_id/carts/save', $parameters, $data);
    }

    /**
     * Get a cart from a shop ID
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getUserCartForShop(array $parameters = []) {
        return $this->oauth()->requestObject('GET', '/users/:user_id/carts/shop/:shop_id', $parameters);
    }

    /**
     * Create a single-listing cart from a listing
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function createSingleListingCart(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/users/:user_id/carts/single_listing', $parameters);
    }

}