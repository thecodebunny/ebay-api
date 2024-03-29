<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace TheCodeBunny\eBayApi\Marketing\Types;

/**
 *
 * @property \TheCodeBunny\eBayApi\Marketing\Types\AdReference[] $ads
 * @property \TheCodeBunny\eBayApi\Marketing\Types\ErrorDetailV3[] $errors
 * @property string $inventoryReferenceId
 * @property \TheCodeBunny\eBayApi\Marketing\Enums\InventoryReferenceTypeEnum $inventoryReferenceType
 * @property integer $statusCode
 */
class CreateAdsByInventoryReferenceResponse extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ads' => [
            'type' => 'TheCodeBunny\eBayApi\Marketing\Types\AdReference',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ads'
        ],
        'errors' => [
            'type' => 'TheCodeBunny\eBayApi\Marketing\Types\ErrorDetailV3',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'errors'
        ],
        'inventoryReferenceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inventoryReferenceId'
        ],
        'inventoryReferenceType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inventoryReferenceType'
        ],
        'statusCode' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'statusCode'
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
