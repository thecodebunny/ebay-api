<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace TheCodeBunny\eBayApi\Catalog\Types;

/**
 *
 * @property string $offset
 * @property string $limit
 * @property string $fieldgroups
 * @property string $aspect_filter
 * @property string $category_ids
 * @property string $mpn
 * @property string $gtin
 * @property string $q
 */
class SearchRestRequest extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'offset' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'offset'
        ],
        'limit' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'limit'
        ],
        'fieldgroups' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fieldgroups'
        ],
        'aspect_filter' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'aspect_filter'
        ],
        'category_ids' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'category_ids'
        ],
        'mpn' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'mpn'
        ],
        'gtin' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'gtin'
        ],
        'q' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'q'
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
