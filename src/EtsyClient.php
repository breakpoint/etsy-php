<?php

namespace breakpoint\etsy;

/**
 * Wrapper for accessing the Etsy api.
 *
 * Class EtsyClient
 * @package breakpoint\etsy
 * @property \breakpoint\etsy\Resources\ApiMethod apimethod
 * @property \breakpoint\etsy\Resources\Application application
 * @property \breakpoint\etsy\Resources\Avatar avatar
 * @property \breakpoint\etsy\Resources\Baseline baseline
 * @property \breakpoint\etsy\Resources\BillCharge billcharge
 * @property \breakpoint\etsy\Resources\BillPayment billpayment
 * @property \breakpoint\etsy\Resources\BillingOverview billingoverview
 * @property \breakpoint\etsy\Resources\Cart cart
 * @property \breakpoint\etsy\Resources\Collection collection
 * @property \breakpoint\etsy\Resources\CollectionListing collectionlisting
 * @property \breakpoint\etsy\Resources\Country country
 * @property \breakpoint\etsy\Resources\Coupon coupon
 * @property \breakpoint\etsy\Resources\DataType datatype
 * @property \breakpoint\etsy\Resources\FavoriteListing favoritelisting
 * @property \breakpoint\etsy\Resources\FavoriteUser favoriteuser
 * @property \breakpoint\etsy\Resources\FeaturedTreasury featuredtreasury
 * @property \breakpoint\etsy\Resources\Feedback feedback
 * @property \breakpoint\etsy\Resources\ForumPost forumpost
 * @property \breakpoint\etsy\Resources\Guest guest
 * @property \breakpoint\etsy\Resources\GuestCart guestcart
 * @property \breakpoint\etsy\Resources\ImageType imagetype
 * @property \breakpoint\etsy\Resources\Ledger ledger
 * @property \breakpoint\etsy\Resources\LedgerEntry ledgerentry
 * @property \breakpoint\etsy\Resources\Listing listing
 * @property \breakpoint\etsy\Resources\ListingFile listingfile
 * @property \breakpoint\etsy\Resources\ListingImage listingimage
 * @property \breakpoint\etsy\Resources\ListingInventory listinginventory
 * @property \breakpoint\etsy\Resources\ListingOffering listingoffering
 * @property \breakpoint\etsy\Resources\ListingProduct listingproduct
 * @property \breakpoint\etsy\Resources\ListingTranslation listingtranslation
 * @property \breakpoint\etsy\Resources\ListingVariationImage listingvariationimage
 * @property \breakpoint\etsy\Resources\Page page
 * @property \breakpoint\etsy\Resources\PageImage pageimage
 * @property \breakpoint\etsy\Resources\Payment payment
 * @property \breakpoint\etsy\Resources\PaymentAccountLedgerEntry paymentaccountledgerentry
 * @property \breakpoint\etsy\Resources\PaymentAdjustment paymentadjustment
 * @property \breakpoint\etsy\Resources\PaymentAdjustmentItem paymentadjustmentitem
 * @property \breakpoint\etsy\Resources\PaymentTemplate paymenttemplate
 * @property \breakpoint\etsy\Resources\PropertyValue propertyvalue
 * @property \breakpoint\etsy\Resources\Receipt receipt
 * @property \breakpoint\etsy\Resources\ReceiptReviews receiptreviews
 * @property \breakpoint\etsy\Resources\Region region
 * @property \breakpoint\etsy\Resources\Server server
 * @property \breakpoint\etsy\Resources\ShippingInfo shippinginfo
 * @property \breakpoint\etsy\Resources\ShippingTemplate shippingtemplate
 * @property \breakpoint\etsy\Resources\ShippingTemplateEntry shippingtemplateentry
 * @property \breakpoint\etsy\Resources\ShippingUpgrade shippingupgrade
 * @property \breakpoint\etsy\Resources\Shop shop
 * @property \breakpoint\etsy\Resources\ShopAbout shopabout
 * @property \breakpoint\etsy\Resources\ShopSection shopsection
 * @property \breakpoint\etsy\Resources\ShopSectionTranslation shopsectiontranslation
 * @property \breakpoint\etsy\Resources\ShopTranslation shoptranslation
 * @property \breakpoint\etsy\Resources\String string
 * @property \breakpoint\etsy\Resources\Style style
 * @property \breakpoint\etsy\Resources\Taxonomy taxonomy
 * @property \breakpoint\etsy\Resources\TaxonomyNodeProperty taxonomynodeproperty
 * @property \breakpoint\etsy\Resources\Team team
 * @property \breakpoint\etsy\Resources\Transaction transaction
 * @property \breakpoint\etsy\Resources\Treasury treasury
 * @property \breakpoint\etsy\Resources\TreasuryListing treasurylisting
 * @property \breakpoint\etsy\Resources\User user
 * @property \breakpoint\etsy\Resources\UserAddress useraddress
 * @property \breakpoint\etsy\Resources\UserProfile userprofile
 * @property \breakpoint\etsy\Resources\Variations_PropertySet variations_propertyset
 * @property \breakpoint\etsy\Resources\Variations_PropertySetOption variations_propertysetoption
 * @property \breakpoint\etsy\Resources\Variations_PropertySetOptionModifier variations_propertysetoptionmodifier
 */
