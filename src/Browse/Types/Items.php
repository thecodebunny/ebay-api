<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace TheCodeBunny\eBayApi\Browse\Types;

/**
 *
 * @property \TheCodeBunny\eBayApi\Browse\Types\CommonDescriptions[] $commonDescriptions
 * @property \TheCodeBunny\eBayApi\Browse\Types\Item[] $items
 */
class Items extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'commonDescriptions' => [
            'type' => 'TheCodeBunny\eBayApi\Browse\Types\CommonDescriptions',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'commonDescriptions'
        ],
        'items' => [
            'type' => 'TheCodeBunny\eBayApi\Browse\Types\Item',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'items'
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
