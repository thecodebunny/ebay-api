<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace TheCodeBunny\eBayApi\MerchantData\Types;

/**
 *
 * @property string $OrderID
 * @property \TheCodeBunny\eBayApi\MerchantData\Enums\OrderStatusCodeType $OrderStatus
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\AmountType $AdjustmentAmount
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\AmountType $AmountPaid
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\AmountType $AmountSaved
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\CheckoutStatusType $CheckoutStatus
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\ShippingDetailsType $ShippingDetails
 * @property \TheCodeBunny\eBayApi\MerchantData\Enums\TradingRoleCodeType $CreatingUserRole
 * @property \DateTime $CreatedTime
 * @property \TheCodeBunny\eBayApi\MerchantData\Enums\BuyerPaymentMethodCodeType[] $PaymentMethods
 * @property string $SellerEmail
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\AddressType $ShippingAddress
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\ShippingServiceOptionsType $ShippingServiceSelected
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\AmountType $Subtotal
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\AmountType $Total
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\ExternalTransactionType[] $ExternalTransaction
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\TransactionArrayType $TransactionArray
 * @property string $BuyerUserID
 * @property \DateTime $PaidTime
 * @property \DateTime $ShippedTime
 * @property boolean $IntegratedMerchantCreditCardEnabled
 * @property string $BuyerCheckoutMessage
 * @property string $EIASToken
 * @property \TheCodeBunny\eBayApi\MerchantData\Enums\PaymentHoldStatusCodeType $PaymentHoldStatus
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\PaymentHoldDetailType $PaymentHoldDetails
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\AmountType $RefundAmount
 * @property string $RefundStatus
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\RefundArrayType $RefundArray
 * @property boolean $IsMultiLegShipping
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\MultiLegShippingDetailsType $MultiLegShippingDetails
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\PaymentsInformationType $MonetaryDetails
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\PickupDetailsType $PickupDetails
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\PickupMethodSelectedType $PickupMethodSelected
 * @property string $SellerUserID
 * @property string $SellerEIASToken
 * @property string $CancelReason
 * @property \TheCodeBunny\eBayApi\MerchantData\Enums\CancelStatusCodeType $CancelStatus
 * @property string $CancelReasonDetails
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\AmountType $ShippingConvenienceCharge
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\CancelDetailType[] $CancelDetail
 * @property string $LogisticsPlanType
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\TaxIdentifierType[] $BuyerTaxIdentifier
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\BuyerPackageEnclosuresType $BuyerPackageEnclosures
 * @property string $ExtendedOrderID
 * @property boolean $ContainseBayPlusTransaction
 */
class OrderType extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'OrderID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderID'
        ],
        'OrderStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderStatus'
        ],
        'AdjustmentAmount' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AdjustmentAmount'
        ],
        'AmountPaid' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AmountPaid'
        ],
        'AmountSaved' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AmountSaved'
        ],
        'CheckoutStatus' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\CheckoutStatusType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CheckoutStatus'
        ],
        'ShippingDetails' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\ShippingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingDetails'
        ],
        'CreatingUserRole' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CreatingUserRole'
        ],
        'CreatedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CreatedTime'
        ],
        'PaymentMethods' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PaymentMethods'
        ],
        'SellerEmail' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerEmail'
        ],
        'ShippingAddress' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\AddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingAddress'
        ],
        'ShippingServiceSelected' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\ShippingServiceOptionsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceSelected'
        ],
        'Subtotal' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Subtotal'
        ],
        'Total' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Total'
        ],
        'ExternalTransaction' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\ExternalTransactionType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ExternalTransaction'
        ],
        'TransactionArray' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\TransactionArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TransactionArray'
        ],
        'BuyerUserID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerUserID'
        ],
        'PaidTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaidTime'
        ],
        'ShippedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippedTime'
        ],
        'IntegratedMerchantCreditCardEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
        ],
        'BuyerCheckoutMessage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerCheckoutMessage'
        ],
        'EIASToken' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EIASToken'
        ],
        'PaymentHoldStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldStatus'
        ],
        'PaymentHoldDetails' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\PaymentHoldDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldDetails'
        ],
        'RefundAmount' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefundAmount'
        ],
        'RefundStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefundStatus'
        ],
        'RefundArray' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\RefundArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefundArray'
        ],
        'IsMultiLegShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IsMultiLegShipping'
        ],
        'MultiLegShippingDetails' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\MultiLegShippingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MultiLegShippingDetails'
        ],
        'MonetaryDetails' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\PaymentsInformationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MonetaryDetails'
        ],
        'PickupDetails' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\PickupDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PickupDetails'
        ],
        'PickupMethodSelected' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\PickupMethodSelectedType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PickupMethodSelected'
        ],
        'SellerUserID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerUserID'
        ],
        'SellerEIASToken' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerEIASToken'
        ],
        'CancelReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CancelReason'
        ],
        'CancelStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CancelStatus'
        ],
        'CancelReasonDetails' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CancelReasonDetails'
        ],
        'ShippingConvenienceCharge' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingConvenienceCharge'
        ],
        'CancelDetail' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\CancelDetailType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'CancelDetail'
        ],
        'LogisticsPlanType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LogisticsPlanType'
        ],
        'BuyerTaxIdentifier' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\TaxIdentifierType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'BuyerTaxIdentifier'
        ],
        'BuyerPackageEnclosures' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\BuyerPackageEnclosuresType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerPackageEnclosures'
        ],
        'ExtendedOrderID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExtendedOrderID'
        ],
        'ContainseBayPlusTransaction' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ContainseBayPlusTransaction'
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
