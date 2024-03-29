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
 * @property \TheCodeBunny\eBayApi\Fulfillment\Types\Amount $amount
 * @property string $paymentDate
 * @property \TheCodeBunny\eBayApi\Fulfillment\Types\PaymentHold[] $paymentHolds
 * @property \TheCodeBunny\eBayApi\Fulfillment\Enums\PaymentMethodTypeEnum $paymentMethod
 * @property \TheCodeBunny\eBayApi\Fulfillment\Enums\PaymentModeTypeEnum $paymentMode
 * @property string $paymentReferenceId
 * @property \TheCodeBunny\eBayApi\Fulfillment\Enums\PaymentStatusEnum $paymentStatus
 */
class Payment extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'amount' => [
            'type' => 'TheCodeBunny\eBayApi\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'amount'
        ],
        'paymentDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentDate'
        ],
        'paymentHolds' => [
            'type' => 'TheCodeBunny\eBayApi\Fulfillment\Types\PaymentHold',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'paymentHolds'
        ],
        'paymentMethod' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentMethod'
        ],
        'paymentMode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentMode'
        ],
        'paymentReferenceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentReferenceId'
        ],
        'paymentStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentStatus'
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
