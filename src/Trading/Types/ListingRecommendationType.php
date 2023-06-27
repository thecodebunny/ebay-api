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
 * @property string $Type
 * @property string $Group
 * @property string $FieldName
 * @property string $Code
 * @property string[] $Value
 * @property string $Message
 * @property \TheCodeBunny\eBayApi\Trading\Types\MetadataType[] $Metadata
 */
class ListingRecommendationType extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Type' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Type'
        ],
        'Group' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Group'
        ],
        'FieldName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FieldName'
        ],
        'Code' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Code'
        ],
        'Value' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Value'
        ],
        'Message' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Message'
        ],
        'Metadata' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\MetadataType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Metadata'
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
