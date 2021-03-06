<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Thecodebunny\eBayApi\MerchantData\Types;

/**
 *
 * @property \Thecodebunny\eBayApi\MerchantData\Enums\TaxTypeCodeType $Imposition
 * @property \Thecodebunny\eBayApi\MerchantData\Enums\TaxDescriptionCodeType $TaxDescription
 * @property \Thecodebunny\eBayApi\MerchantData\Types\AmountType $TaxAmount
 * @property \Thecodebunny\eBayApi\MerchantData\Types\AmountType $TaxOnSubtotalAmount
 * @property \Thecodebunny\eBayApi\MerchantData\Types\AmountType $TaxOnShippingAmount
 * @property \Thecodebunny\eBayApi\MerchantData\Types\AmountType $TaxOnHandlingAmount
 * @property string $TaxCode
 */
class TaxDetailsType extends \Thecodebunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Imposition' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Imposition'
        ],
        'TaxDescription' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TaxDescription'
        ],
        'TaxAmount' => [
            'type' => 'Thecodebunny\eBayApi\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TaxAmount'
        ],
        'TaxOnSubtotalAmount' => [
            'type' => 'Thecodebunny\eBayApi\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TaxOnSubtotalAmount'
        ],
        'TaxOnShippingAmount' => [
            'type' => 'Thecodebunny\eBayApi\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TaxOnShippingAmount'
        ],
        'TaxOnHandlingAmount' => [
            'type' => 'Thecodebunny\eBayApi\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TaxOnHandlingAmount'
        ],
        'TaxCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TaxCode'
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
