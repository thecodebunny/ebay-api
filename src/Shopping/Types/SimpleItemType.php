<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Thecodebunny\eBayApi\Shopping\Types;

/**
 *
 * @property boolean $BestOfferEnabled
 * @property \Thecodebunny\eBayApi\Shopping\Types\AmountType $BuyItNowPrice
 * @property string $Description
 * @property string $ItemID
 * @property boolean $BuyItNowAvailable
 * @property \Thecodebunny\eBayApi\Shopping\Types\AmountType $ConvertedBuyItNowPrice
 * @property \DateTime $EndTime
 * @property \DateTime $StartTime
 * @property string $ViewItemURLForNaturalSearch
 * @property \Thecodebunny\eBayApi\Shopping\Enums\ListingTypeCodeType $ListingType
 * @property string $Location
 * @property \Thecodebunny\eBayApi\Shopping\Enums\BuyerPaymentMethodCodeType[] $PaymentMethods
 * @property string $GalleryURL
 * @property string[] $PictureURL
 * @property string $PostalCode
 * @property string $PrimaryCategoryID
 * @property string $PrimaryCategoryName
 * @property integer $Quantity
 * @property \Thecodebunny\eBayApi\Shopping\Types\SimpleUserType $Seller
 * @property integer $BidCount
 * @property \Thecodebunny\eBayApi\Shopping\Types\AmountType $ConvertedCurrentPrice
 * @property \Thecodebunny\eBayApi\Shopping\Types\AmountType $CurrentPrice
 * @property \Thecodebunny\eBayApi\Shopping\Types\SimpleUserType $HighBidder
 * @property \Thecodebunny\eBayApi\Shopping\Enums\ListingStatusCodeType $ListingStatus
 * @property integer $QuantitySold
 * @property boolean $ReserveMet
 * @property string[] $ShipToLocations
 * @property \Thecodebunny\eBayApi\Shopping\Enums\SiteCodeType $Site
 * @property string $TimeLeft
 * @property string $Title
 * @property \Thecodebunny\eBayApi\Shopping\Types\ShippingCostSummaryType $ShippingCostSummary
 * @property \Thecodebunny\eBayApi\Shopping\Types\NameValueListArrayType $ItemSpecifics
 * @property integer $HitCount
 * @property string $Subtitle
 * @property string $PrimaryCategoryIDPath
 * @property string $SecondaryCategoryID
 * @property string $SecondaryCategoryName
 * @property string $SecondaryCategoryIDPath
 * @property \Thecodebunny\eBayApi\Shopping\Types\CharityType $Charity
 * @property \Thecodebunny\eBayApi\Shopping\Types\StorefrontType $Storefront
 * @property \Thecodebunny\eBayApi\Shopping\Enums\CountryCodeType $Country
 * @property \Thecodebunny\eBayApi\Shopping\Enums\HalfItemConditionCodeType $HalfItemCondition
 * @property string $SellerComments
 * @property \Thecodebunny\eBayApi\Shopping\Types\ReturnPolicyType $ReturnPolicy
 * @property \Thecodebunny\eBayApi\Shopping\Types\AmountType $MinimumToBid
 * @property \Thecodebunny\eBayApi\Shopping\Types\ProductIDType $ProductID
 * @property boolean $AutoPay
 * @property \Thecodebunny\eBayApi\Shopping\Types\BusinessSellerDetailsType $BusinessSellerDetails
 * @property \Thecodebunny\eBayApi\Shopping\Enums\SiteCodeType[] $PaymentAllowedSite
 * @property boolean $IntegratedMerchantCreditCardEnabled
 * @property \Thecodebunny\eBayApi\Shopping\Types\VariationsType $Variations
 * @property integer $HandlingTime
 * @property integer $LotSize
 * @property integer $ConditionID
 * @property string $ConditionDisplayName
 * @property \Thecodebunny\eBayApi\Shopping\Enums\QuantityAvailableHintCodeType $QuantityAvailableHint
 * @property integer $QuantityThreshold
 * @property \Thecodebunny\eBayApi\Shopping\Types\DiscountPriceInfoType $DiscountPriceInfo
 * @property string[] $ExcludeShipToLocation
 * @property boolean $TopRatedListing
 * @property string $VhrUrl
 * @property boolean $VhrAvailable
 * @property \Thecodebunny\eBayApi\Shopping\Types\QuantityInfo $QuantityInfo
 * @property \Thecodebunny\eBayApi\Shopping\Types\UnitInfoType $UnitInfo
 * @property boolean $GlobalShipping
 * @property string $ConditionDescription
 * @property integer $ItemCompatibilityCount
 * @property \Thecodebunny\eBayApi\Shopping\Types\ItemCompatibilityListType $ItemCompatibilityList
 * @property integer $QuantitySoldByPickupInStore
 * @property string $SKU
 * @property boolean $eBayNowEligible
 * @property boolean $eBayNowAvailable
 * @property boolean $IgnoreQuantity
 * @property boolean $AvailableForPickupDropOff
 * @property boolean $EligibleForPickupDropOff
 */
