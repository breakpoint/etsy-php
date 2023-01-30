<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function getShopAbout(array $parameters = []) {
        return $this->requestCollection('GET', '/shops/:shop_id/about', $parameters);
    }

}