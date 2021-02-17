<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/shopsectiontranslation
 *
 * Class ShopSectionTranslation
 * @package breakpoint\etsy
 */
class ShopSectionTranslation extends EtsyRequest {

    /**
     * Retrieves a ShopSectionTranslation by shop_id, shop_section_id and language
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getShopSectionTranslation(array $parameters = []) {
        return $this->get('/shops/:shop_id/sections/:shop_section_id/translations/:language', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function createShopSectionTranslation(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/shops/:shop_id/sections/:shop_section_id/translations/:language', $parameters, $data);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function updateShopSectionTranslation(array $parameters = [], array $data = []) {
        return $this->oauth()->put('/shops/:shop_id/sections/:shop_section_id/translations/:language', $parameters, $data);
    }

    /**
     * Deletes a ShopSectionTranslation by shop_id, shop_section_id and language
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function deleteShopSectionTranslation(array $parameters = []) {
        return $this->oauth()->delete('/shops/:shop_id/sections/:shop_section_id/translations/:language', $parameters);
    }

}