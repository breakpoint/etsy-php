<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/shopabout
 *
 * Class ShopAbout
 * @package breakpoint\etsy
 */
class ShopAbout extends EtsyRequest {

    /**
     * Retrieves a ShopAbout object associated to a Shop.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getShopAbout(array $parameters = []) {
        return $this->get('/shops/:shop_id/about', $parameters);
    }

}