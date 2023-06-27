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
 * @property string $Name
 * @property string $Street
 * @property string $Street1
 * @property string $Street2
 * @property string $CityName
 * @property string $County
 * @property string $StateOrProvince
 * @property \TheCodeBunny\eBayApi\Trading\Enums\CountryCodeType $Country
 * @property string $CountryName
 * @property string $Phone
 * @property \TheCodeBunny\eBayApi\Trading\Enums\CountryCodeType $PhoneCountryCode
 * @property string $PhoneCountryPrefix
 * @property string $PhoneAreaOrCityCode
 * @property string $PhoneLocalNumber
 * @property \TheCodeBunny\eBayApi\Trading\Enums\CountryCodeType $Phone2CountryCode
 * @property string $Phone2CountryPrefix
 * @property string $Phone2AreaOrCityCode
 * @property string $Phone2LocalNumber
 * @property string $PostalCode
 * @property string $AddressID
 * @property \TheCodeBunny\eBayApi\Trading\Enums\AddressOwnerCodeType $AddressOwner
 * @property string $ExternalAddressID
 * @property string $InternationalName
 * @property string $InternationalStateAndCity
 * @property string $InternationalStreet
 * @property string $CompanyName
 * @property string $FirstName
 * @property string $LastName
 * @property string $Phone2
 * @property \TheCodeBunny\eBayApi\Trading\Enums\AddressUsageCodeType $AddressUsage
 * @property string $ReferenceID
 * @property \TheCodeBunny\eBayApi\Trading\Types\AddressAttributeType[] $AddressAttribute
 */
class AddressType extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Name' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Name'
        ],
        'Street' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Street'
        ],
        'Street1' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Street1'
        ],
        'Street2' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Street2'
        ],
        'CityName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CityName'
        ],
        'County' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'County'
        ],
        'StateOrProvince' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StateOrProvince'
        ],
        'Country' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Country'
        ],
        'CountryName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CountryName'
        ],
        'Phone' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Phone'
        ],
        'PhoneCountryCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PhoneCountryCode'
        ],
        'PhoneCountryPrefix' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PhoneCountryPrefix'
        ],
        'PhoneAreaOrCityCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PhoneAreaOrCityCode'
        ],
        'PhoneLocalNumber' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PhoneLocalNumber'
        ],
        'Phone2CountryCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Phone2CountryCode'
        ],
        'Phone2CountryPrefix' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Phone2CountryPrefix'
        ],
        'Phone2AreaOrCityCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Phone2AreaOrCityCode'
        ],
        'Phone2LocalNumber' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Phone2LocalNumber'
        ],
        'PostalCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PostalCode'
        ],
        'AddressID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AddressID'
        ],
        'AddressOwner' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AddressOwner'
        ],
        'ExternalAddressID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExternalAddressID'
        ],
        'InternationalName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalName'
        ],
        'InternationalStateAndCity' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalStateAndCity'
        ],
        'InternationalStreet' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalStreet'
        ],
        'CompanyName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CompanyName'
        ],
        'FirstName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FirstName'
        ],
        'LastName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LastName'
        ],
        'Phone2' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Phone2'
        ],
        'AddressUsage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AddressUsage'
        ],
        'ReferenceID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReferenceID'
        ],
        'AddressAttribute' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\AddressAttributeType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'AddressAttribute'
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
