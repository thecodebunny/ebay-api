<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace TheCodeBunny\eBayApi\Trading\Types;

/**
 *
 * @property boolean $Adult
 * @property boolean $BindingAuction
 * @property boolean $CheckoutEnabled
 * @property \TheCodeBunny\eBayApi\Trading\Types\AmountType $ConvertedBuyItNowPrice
 * @property \TheCodeBunny\eBayApi\Trading\Types\AmountType $ConvertedStartPrice
 * @property \TheCodeBunny\eBayApi\Trading\Types\AmountType $ConvertedReservePrice
 * @property boolean $HasReservePrice
 * @property string $RelistedItemID
 * @property string $SecondChanceOriginalItemID
 * @property \DateTime $StartTime
 * @property \DateTime $EndTime
 * @property string $ViewItemURL
 * @property boolean $HasUnansweredQuestions
 * @property boolean $HasPublicMessages
 * @property boolean $BuyItNowAvailable
 * @property \TheCodeBunny\eBayApi\Trading\Types\AmountType $MinimumBestOfferPrice
 * @property string $LocalListingDistance
 * @property string $TCROriginalItemID
 * @property string $ViewItemURLForNaturalSearch
 * @property \TheCodeBunny\eBayApi\Trading\Types\AmountType $BestOfferAutoAcceptPrice
 * @property \TheCodeBunny\eBayApi\Trading\Enums\EndReasonCodeType $EndingReason
 */
class ListingDetailsType extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Adult' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Adult'
        ],
        'BindingAuction' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BindingAuction'
        ],
        'CheckoutEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CheckoutEnabled'
        ],
        'ConvertedBuyItNowPrice' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConvertedBuyItNowPrice'
        ],
        'ConvertedStartPrice' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConvertedStartPrice'
        ],
        'ConvertedReservePrice' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConvertedReservePrice'
        ],
        'HasReservePrice' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HasReservePrice'
        ],
        'RelistedItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RelistedItemID'
        ],
        'SecondChanceOriginalItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SecondChanceOriginalItemID'
        ],
        'StartTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StartTime'
        ],
        'EndTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndTime'
        ],
        'ViewItemURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ViewItemURL'
        ],
        'HasUnansweredQuestions' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HasUnansweredQuestions'
        ],
        'HasPublicMessages' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HasPublicMessages'
        ],
        'BuyItNowAvailable' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyItNowAvailable'
        ],
        'MinimumBestOfferPrice' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MinimumBestOfferPrice'
        ],
        'LocalListingDistance' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LocalListingDistance'
        ],
        'TCROriginalItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TCROriginalItemID'
        ],
        'ViewItemURLForNaturalSearch' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ViewItemURLForNaturalSearch'
        ],
        'BestOfferAutoAcceptPrice' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestOfferAutoAcceptPrice'
        ],
        'EndingReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndingReason'
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
