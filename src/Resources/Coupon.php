<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllShopCoupons(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/shops/:shop_id/coupons', $parameters);
    }

    /**
     * Creates a new Coupon. May only have one of <code>free_shipping</code>, <code>pct_discount</code> or <code>fixed_discount</code>
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function createCoupon(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/shops/:shop_id/coupons', $parameters);
    }

    /**
     * Retrieves a Shop_Coupon by id and shop_id
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function findCoupon(array $parameters = []) {
        return $this->oauth()->requestObject('GET', '/shops/:shop_id/coupons/:coupon_id', $parameters);
    }

    /**
     * Updates a coupon
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function updateCoupon(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('PUT','/shops/:shop_id/coupons/:coupon_id', $parameters, $data);
    }

    /**
     * Deletes a coupon
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function deleteCoupon(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/shops/:shop_id/coupons/:coupon_id', $parameters, $data);
    }

}