<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/listing
 *
 * Class Listing
 * @package breakpoint\etsy
 */
class Listing extends EtsyRequest {

    /**
     * Finds all listings for a certain FeaturedTreasury.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllListingsForFeaturedTreasuryId(array $parameters = []) {
        return $this->requestCollection('GET', '/featured_treasuries/:featured_treasury_id/listings', $parameters);
    }

    /**
     * Finds all active listings for a certain FeaturedTreasury.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllActiveListingsForFeaturedTreasuryId(array $parameters = []) {
        return $this->requestCollection('GET', '/featured_treasuries/:featured_treasury_id/listings/active', $parameters);
    }

    /**
     * Finds all FeaturedTreasury listings.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllFeaturedListings(array $parameters = []) {
        return $this->requestCollection('GET', '/featured_treasuries/listings', $parameters);
    }

    /**
     * Finds FeaturedTreasury listings that are currently displayed on a regional homepage.
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllCurrentFeaturedListings(array $parameters = []) {
        return $this->requestCollection('GET', '/featured_treasuries/listings/homepage_current', $parameters);
    }

    /**
     * Creates a new Listing.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function createListing(array $parameters = []) {
        return $this->oauth()->requestObject('POST', '/listings', $parameters);
    }

    /**
     * Retrieves a Listing by id.
     *
     * @param array $parameters
     * @return EtsyObject|ResponseInterface
     * @throws \Exception
     */
    public function getListing(array $parameters = []) {
        return $this->requestObject('GET', '/listings/:listing_id', $parameters);
    }

    /**
     * Updates a Listing
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function updateListing(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('PUT','/listings/:listing_id', $parameters, $data);
    }

    /**
     * Deletes a Listing
     *
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function deleteListing(array $parameters = [], array $data = []) {
        return $this->oauth()->requestBool('DELETE','/listings/:listing_id', $parameters, $data);
    }

    /**
     * Finds all active Listings. (Note: the sort_on and sort_order options only work when combined with one of the search options: keywords, color, tags, location, etc.)
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllListingActive(array $parameters = []) {
        return $this->requestCollection('GET', '/listings/active', $parameters);
    }

    /**
     * Collects the list of interesting listings
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function getInterestingListings(array $parameters = []) {
        return $this->requestCollection('GET', '/listings/interesting', $parameters);
    }

    /**
     * Collects the list of listings used to generate the trending listing page
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function getTrendingListings(array $parameters = []) {
        return $this->requestCollection('GET', '/listings/trending', $parameters);
    }

    /**
     * Finds all listings in a receipt
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllReceiptListings(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/receipts/:receipt_id/listings', $parameters);
    }

    /**
     * Finds all active Listings associated with a Shop.<br /><br />(<strong>NOTE:</strong> If calling on behalf of a shop owner in the context of listing management, be sure to include the parameter <strong>include_private = true</strong>.  This will return private listings that are not publicly visible in the shop, but which can be managed.  This is an experimental feature and may change.)
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllShopListingsActive(array $parameters = []) {
        return $this->requestCollection('GET', '/shops/:shop_id/listings/active', $parameters);
    }

    /**
     * Finds all of a Shop's draft listings
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllShopListingsDraft(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/shops/:shop_id/listings/draft', $parameters);
    }

    /**
     * Retrieves Listings associated to a Shop that are expired
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllShopListingsExpired(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/shops/:shop_id/listings/expired', $parameters);
    }

    /**
     * Retrieves a Listing associated to a Shop that is inactive
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function getShopListingExpired(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/shops/:shop_id/listings/expired/:listing_id', $parameters);
    }

    /**
     * Retrieves Listings associated to a Shop that are featured
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllShopListingsFeatured(array $parameters = []) {
        return $this->requestCollection('GET', '/shops/:shop_id/listings/featured', $parameters);
    }

    /**
     * Retrieves Listings associated to a Shop that are inactive
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllShopListingsInactive(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/shops/:shop_id/listings/inactive', $parameters);
    }

    /**
     * Retrieves a Listing associated to a Shop that is inactive
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function getShopListingInactive(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/shops/:shop_id/listings/inactive/:listing_id', $parameters);
    }

    /**
     * Finds all listings within a shop section
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllShopSectionListings(array $parameters = []) {
        return $this->requestCollection('GET', '/shops/:shop_id/sections/:shop_section_id/listings', $parameters);
    }

    /**
     * Finds all listings within a shop section
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllShopSectionListingsActive(array $parameters = []) {
        return $this->requestCollection('GET', '/shops/:shop_id/sections/:shop_section_id/listings/active', $parameters);
    }

    /**
     * Finds all listings in a given Cart
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllCartListings(array $parameters = []) {
        return $this->oauth()->requestCollection('GET', '/users/:user_id/carts/:cart_id/listings', $parameters);
    }

}