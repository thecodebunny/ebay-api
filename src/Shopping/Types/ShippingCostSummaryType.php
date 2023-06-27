<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace TheCodeBunny\eBayApi\Shopping\Types;

/**
 *
 * @property string $ShippingServiceName
 * @property \TheCodeBunny\eBayApi\Shopping\Types\AmountType $ShippingServiceCost
 * @property \TheCodeBunny\eBayApi\Shopping\Types\AmountType $InsuranceCost
 * @property \TheCodeBunny\eBayApi\Shopping\Enums\ShippingTypeCodeType $ShippingType
 * @property boolean $LocalPickup
 * @property \TheCodeBunny\eBayApi\Shopping\Enums\InsuranceOptionCodeType $InsuranceOption
 * @property \TheCodeBunny\eBayApi\Shopping\Types\AmountType $ListedShippingServiceCost
 * @property \TheCodeBunny\eBayApi\Shopping\Types\AmountType $ImportCharge
 * @property string $LogisticPlanType
 */
class ShippingCostSummaryType extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ShippingServiceName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceName'
        ],
        'ShippingServiceCost' => [
            'type' => 'TheCodeBunny\eBayApi\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCost'
        ],
        'InsuranceCost' => [
            'type' => 'TheCodeBunny\eBayApi\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuranceCost'
        ],
        'ShippingType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingType'
        ],
        'LocalPickup' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LocalPickup'
        ],
        'InsuranceOption' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuranceOption'
        ],
        'ListedShippingServiceCost' => [
            'type' => 'TheCodeBunny\eBayApi\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListedShippingServiceCost'
        ],
        'ImportCharge' => [
            'type' => 'TheCodeBunny\eBayApi\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ImportCharge'
        ],
        'LogisticPlanType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LogisticPlanType'
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
