<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace TheCodeBunny\eBayApi\Trading\Types;

/**
 *
 * @property \TheCodeBunny\eBayApi\Trading\Types\SellingManagerProductDetailsType $SellingManagerProductDetails
 * @property \TheCodeBunny\eBayApi\Trading\Types\SellingManagerTemplateDetailsArrayType $SellingManagerTemplateDetailsArray
 * @property \TheCodeBunny\eBayApi\Trading\Types\SellingManagerProductInventoryStatusType $SellingManagerProductInventoryStatus
 * @property \TheCodeBunny\eBayApi\Trading\Types\SellingManagerProductSpecificsType $SellingManagerProductSpecifics
 */
class SellingManagerProductType extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SellingManagerProductDetails' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\SellingManagerProductDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerProductDetails'
        ],
        'SellingManagerTemplateDetailsArray' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\SellingManagerTemplateDetailsArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerTemplateDetailsArray'
        ],
        'SellingManagerProductInventoryStatus' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\SellingManagerProductInventoryStatusType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerProductInventoryStatus'
        ],
        'SellingManagerProductSpecifics' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\SellingManagerProductSpecificsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerProductSpecifics'
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
