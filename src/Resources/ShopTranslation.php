<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function getShopTranslation(array $parameters = []) {
        return $this->requestCollection('GET', '/shops/:shop_id/translations/:language', $parameters);
    }

    /**
     * Creates a ShopTranslation by shop_id and language
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function createShopTranslation(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/shops/:shop_id/translations/:language', $parameters);
    }

    /**
     * Updates a ShopTranslation by shop_id and language
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function updateShopTranslation(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('PUT','/shops/:shop_id/translations/:language', $parameters, $data);
    }

    /**
     * Deletes a ShopTranslation by shop_id and language
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function deleteShopTranslation(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/shops/:shop_id/translations/:language', $parameters, $data);
    }

}