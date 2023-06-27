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
 * @property \TheCodeBunny\eBayApi\Trading\Enums\MyMessagesFolderOperationCodeType $Operation
 * @property integer[] $FolderID
 * @property string[] $FolderName
 */
class ReviseMyMessagesFoldersRequestType extends \TheCodeBunny\eBayApi\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Operation' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Operation'
        ],
        'FolderID' => [
            'type' => 'integer',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'FolderID'
        ],
        'FolderName' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'FolderName'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'ReviseMyMessagesFoldersRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}