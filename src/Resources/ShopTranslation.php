<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/shoptranslation
 *
 * Class ShopTranslation
 * @package breakpoint\etsy
 */
class ShopTranslation extends EtsyRequest {

    /**
     * Retrieves a ShopTranslation by shop_id and language
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getShopTranslation(array $parameters = []) {
        return $this->get('/shops/:shop_id/translations/:language', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function createShopTranslation(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/shops/:shop_id/translations/:language', $parameters, $data);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function updateShopTranslation(array $parameters = [], array $data = []) {
        return $this->oauth()->put('/shops/:shop_id/translations/:language', $parameters, $data);
    }

    /**
     * Deletes a ShopTranslation by shop_id and language
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function deleteShopTranslation(array $parameters = []) {
        return $this->oauth()->delete('/shops/:shop_id/translations/:language', $parameters);
    }

}