<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace TheCodeBunny\eBayApi\Inventory\Types;

/**
 *
 * @property integer $availableQuantity
 * @property string $categoryId
 * @property \TheCodeBunny\eBayApi\Inventory\Enums\FormatTypeEnum $format
 * @property string $listingDescription
 * @property \TheCodeBunny\eBayApi\Inventory\Types\ListingPolicies $listingPolicies
 * @property \TheCodeBunny\eBayApi\Inventory\Enums\MarketplaceEnum $marketplaceId
 * @property string $merchantLocationKey
 * @property \TheCodeBunny\eBayApi\Inventory\Types\PricingSummary $pricingSummary
 * @property integer $quantityLimitPerBuyer
 * @property string $sku
 * @property string[] $storeCategoryNames
 * @property \TheCodeBunny\eBayApi\Inventory\Types\Tax $tax
 */
class EbayOfferDetailsWithKeys extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'availableQuantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'availableQuantity'
        ],
        'categoryId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'categoryId'
        ],
        'format' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'format'
        ],
        'listingDescription' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'listingDescription'
        ],
        'listingPolicies' => [
            'type' => 'TheCodeBunny\eBayApi\Inventory\Types\ListingPolicies',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'listingPolicies'
        ],
        'marketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketplaceId'
        ],
        'merchantLocationKey' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'merchantLocationKey'
        ],
        'pricingSummary' => [
            'type' => 'TheCodeBunny\eBayApi\Inventory\Types\PricingSummary',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'pricingSummary'
        ],
        'quantityLimitPerBuyer' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'quantityLimitPerBuyer'
        ],
        'sku' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sku'
        ],
        'storeCategoryNames' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'storeCategoryNames'
        ],
        'tax' => [
            'type' => 'TheCodeBunny\eBayApi\Inventory\Types\Tax',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'tax'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