class SimpleItemType extends \Thecodebunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'BestOfferEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestOfferEnabled'
        ],
        'BuyItNowPrice' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyItNowPrice'
        ],
        'Description' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ],
        'ItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ],
        'BuyItNowAvailable' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyItNowAvailable'
        ],
        'ConvertedBuyItNowPrice' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConvertedBuyItNowPrice'
        ],
        'EndTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndTime'
        ],
        'StartTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StartTime'
        ],
        'ViewItemURLForNaturalSearch' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ViewItemURLForNaturalSearch'
        ],
        'ListingType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingType'
        ],
        'Location' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Location'
        ],
        'PaymentMethods' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PaymentMethods'
        ],
        'GalleryURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GalleryURL'
        ],
        'PictureURL' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PictureURL'
        ],
        'PostalCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PostalCode'
        ],
        'PrimaryCategoryID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PrimaryCategoryID'
        ],
        'PrimaryCategoryName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PrimaryCategoryName'
        ],
        'Quantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Quantity'
        ],
        'Seller' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\SimpleUserType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Seller'
        ],
        'BidCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidCount'
        ],
        'ConvertedCurrentPrice' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConvertedCurrentPrice'
        ],
        'CurrentPrice' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CurrentPrice'
        ],
        'HighBidder' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\SimpleUserType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HighBidder'
        ],
        'ListingStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingStatus'
        ],
        'QuantitySold' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantitySold'
        ],
        'ReserveMet' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReserveMet'
        ],
        'ShipToLocations' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShipToLocations'
        ],
        'Site' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Site'
        ],
        'TimeLeft' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TimeLeft'
        ],
        'Title' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Title'
        ],
        'ShippingCostSummary' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\ShippingCostSummaryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingCostSummary'
        ],
        'ItemSpecifics' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\NameValueListArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemSpecifics'
        ],
        'HitCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HitCount'
        ],
        'Subtitle' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Subtitle'
        ],
        'PrimaryCategoryIDPath' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PrimaryCategoryIDPath'
        ],
        'SecondaryCategoryID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SecondaryCategoryID'
        ],
        'SecondaryCategoryName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SecondaryCategoryName'
        ],
        'SecondaryCategoryIDPath' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SecondaryCategoryIDPath'
        ],
        'Charity' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\CharityType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Charity'
        ],
        'Storefront' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\StorefrontType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Storefront'
        ],
        'Country' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Country'
        ],
        'HalfItemCondition' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HalfItemCondition'
        ],
        'SellerComments' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerComments'
        ],
        'ReturnPolicy' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\ReturnPolicyType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicy'
        ],
        'MinimumToBid' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MinimumToBid'
        ],
        'ProductID' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\ProductIDType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ProductID'
        ],
        'AutoPay' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AutoPay'
        ],
        'BusinessSellerDetails' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\BusinessSellerDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BusinessSellerDetails'
        ],
        'PaymentAllowedSite' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PaymentAllowedSite'
        ],
        'IntegratedMerchantCreditCardEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
        ],
        'Variations' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\VariationsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Variations'
        ],
        'HandlingTime' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HandlingTime'
        ],
        'LotSize' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LotSize'
        ],
        'ConditionID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConditionID'
        ],
        'ConditionDisplayName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConditionDisplayName'
        ],
        'QuantityAvailableHint' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityAvailableHint'
        ],
        'QuantityThreshold' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityThreshold'
        ],
        'DiscountPriceInfo' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\DiscountPriceInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DiscountPriceInfo'
        ],
        'ExcludeShipToLocation' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ExcludeShipToLocation'
        ],
        'TopRatedListing' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TopRatedListing'
        ],
        'VhrUrl' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VhrUrl'
        ],
        'VhrAvailable' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VhrAvailable'
        ],
        'QuantityInfo' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\QuantityInfo',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityInfo'
        ],
        'UnitInfo' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\UnitInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UnitInfo'
        ],
        'GlobalShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GlobalShipping'
        ],
        'ConditionDescription' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConditionDescription'
        ],
        'ItemCompatibilityCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityCount'
        ],
        'ItemCompatibilityList' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\ItemCompatibilityListType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityList'
        ],
        'QuantitySoldByPickupInStore' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantitySoldByPickupInStore'
        ],
        'SKU' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ],
        'eBayNowEligible' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayNowEligible'
        ],
        'eBayNowAvailable' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayNowAvailable'
        ],
        'IgnoreQuantity' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IgnoreQuantity'
        ],
        'AvailableForPickupDropOff' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AvailableForPickupDropOff'
        ],
        'EligibleForPickupDropOff' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EligibleForPickupDropOff'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