class EtsyClient {

    private array $config = [];

    // classmap of api resources as properties
    private $resources = [
        'ApiMethod' => \breakpoint\etsy\Resources\ApiMethod::class,
        'Application' => \breakpoint\etsy\Resources\Application::class,
        'Avatar' => \breakpoint\etsy\Resources\Avatar::class,
        'Baseline' => \breakpoint\etsy\Resources\Baseline::class,
        'BillCharge' => \breakpoint\etsy\Resources\BillCharge::class,
        'BillPayment' => \breakpoint\etsy\Resources\BillPayment::class,
        'BillingOverview' => \breakpoint\etsy\Resources\BillingOverview::class,
        'Cart' => \breakpoint\etsy\Resources\Cart::class,
        'Collection' => \breakpoint\etsy\Resources\Collection::class,
        'CollectionListing' => \breakpoint\etsy\Resources\CollectionListing::class,
        'Country' => \breakpoint\etsy\Resources\Country::class,
        'Coupon' => \breakpoint\etsy\Resources\Coupon::class,
        'DataType' => \breakpoint\etsy\Resources\DataType::class,
        'FavoriteListing' => \breakpoint\etsy\Resources\FavoriteListing::class,
        'FavoriteUser' => \breakpoint\etsy\Resources\FavoriteUser::class,
        'FeaturedTreasury' => \breakpoint\etsy\Resources\FeaturedTreasury::class,
        'Feedback' => \breakpoint\etsy\Resources\Feedback::class,
        'ForumPost' => \breakpoint\etsy\Resources\ForumPost::class,
        'Guest' => \breakpoint\etsy\Resources\Guest::class,
        'GuestCart' => \breakpoint\etsy\Resources\GuestCart::class,
        'ImageType' => \breakpoint\etsy\Resources\ImageType::class,
        'Ledger' => \breakpoint\etsy\Resources\Ledger::class,
        'LedgerEntry' => \breakpoint\etsy\Resources\LedgerEntry::class,
        'Listing' => \breakpoint\etsy\Resources\Listing::class,
        'ListingFile' => \breakpoint\etsy\Resources\ListingFile::class,
        'ListingImage' => \breakpoint\etsy\Resources\ListingImage::class,
        'ListingInventory' => \breakpoint\etsy\Resources\ListingInventory::class,
        'ListingOffering' => \breakpoint\etsy\Resources\ListingOffering::class,
        'ListingProduct' => \breakpoint\etsy\Resources\ListingProduct::class,
        'ListingTranslation' => \breakpoint\etsy\Resources\ListingTranslation::class,
        'ListingVariationImage' => \breakpoint\etsy\Resources\ListingVariationImage::class,
        'Page' => \breakpoint\etsy\Resources\Page::class,
        'PageImage' => \breakpoint\etsy\Resources\PageImage::class,
        'Payment' => \breakpoint\etsy\Resources\Payment::class,
        'PaymentAccountLedgerEntry' => \breakpoint\etsy\Resources\PaymentAccountLedgerEntry::class,
        'PaymentAdjustment' => \breakpoint\etsy\Resources\PaymentAdjustment::class,
        'PaymentAdjustmentItem' => \breakpoint\etsy\Resources\PaymentAdjustmentItem::class,
        'PaymentTemplate' => \breakpoint\etsy\Resources\PaymentTemplate::class,
        'PropertyValue' => \breakpoint\etsy\Resources\PropertyValue::class,
        'Receipt' => \breakpoint\etsy\Resources\Receipt::class,
        'ReceiptReviews' => \breakpoint\etsy\Resources\ReceiptReviews::class,
        'Region' => \breakpoint\etsy\Resources\Region::class,
        'Server' => \breakpoint\etsy\Resources\Server::class,
        'ShippingInfo' => \breakpoint\etsy\Resources\ShippingInfo::class,
        'ShippingTemplate' => \breakpoint\etsy\Resources\ShippingTemplate::class,
        'ShippingTemplateEntry' => \breakpoint\etsy\Resources\ShippingTemplateEntry::class,
        'ShippingUpgrade' => \breakpoint\etsy\Resources\ShippingUpgrade::class,
        'Shop' => \breakpoint\etsy\Resources\Shop::class,
        'ShopAbout' => \breakpoint\etsy\Resources\ShopAbout::class,
        'ShopSection' => \breakpoint\etsy\Resources\ShopSection::class,
        'ShopSectionTranslation' => \breakpoint\etsy\Resources\ShopSectionTranslation::class,
        'ShopTranslation' => \breakpoint\etsy\Resources\ShopTranslation::class,
        'String' => \breakpoint\etsy\Resources\String::class,
        'Style' => \breakpoint\etsy\Resources\Style::class,
        'Taxonomy' => \breakpoint\etsy\Resources\Taxonomy::class,
        'TaxonomyNodeProperty' => \breakpoint\etsy\Resources\TaxonomyNodeProperty::class,
        'Team' => \breakpoint\etsy\Resources\Team::class,
        'Transaction' => \breakpoint\etsy\Resources\Transaction::class,
        'Treasury' => \breakpoint\etsy\Resources\Treasury::class,
        'TreasuryListing' => \breakpoint\etsy\Resources\TreasuryListing::class,
        'User' => \breakpoint\etsy\Resources\User::class,
        'UserAddress' => \breakpoint\etsy\Resources\UserAddress::class,
        'UserProfile' => \breakpoint\etsy\Resources\UserProfile::class,
        'Variations_PropertySet' => \breakpoint\etsy\Resources\Variations_PropertySet::class,
        'Variations_PropertySetOption' => \breakpoint\etsy\Resources\Variations_PropertySetOption::class,
        'Variations_PropertySetOptionModifier' => \breakpoint\etsy\Resources\Variations_PropertySetOptionModifier::class,
    ];

    /**
     * Class used to instigate requests to the Etsy API.
     *
     * @param $keystring
     * @param $secret
     * @param null $token_access
     * @param null $token_secret
     */
    public function __construct($keystring, $secret, $token_access = null, $token_secret = null) {

        // store parameters
        $this->config['keystring'] = $keystring;
        $this->config['secret'] = $secret;
        $this->config['token_access'] = $token_access;
        $this->config['token_secret'] = $token_secret;
    }

    public function __get($name) {
        return array_key_exists($name, $this->resources) ? new $this->resources[$name]($this->config) : null;
    }
}