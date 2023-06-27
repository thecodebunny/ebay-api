<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace TheCodeBunny\eBayApi\MerchantData\Types;

/**
 *
 * @property integer $BidCount
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\AmountType $BidIncrement
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\AmountType $ConvertedCurrentPrice
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\AmountType $CurrentPrice
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\UserType $HighBidder
 * @property integer $LeadCount
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\AmountType $MinimumToBid
 * @property integer $QuantitySold
 * @property boolean $ReserveMet
 * @property boolean $SecondChanceEligible
 * @property integer $BidderCount
 * @property \TheCodeBunny\eBayApi\MerchantData\Enums\ListingStatusCodeType $ListingStatus
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\AmountType $FinalValueFee
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\PromotionalSaleDetailsType $PromotionalSaleDetails
 * @property boolean $AdminEnded
 * @property boolean $SoldAsBin
 * @property integer $QuantitySoldByPickupInStore
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\SuggestedBidValueType $SuggestedBidValues
 */
class SellingStatusType extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'BidCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidCount'
        ],
        'BidIncrement' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidIncrement'
        ],
        'ConvertedCurrentPrice' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConvertedCurrentPrice'
        ],
        'CurrentPrice' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CurrentPrice'
        ],
        'HighBidder' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\UserType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HighBidder'
        ],
        'LeadCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LeadCount'
        ],
        'MinimumToBid' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MinimumToBid'
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
        'SecondChanceEligible' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SecondChanceEligible'
        ],
        'BidderCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidderCount'
        ],
        'ListingStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingStatus'
        ],
        'FinalValueFee' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FinalValueFee'
        ],
        'PromotionalSaleDetails' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\PromotionalSaleDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PromotionalSaleDetails'
        ],
        'AdminEnded' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AdminEnded'
        ],
        'SoldAsBin' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SoldAsBin'
        ],
        'QuantitySoldByPickupInStore' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantitySoldByPickupInStore'
        ],
        'SuggestedBidValues' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\SuggestedBidValueType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SuggestedBidValues'
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
