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
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\MultiLegShippingServiceType $ShippingServiceDetails
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\AddressType $ShipToAddress
 * @property integer $ShippingTimeMin
 * @property integer $ShippingTimeMax
 */
class MultiLegShipmentType extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ShippingServiceDetails' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\MultiLegShippingServiceType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceDetails'
        ],
        'ShipToAddress' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\AddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShipToAddress'
        ],
        'ShippingTimeMin' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingTimeMin'
        ],
        'ShippingTimeMax' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingTimeMax'
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
