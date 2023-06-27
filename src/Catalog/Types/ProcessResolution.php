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
 * @property \TheCodeBunny\eBayApi\Catalog\Types\ConflictingProduct[] $conflictingProducts
 * @property \TheCodeBunny\eBayApi\Catalog\Types\Correction[] $corrections
 * @property string $epid
 * @property string $productHref
 * @property \TheCodeBunny\eBayApi\Catalog\Types\Violation[] $violations
 */
class ProcessResolution extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'conflictingProducts' => [
            'type' => 'TheCodeBunny\eBayApi\Catalog\Types\ConflictingProduct',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'conflictingProducts'
        ],
        'corrections' => [
            'type' => 'TheCodeBunny\eBayApi\Catalog\Types\Correction',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'corrections'
        ],
        'epid' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'epid'
        ],
        'productHref' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'productHref'
        ],
        'violations' => [
            'type' => 'TheCodeBunny\eBayApi\Catalog\Types\Violation',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'violations'
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