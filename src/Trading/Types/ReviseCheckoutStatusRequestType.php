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
 * @property string $ItemID
 * @property string $TransactionID
 * @property string $OrderID
 * @property \TheCodeBunny\eBayApi\Trading\Types\AmountType $AmountPaid
 * @property \TheCodeBunny\eBayApi\Trading\Enums\BuyerPaymentMethodCodeType $PaymentMethodUsed
 * @property \TheCodeBunny\eBayApi\Trading\Enums\CompleteStatusCodeType $CheckoutStatus
 * @property string $ShippingService
 * @property boolean $ShippingIncludedInTax
 * @property \TheCodeBunny\eBayApi\Trading\Enums\RCSPaymentStatusCodeType $PaymentStatus
 * @property \TheCodeBunny\eBayApi\Trading\Types\AmountType $AdjustmentAmount
 * @property string $BuyerID
 * @property \TheCodeBunny\eBayApi\Trading\Types\AmountType $SalesTax
 * @property \TheCodeBunny\eBayApi\Trading\Types\AmountType $ShippingCost
 * @property string $EncryptedID
 * @property \TheCodeBunny\eBayApi\Trading\Types\ExternalTransactionType $ExternalTransaction
 * @property string $MultipleSellerPaymentID
 * @property \TheCodeBunny\eBayApi\Trading\Types\AmountType $CODCost
 * @property string $OrderLineItemID
 */
class ReviseCheckoutStatusRequestType extends \TheCodeBunny\eBayApi\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ],
        'TransactionID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TransactionID'
        ],
        'OrderID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderID'
        ],
        'AmountPaid' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AmountPaid'
        ],
        'PaymentMethodUsed' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentMethodUsed'
        ],
        'CheckoutStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CheckoutStatus'
        ],
        'ShippingService' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingService'
        ],
        'ShippingIncludedInTax' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingIncludedInTax'
        ],
        'PaymentStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentStatus'
        ],
        'AdjustmentAmount' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AdjustmentAmount'
        ],
        'BuyerID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerID'
        ],
        'SalesTax' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SalesTax'
        ],
        'ShippingCost' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingCost'
        ],
        'EncryptedID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EncryptedID'
        ],
        'ExternalTransaction' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\ExternalTransactionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExternalTransaction'
        ],
        'MultipleSellerPaymentID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MultipleSellerPaymentID'
        ],
        'CODCost' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CODCost'
        ],
        'OrderLineItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderLineItemID'
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
            self::$requestXmlRootElementNames[__CLASS__] = 'ReviseCheckoutStatusRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
