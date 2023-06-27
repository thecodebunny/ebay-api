<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace TheCodeBunny\eBayApi\PostOrder\Types;

/**
 *
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\ConditionListDetailType $dataList
 * @property boolean $isChecked
 * @property boolean $isEbayPlus
 * @property boolean $isInvalid
 * @property boolean $storeCategory
 * @property integer $storeId
 */
class RuleConditionDetailType extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'dataList' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\ConditionListDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'dataList'
        ],
        'isChecked' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'isChecked'
        ],
        'isEbayPlus' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'isEbayPlus'
        ],
        'isInvalid' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'isInvalid'
        ],
        'storeCategory' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'storeCategory'
        ],
        'storeId' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'storeId'
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
