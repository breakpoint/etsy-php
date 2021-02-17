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
        'apimethod' => \breakpoint\etsy\Resources\ApiMethod::class,
        'application' => \breakpoint\etsy\Resources\Application::class,
        'avatar' => \breakpoint\etsy\Resources\Avatar::class,
        'baseline' => \breakpoint\etsy\Resources\Baseline::class,
        'billcharge' => \breakpoint\etsy\Resources\BillCharge::class,
        'billpayment' => \breakpoint\etsy\Resources\BillPayment::class,
        'billingoverview' => \breakpoint\etsy\Resources\BillingOverview::class,
        'cart' => \breakpoint\etsy\Resources\Cart::class,
        'collection' => \breakpoint\etsy\Resources\Collection::class,
        'collectionlisting' => \breakpoint\etsy\Resources\CollectionListing::class,
        'country' => \breakpoint\etsy\Resources\Country::class,
        'coupon' => \breakpoint\etsy\Resources\Coupon::class,
        'datatype' => \breakpoint\etsy\Resources\DataType::class,
        'favoritelisting' => \breakpoint\etsy\Resources\FavoriteListing::class,
        'favoriteuser' => \breakpoint\etsy\Resources\FavoriteUser::class,
        'featuredtreasury' => \breakpoint\etsy\Resources\FeaturedTreasury::class,
        'feedback' => \breakpoint\etsy\Resources\Feedback::class,
        'forumpost' => \breakpoint\etsy\Resources\ForumPost::class,
        'guest' => \breakpoint\etsy\Resources\Guest::class,
        'guestcart' => \breakpoint\etsy\Resources\GuestCart::class,
        'imagetype' => \breakpoint\etsy\Resources\ImageType::class,
        'ledger' => \breakpoint\etsy\Resources\Ledger::class,
        'ledgerentry' => \breakpoint\etsy\Resources\LedgerEntry::class,
        'listing' => \breakpoint\etsy\Resources\Listing::class,
        'listingfile' => \breakpoint\etsy\Resources\ListingFile::class,
        'listingimage' => \breakpoint\etsy\Resources\ListingImage::class,
        'listinginventory' => \breakpoint\etsy\Resources\ListingInventory::class,
        'listingoffering' => \breakpoint\etsy\Resources\ListingOffering::class,
        'listingproduct' => \breakpoint\etsy\Resources\ListingProduct::class,
        'listingtranslation' => \breakpoint\etsy\Resources\ListingTranslation::class,
        'listingvariationimage' => \breakpoint\etsy\Resources\ListingVariationImage::class,
        'page' => \breakpoint\etsy\Resources\Page::class,
        'pageimage' => \breakpoint\etsy\Resources\PageImage::class,
        'payment' => \breakpoint\etsy\Resources\Payment::class,
        'paymentaccountledgerentry' => \breakpoint\etsy\Resources\PaymentAccountLedgerEntry::class,
        'paymentadjustment' => \breakpoint\etsy\Resources\PaymentAdjustment::class,
        'paymentadjustmentitem' => \breakpoint\etsy\Resources\PaymentAdjustmentItem::class,
        'paymenttemplate' => \breakpoint\etsy\Resources\PaymentTemplate::class,
        'propertyvalue' => \breakpoint\etsy\Resources\PropertyValue::class,
        'receipt' => \breakpoint\etsy\Resources\Receipt::class,
        'receiptreviews' => \breakpoint\etsy\Resources\ReceiptReviews::class,
        'region' => \breakpoint\etsy\Resources\Region::class,
        'server' => \breakpoint\etsy\Resources\Server::class,
        'shippinginfo' => \breakpoint\etsy\Resources\ShippingInfo::class,
        'shippingtemplate' => \breakpoint\etsy\Resources\ShippingTemplate::class,
        'shippingtemplateentry' => \breakpoint\etsy\Resources\ShippingTemplateEntry::class,
        'shippingupgrade' => \breakpoint\etsy\Resources\ShippingUpgrade::class,
        'shop' => \breakpoint\etsy\Resources\Shop::class,
        'shopabout' => \breakpoint\etsy\Resources\ShopAbout::class,
        'shopsection' => \breakpoint\etsy\Resources\ShopSection::class,
        'shopsectiontranslation' => \breakpoint\etsy\Resources\ShopSectionTranslation::class,
        'shoptranslation' => \breakpoint\etsy\Resources\ShopTranslation::class,
        'style' => \breakpoint\etsy\Resources\Style::class,
        'taxonomy' => \breakpoint\etsy\Resources\Taxonomy::class,
        'taxonomynodeproperty' => \breakpoint\etsy\Resources\TaxonomyNodeProperty::class,
        'team' => \breakpoint\etsy\Resources\Team::class,
        'transaction' => \breakpoint\etsy\Resources\Transaction::class,
        'treasury' => \breakpoint\etsy\Resources\Treasury::class,
        'treasurylisting' => \breakpoint\etsy\Resources\TreasuryListing::class,
        'user' => \breakpoint\etsy\Resources\User::class,
        'useraddress' => \breakpoint\etsy\Resources\UserAddress::class,
        'userprofile' => \breakpoint\etsy\Resources\UserProfile::class,
        'variations_propertyset' => \breakpoint\etsy\Resources\Variations_PropertySet::class,
        'variations_propertysetoption' => \breakpoint\etsy\Resources\Variations_PropertySetOption::class,
        'variations_propertysetoptionmodifier' => \breakpoint\etsy\Resources\Variations_PropertySetOptionModifier::class,
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