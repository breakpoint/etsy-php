<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllGuestCarts(array $parameters = []) {
        return $this->requestCollection('GET', '/guests/:guest_id/carts', $parameters);
    }

    /**
     * Add a listing to guest's cart
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function addToGuestCart(array $parameters = []) {
        return $this->requestObject('POST', '/guests/:guest_id/carts', $parameters);
    }

    /**
     * Update a guest's cart listing purchase quantity
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function updateGuestCartListingQuantity(array $parameters = [], array $data = []) {
        return $this->requestBool('PUT','/guests/:guest_id/carts', $parameters, $data);
    }

    /**
     * Remove a listing from a guest's cart
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function removeGuestCartListing(array $parameters = [], array $data = []) {
        return $this->requestBool('DELETE','/guests/:guest_id/carts', $parameters, $data);
    }

    /**
     * Get a guest's cart
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findGuestCart(array $parameters = []) {
        return $this->requestCollection('GET', '/guests/:guest_id/carts/:cart_id', $parameters);
    }

    /**
     * Update a guest's cart
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function updateGuestCart(array $parameters = [], array $data = []) {
        return $this->requestBool('PUT','/guests/:guest_id/carts/:cart_id', $parameters, $data);
    }

    /**
     * Delete a guest's cart
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function deleteGuestCart(array $parameters = [], array $data = []) {
        return $this->requestBool('DELETE','/guests/:guest_id/carts/:cart_id', $parameters, $data);
    }

}