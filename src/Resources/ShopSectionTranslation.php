<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function getShopSectionTranslation(array $parameters = []) {
        return $this->requestCollection('GET', '/shops/:shop_id/sections/:shop_section_id/translations/:language', $parameters);
    }

    /**
     * Creates a ShopSectionTranslation by shop_id, shop_section_id and language
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function createShopSectionTranslation(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/shops/:shop_id/sections/:shop_section_id/translations/:language', $parameters);
    }

    /**
     * Updates a ShopSectionTranslation by shop_id, shop_section_id and language
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function updateShopSectionTranslation(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('PUT','/shops/:shop_id/sections/:shop_section_id/translations/:language', $parameters, $data);
    }

    /**
     * Deletes a ShopSectionTranslation by shop_id, shop_section_id and language
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function deleteShopSectionTranslation(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/shops/:shop_id/sections/:shop_section_id/translations/:language', $parameters, $data);
    }

}