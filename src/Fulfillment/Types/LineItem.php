<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace TheCodeBunny\eBayApi\Fulfillment\Types;

/**
 *
 * @property \TheCodeBunny\eBayApi\Fulfillment\Types\AppliedPromotion[] $appliedPromotions
 * @property \TheCodeBunny\eBayApi\Fulfillment\Types\DeliveryCost $deliveryCost
 * @property \TheCodeBunny\eBayApi\Fulfillment\Types\Amount $discountedLineItemCost
 * @property \TheCodeBunny\eBayApi\Fulfillment\Types\GiftDetails $giftDetails
 * @property string $legacyItemId
 * @property string $legacyVariationId
 * @property \TheCodeBunny\eBayApi\Fulfillment\Types\Amount $lineItemCost
 * @property \TheCodeBunny\eBayApi\Fulfillment\Types\LineItemFulfillmentInstructions $lineItemFulfillmentInstructions
 * @property \TheCodeBunny\eBayApi\Fulfillment\Enums\LineItemFulfillmentStatusEnum $lineItemFulfillmentStatus
 * @property string $lineItemId
 * @property \TheCodeBunny\eBayApi\Fulfillment\Enums\MarketplaceIdEnum $listingMarketplaceId
 * @property \TheCodeBunny\eBayApi\Fulfillment\Types\LineItemProperties $properties
 * @property \TheCodeBunny\eBayApi\Fulfillment\Enums\MarketplaceIdEnum $purchaseMarketplaceId
 * @property integer $quantity
 * @property \TheCodeBunny\eBayApi\Fulfillment\Types\LineItemRefund[] $refunds
 * @property string $sku
 * @property \TheCodeBunny\eBayApi\Fulfillment\Enums\SoldFormatEnum $soldFormat
 * @property \TheCodeBunny\eBayApi\Fulfillment\Types\Tax[] $taxes
 * @property string $title
 * @property \TheCodeBunny\eBayApi\Fulfillment\Types\Amount $total
 */
class LineItem extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'appliedPromotions' => [
            'type' => 'TheCodeBunny\eBayApi\Fulfillment\Types\AppliedPromotion',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'appliedPromotions'
        ],
        'deliveryCost' => [
            'type' => 'TheCodeBunny\eBayApi\Fulfillment\Types\DeliveryCost',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'deliveryCost'
        ],
        'discountedLineItemCost' => [
            'type' => 'TheCodeBunny\eBayApi\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'discountedLineItemCost'
        ],
        'giftDetails' => [
            'type' => 'TheCodeBunny\eBayApi\Fulfillment\Types\GiftDetails',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'giftDetails'
        ],
        'legacyItemId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'legacyItemId'
        ],
        'legacyVariationId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'legacyVariationId'
        ],
        'lineItemCost' => [
            'type' => 'TheCodeBunny\eBayApi\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lineItemCost'
        ],
        'lineItemFulfillmentInstructions' => [
            'type' => 'TheCodeBunny\eBayApi\Fulfillment\Types\LineItemFulfillmentInstructions',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lineItemFulfillmentInstructions'
        ],
        'lineItemFulfillmentStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lineItemFulfillmentStatus'
        ],
        'lineItemId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lineItemId'
        ],
        'listingMarketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'listingMarketplaceId'
        ],
        'properties' => [
            'type' => 'TheCodeBunny\eBayApi\Fulfillment\Types\LineItemProperties',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'properties'
        ],
        'purchaseMarketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'purchaseMarketplaceId'
        ],
        'quantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'quantity'
        ],
        'refunds' => [
            'type' => 'TheCodeBunny\eBayApi\Fulfillment\Types\LineItemRefund',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'refunds'
        ],
        'sku' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sku'
        ],
        'soldFormat' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'soldFormat'
        ],
        'taxes' => [
            'type' => 'TheCodeBunny\eBayApi\Fulfillment\Types\Tax',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'taxes'
        ],
        'title' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'title'
        ],
        'total' => [
            'type' => 'TheCodeBunny\eBayApi\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'total'
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