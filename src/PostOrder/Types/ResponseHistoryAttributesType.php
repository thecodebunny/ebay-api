<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace TheCodeBunny\eBayApi\PostOrder\Types;

/**
 *
 * @property string $carrierUsed
 * @property string $escalateReason
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\MoneyMovementRef $moneyMovementRef
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\Amount $partialRefundAmount
 * @property string $RMA
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\ReturnAddressType $sellerReturnAddress
 * @property string $toEmailAddress
 * @property string $trackingNumber
 */
class ResponseHistoryAttributesType extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'carrierUsed' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'carrierUsed'
        ],
        'escalateReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'escalateReason'
        ],
        'moneyMovementRef' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\MoneyMovementRef',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'moneyMovementRef'
        ],
        'partialRefundAmount' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'partialRefundAmount'
        ],
        'RMA' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RMA'
        ],
        'sellerReturnAddress' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\ReturnAddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerReturnAddress'
        ],
        'toEmailAddress' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'toEmailAddress'
        ],
        'trackingNumber' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'trackingNumber'
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
