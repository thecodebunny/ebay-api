<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace TheCodeBunny\eBayApi\Account\Types;

/**
 *
 * @property \TheCodeBunny\eBayApi\Account\Types\CategoryType[] $categoryTypes
 * @property string $description
 * @property boolean $extendedHolidayReturnsOffered
 * @property \TheCodeBunny\eBayApi\Account\Enums\MarketplaceIdEnum $marketplaceId
 * @property string $name
 * @property \TheCodeBunny\eBayApi\Account\Enums\RefundMethodEnum $refundMethod
 * @property string $restockingFeePercentage
 * @property string $returnInstructions
 * @property \TheCodeBunny\eBayApi\Account\Enums\ReturnMethodEnum $returnMethod
 * @property \TheCodeBunny\eBayApi\Account\Types\TimeDuration $returnPeriod
 * @property string $returnPolicyId
 * @property boolean $returnsAccepted
 * @property \TheCodeBunny\eBayApi\Account\Enums\ReturnShippingCostPayerEnum $returnShippingCostPayer
 * @property \TheCodeBunny\eBayApi\Account\Types\ErrorDetailV3[] $warnings
 */
class SetReturnPolicyResponse extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'categoryTypes' => [
            'type' => 'TheCodeBunny\eBayApi\Account\Types\CategoryType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'categoryTypes'
        ],
        'description' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'description'
        ],
        'extendedHolidayReturnsOffered' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'extendedHolidayReturnsOffered'
        ],
        'marketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketplaceId'
        ],
        'name' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'name'
        ],
        'refundMethod' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundMethod'
        ],
        'restockingFeePercentage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'restockingFeePercentage'
        ],
        'returnInstructions' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnInstructions'
        ],
        'returnMethod' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnMethod'
        ],
        'returnPeriod' => [
            'type' => 'TheCodeBunny\eBayApi\Account\Types\TimeDuration',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnPeriod'
        ],
        'returnPolicyId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnPolicyId'
        ],
        'returnsAccepted' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnsAccepted'
        ],
        'returnShippingCostPayer' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnShippingCostPayer'
        ],
        'warnings' => [
            'type' => 'TheCodeBunny\eBayApi\Account\Types\ErrorDetailV3',
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
