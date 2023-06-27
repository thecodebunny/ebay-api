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
 * @property \TheCodeBunny\eBayApi\Trading\Enums\AccountStateCodeType $AccountState
 * @property \TheCodeBunny\eBayApi\Trading\Types\AmountType $InvoicePayment
 * @property \TheCodeBunny\eBayApi\Trading\Types\AmountType $InvoiceCredit
 * @property \TheCodeBunny\eBayApi\Trading\Types\AmountType $InvoiceNewFee
 * @property \TheCodeBunny\eBayApi\Trading\Types\AdditionalAccountType[] $AdditionalAccount
 * @property \TheCodeBunny\eBayApi\Trading\Types\AmountType $AmountPastDue
 * @property string $BankAccountInfo
 * @property \DateTime $BankModifyDate
 * @property integer $BillingCycleDate
 * @property \DateTime $CreditCardExpiration
 * @property string $CreditCardInfo
 * @property \DateTime $CreditCardModifyDate
 * @property \TheCodeBunny\eBayApi\Trading\Types\AmountType $CurrentBalance
 * @property string $Email
 * @property \TheCodeBunny\eBayApi\Trading\Types\AmountType $InvoiceBalance
 * @property \DateTime $InvoiceDate
 * @property \TheCodeBunny\eBayApi\Trading\Types\AmountType $LastAmountPaid
 * @property \DateTime $LastPaymentDate
 * @property boolean $PastDue
 * @property \TheCodeBunny\eBayApi\Trading\Enums\SellerPaymentMethodCodeType $PaymentMethod
 */
class AccountSummaryType extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'AccountState' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AccountState'
        ],
        'InvoicePayment' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InvoicePayment'
        ],
        'InvoiceCredit' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InvoiceCredit'
        ],
        'InvoiceNewFee' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InvoiceNewFee'
        ],
        'AdditionalAccount' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\AdditionalAccountType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'AdditionalAccount'
        ],
        'AmountPastDue' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AmountPastDue'
        ],
        'BankAccountInfo' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BankAccountInfo'
        ],
        'BankModifyDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BankModifyDate'
        ],
        'BillingCycleDate' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BillingCycleDate'
        ],
        'CreditCardExpiration' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CreditCardExpiration'
        ],
        'CreditCardInfo' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CreditCardInfo'
        ],
        'CreditCardModifyDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CreditCardModifyDate'
        ],
        'CurrentBalance' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CurrentBalance'
        ],
        'Email' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Email'
        ],
        'InvoiceBalance' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InvoiceBalance'
        ],
        'InvoiceDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InvoiceDate'
        ],
        'LastAmountPaid' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LastAmountPaid'
        ],
        'LastPaymentDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LastPaymentDate'
        ],
        'PastDue' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PastDue'
        ],
        'PaymentMethod' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentMethod'
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
