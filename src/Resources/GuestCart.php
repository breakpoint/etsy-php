<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/guestcart
 *
 * Class GuestCart
 * @package breakpoint\etsy
 */
class GuestCart extends EtsyRequest {

    /**
     * Get all guest's carts
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllGuestCarts(array $parameters = []) {
        return $this->get('/guests/:guest_id/carts', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function addToGuestCart(array $parameters = [], array $data = []) {
        return $this->post('/guests/:guest_id/carts', $parameters, $data);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function updateGuestCartListingQuantity(array $parameters = [], array $data = []) {
        return $this->put('/guests/:guest_id/carts', $parameters, $data);
    }

    /**
     * Remove a listing from a guest's cart
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function removeGuestCartListing(array $parameters = []) {
        return $this->delete('/guests/:guest_id/carts', $parameters);
    }

    /**
     * Get a guest's cart
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findGuestCart(array $parameters = []) {
        return $this->get('/guests/:guest_id/carts/:cart_id', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function updateGuestCart(array $parameters = [], array $data = []) {
        return $this->put('/guests/:guest_id/carts/:cart_id', $parameters, $data);
    }

    /**
     * Delete a guest's cart
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function deleteGuestCart(array $parameters = []) {
        return $this->delete('/guests/:guest_id/carts/:cart_id', $parameters);
    }

}