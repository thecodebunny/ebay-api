<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Thecodebunny\eBayApi\MerchantData\Types;

/**
 *
 * @property boolean $GlobalShipping
 * @property \Thecodebunny\eBayApi\MerchantData\Types\CalculatedShippingRateType $CalculatedShippingRate
 * @property boolean $ChangePaymentInstructions
 * @property \Thecodebunny\eBayApi\MerchantData\Types\AmountType $InsuranceFee
 * @property \Thecodebunny\eBayApi\MerchantData\Enums\InsuranceOptionCodeType $InsuranceOption
 * @property boolean $InsuranceWanted
 * @property boolean $PaymentEdited
 * @property string $PaymentInstructions
 * @property \Thecodebunny\eBayApi\MerchantData\Types\SalesTaxType $SalesTax
 * @property string $ShippingRateErrorMessage
 * @property \Thecodebunny\eBayApi\MerchantData\Enums\ShippingRateTypeCodeType $ShippingRateType
 * @property \Thecodebunny\eBayApi\MerchantData\Types\ShippingServiceOptionsType[] $ShippingServiceOptions
 * @property \Thecodebunny\eBayApi\MerchantData\Types\InternationalShippingServiceOptionsType[] $InternationalShippingServiceOption
 * @property \Thecodebunny\eBayApi\MerchantData\Enums\ShippingTypeCodeType $ShippingType
 * @property integer $SellingManagerSalesRecordNumber
 * @property \Thecodebunny\eBayApi\MerchantData\Types\TaxTableType $TaxTable
 * @property string $ShippingServiceUsed
 * @property \Thecodebunny\eBayApi\MerchantData\Types\AmountType $DefaultShippingCost
 * @property \Thecodebunny\eBayApi\MerchantData\Types\InsuranceDetailsType $InsuranceDetails
 * @property \Thecodebunny\eBayApi\MerchantData\Types\InsuranceDetailsType $InternationalInsuranceDetails
 * @property string $ShippingDiscountProfileID
 * @property \Thecodebunny\eBayApi\MerchantData\Types\FlatShippingDiscountType $FlatShippingDiscount
 * @property \Thecodebunny\eBayApi\MerchantData\Types\CalculatedShippingDiscountType $CalculatedShippingDiscount
 * @property boolean $PromotionalShippingDiscount
 * @property string $InternationalShippingDiscountProfileID
 * @property \Thecodebunny\eBayApi\MerchantData\Types\FlatShippingDiscountType $InternationalFlatShippingDiscount
 * @property \Thecodebunny\eBayApi\MerchantData\Types\CalculatedShippingDiscountType $InternationalCalculatedShippingDiscount
 * @property boolean $InternationalPromotionalShippingDiscount
 * @property \Thecodebunny\eBayApi\MerchantData\Types\PromotionalShippingDiscountDetailsType $PromotionalShippingDiscountDetails
 * @property \Thecodebunny\eBayApi\MerchantData\Types\AmountType $CODCost
 * @property string[] $ExcludeShipToLocation
 * @property boolean $SellerExcludeShipToLocationsPreference
 * @property \Thecodebunny\eBayApi\MerchantData\Types\ShipmentTrackingDetailsType[] $ShipmentTrackingDetails
 * @property \Thecodebunny\eBayApi\MerchantData\Types\RateTableDetailsType $RateTableDetails
 */
class ShippingDetailsType extends \Thecodebunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'GlobalShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GlobalShipping'
        ],
        'CalculatedShippingRate' => [
            'type' => 'Thecodebunny\eBayApi\MerchantData\Types\CalculatedShippingRateType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CalculatedShippingRate'
        ],
        'ChangePaymentInstructions' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ChangePaymentInstructions'
        ],
        'InsuranceFee' => [
            'type' => 'Thecodebunny\eBayApi\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuranceFee'
        ],
        'InsuranceOption' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuranceOption'
        ],
        'InsuranceWanted' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuranceWanted'
        ],
        'PaymentEdited' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentEdited'
        ],
        'PaymentInstructions' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentInstructions'
        ],
        'SalesTax' => [
            'type' => 'Thecodebunny\eBayApi\MerchantData\Types\SalesTaxType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SalesTax'
        ],
        'ShippingRateErrorMessage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingRateErrorMessage'
        ],
        'ShippingRateType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingRateType'
        ],
        'ShippingServiceOptions' => [
            'type' => 'Thecodebunny\eBayApi\MerchantData\Types\ShippingServiceOptionsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShippingServiceOptions'
        ],
        'InternationalShippingServiceOption' => [
            'type' => 'Thecodebunny\eBayApi\MerchantData\Types\InternationalShippingServiceOptionsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'InternationalShippingServiceOption'
        ],
        'ShippingType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingType'
        ],
        'SellingManagerSalesRecordNumber' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerSalesRecordNumber'
        ],
        'TaxTable' => [
            'type' => 'Thecodebunny\eBayApi\MerchantData\Types\TaxTableType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TaxTable'
        ],
        'ShippingServiceUsed' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceUsed'
        ],
        'DefaultShippingCost' => [
            'type' => 'Thecodebunny\eBayApi\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DefaultShippingCost'
        ],
        'InsuranceDetails' => [
            'type' => 'Thecodebunny\eBayApi\MerchantData\Types\InsuranceDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuranceDetails'
        ],
        'InternationalInsuranceDetails' => [
            'type' => 'Thecodebunny\eBayApi\MerchantData\Types\InsuranceDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalInsuranceDetails'
        ],
        'ShippingDiscountProfileID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingDiscountProfileID'
        ],
        'FlatShippingDiscount' => [
            'type' => 'Thecodebunny\eBayApi\MerchantData\Types\FlatShippingDiscountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FlatShippingDiscount'
        ],
        'CalculatedShippingDiscount' => [
            'type' => 'Thecodebunny\eBayApi\MerchantData\Types\CalculatedShippingDiscountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CalculatedShippingDiscount'
        ],
        'PromotionalShippingDiscount' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PromotionalShippingDiscount'
        ],
        'InternationalShippingDiscountProfileID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalShippingDiscountProfileID'
        ],
        'InternationalFlatShippingDiscount' => [
            'type' => 'Thecodebunny\eBayApi\MerchantData\Types\FlatShippingDiscountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalFlatShippingDiscount'
        ],
        'InternationalCalculatedShippingDiscount' => [
            'type' => 'Thecodebunny\eBayApi\MerchantData\Types\CalculatedShippingDiscountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalCalculatedShippingDiscount'
        ],
        'InternationalPromotionalShippingDiscount' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalPromotionalShippingDiscount'
        ],
        'PromotionalShippingDiscountDetails' => [
            'type' => 'Thecodebunny\eBayApi\MerchantData\Types\PromotionalShippingDiscountDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PromotionalShippingDiscountDetails'
        ],
        'CODCost' => [
            'type' => 'Thecodebunny\eBayApi\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CODCost'
        ],
        'ExcludeShipToLocation' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ExcludeShipToLocation'
        ],
        'SellerExcludeShipToLocationsPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerExcludeShipToLocationsPreference'
        ],
        'ShipmentTrackingDetails' => [
            'type' => 'Thecodebunny\eBayApi\MerchantData\Types\ShipmentTrackingDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShipmentTrackingDetails'
        ],
        'RateTableDetails' => [
            'type' => 'Thecodebunny\eBayApi\MerchantData\Types\RateTableDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RateTableDetails'
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
