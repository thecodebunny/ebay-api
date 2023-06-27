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
 * @property string $DeliveryMethod
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\DeliveryStatusType $DeliveryStatus
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\DeliveryDetailsType $DeliveryDetails
 */
class DigitalDeliverySelectedType extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'DeliveryMethod' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeliveryMethod'
        ],
        'DeliveryStatus' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\DeliveryStatusType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeliveryStatus'
        ],
        'DeliveryDetails' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\DeliveryDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeliveryDetails'
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
