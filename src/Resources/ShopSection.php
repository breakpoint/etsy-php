<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

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
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllShopSections(array $parameters = []) {
        return $this->get('/shops/:shop_id/sections', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function createShopSection(array $parameters = [], array $data = []) {
        return $this->oauth()->post('/shops/:shop_id/sections', $parameters, $data);
    }

    /**
     * Retrieves a ShopSection by id and shop_id
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function getShopSection(array $parameters = []) {
        return $this->get('/shops/:shop_id/sections/:shop_section_id', $parameters);
    }

    /**
     * @param array $parameters
     * @param array $data
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function updateShopSection(array $parameters = [], array $data = []) {
        return $this->oauth()->put('/shops/:shop_id/sections/:shop_section_id', $parameters, $data);
    }

    /**
     * Deletes the ShopSection with the given id.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function deleteShopSection(array $parameters = []) {
        return $this->oauth()->delete('/shops/:shop_id/sections/:shop_section_id', $parameters);
    }

}