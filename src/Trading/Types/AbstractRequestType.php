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
 * @property \TheCodeBunny\eBayApi\Trading\Types\CustomSecurityHeaderType $RequesterCredentials
 * @property \TheCodeBunny\eBayApi\Trading\Enums\DetailLevelCodeType[] $DetailLevel
 * @property string $ErrorLanguage
 * @property string $MessageID
 * @property string $Version
 * @property string $EndUserIP
 * @property \TheCodeBunny\eBayApi\Trading\Enums\ErrorHandlingCodeType $ErrorHandling
 * @property string $InvocationID
 * @property string[] $OutputSelector
 * @property \TheCodeBunny\eBayApi\Trading\Enums\WarningLevelCodeType $WarningLevel
 * @property \TheCodeBunny\eBayApi\Trading\Types\BotBlockRequestType $BotBlock
 */
class AbstractRequestType extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'RequesterCredentials' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\CustomSecurityHeaderType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RequesterCredentials'
        ],
        'DetailLevel' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'DetailLevel'
        ],
        'ErrorLanguage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ErrorLanguage'
        ],
        'MessageID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MessageID'
        ],
        'Version' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Version'
        ],
        'EndUserIP' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndUserIP'
        ],
        'ErrorHandling' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ErrorHandling'
        ],
        'InvocationID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InvocationID'
        ],
        'OutputSelector' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'OutputSelector'
        ],
        'WarningLevel' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'WarningLevel'
        ],
        'BotBlock' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\BotBlockRequestType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BotBlock'
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