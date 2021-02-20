<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/shopsection
 *
 * Class ShopSection
 * @package breakpoint\etsy
 */
class ShopSection extends EtsyRequest {

    /**
     * Retrieves a set of ShopSection objects associated to a Shop.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllShopSections(array $parameters = []) {
        return $this->requestCollection('GET', '/shops/:shop_id/sections', $parameters);
    }

    /**
     * Creates a new ShopSection.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function createShopSection(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/shops/:shop_id/sections', $parameters);
    }

    /**
     * Retrieves a ShopSection by id and shop_id
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getShopSection(array $parameters = []) {
        return $this->requestObject('GET', '/shops/:shop_id/sections/:shop_section_id', $parameters);
    }

    /**
     * Updates a ShopSection with the given id.
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function updateShopSection(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('PUT','/shops/:shop_id/sections/:shop_section_id', $parameters, $data);
    }

    /**
     * Deletes the ShopSection with the given id.
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function deleteShopSection(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/shops/:shop_id/sections/:shop_section_id', $parameters, $data);
    }

}