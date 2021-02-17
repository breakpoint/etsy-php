<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/coupon
 *
 * Class Coupon
 * @package breakpoint\etsy
 */
class Coupon extends EtsyRequest {

    /**
     * Retrieves all Shop_Coupons by shop_id
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllShopCoupons(array $parameters = []) {
        return $this->oauth()->get('/shops/:shop_id/coupons', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function createCoupon(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/shops/:shop_id/coupons', $parameters, $data);
    }

    /**
     * Retrieves a Shop_Coupon by id and shop_id
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findCoupon(array $parameters = []) {
        return $this->oauth()->get('/shops/:shop_id/coupons/:coupon_id', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function updateCoupon(array $parameters = [], array $data = []) {
        return $this->oauth()->put('/shops/:shop_id/coupons/:coupon_id', $parameters, $data);
    }

    /**
     * Deletes a coupon
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function deleteCoupon(array $parameters = []) {
        return $this->oauth()->delete('/shops/:shop_id/coupons/:coupon_id', $parameters);
    }

}