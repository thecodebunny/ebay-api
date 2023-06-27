<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace TheCodeBunny\eBayApi\ProductMetadata\Types;

/**
 *
 * @property \TheCodeBunny\eBayApi\ProductMetadata\Types\StringValue $text
 * @property \TheCodeBunny\eBayApi\ProductMetadata\Types\NumericValue $number
 * @property \TheCodeBunny\eBayApi\ProductMetadata\Types\URIValue $URL
 */
class Value extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'text' => [
            'type' => 'TheCodeBunny\eBayApi\ProductMetadata\Types\StringValue',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'text'
        ],
        'number' => [
            'type' => 'TheCodeBunny\eBayApi\ProductMetadata\Types\NumericValue',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'number'
        ],
        'URL' => [
            'type' => 'TheCodeBunny\eBayApi\ProductMetadata\Types\URIValue',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'URL'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/marketplacecatalog/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
