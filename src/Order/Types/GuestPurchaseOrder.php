<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace TheCodeBunny\eBayApi\Order\Types;

/**
 *
 * @property \TheCodeBunny\eBayApi\Order\Types\LineItem[] $lineItems
 * @property \TheCodeBunny\eBayApi\Order\Types\PricingSummary $pricingSummary
 * @property string $purchaseOrderCreationDate
 * @property string $purchaseOrderId
 * @property \TheCodeBunny\eBayApi\Order\Enums\PurchaseOrderPaymentStatusEnum $purchaseOrderPaymentStatus
 * @property \TheCodeBunny\eBayApi\Order\Enums\PurchaseOrderStatusEnum $purchaseOrderStatus
 * @property \TheCodeBunny\eBayApi\Order\Types\Amount $refundedAmount
 * @property \TheCodeBunny\eBayApi\Order\Types\ErrorDetailV3[] $warnings
 */
class GuestPurchaseOrder extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'lineItems' => [
            'type' => 'TheCodeBunny\eBayApi\Order\Types\LineItem',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'lineItems'
        ],
        'pricingSummary' => [
            'type' => 'TheCodeBunny\eBayApi\Order\Types\PricingSummary',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'pricingSummary'
        ],
        'purchaseOrderCreationDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'purchaseOrderCreationDate'
        ],
        'purchaseOrderId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'purchaseOrderId'
        ],
        'purchaseOrderPaymentStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'purchaseOrderPaymentStatus'
        ],
        'purchaseOrderStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'purchaseOrderStatus'
        ],
        'refundedAmount' => [
            'type' => 'TheCodeBunny\eBayApi\Order\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundedAmount'
        ],
        'warnings' => [
            'type' => 'TheCodeBunny\eBayApi\Order\Types\ErrorDetailV3',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'warnings'
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
