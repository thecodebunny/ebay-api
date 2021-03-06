<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Thecodebunny\eBayApi\Trading\Types;

/**
 *
 * @property \Thecodebunny\eBayApi\Trading\Types\PaginationResultType $PaginationResult
 * @property boolean $HasMoreTransactions
 * @property integer $TransactionsPerPage
 * @property integer $PageNumber
 * @property integer $ReturnedTransactionCountActual
 * @property \Thecodebunny\eBayApi\Trading\Types\ItemType $Item
 * @property \Thecodebunny\eBayApi\Trading\Types\TransactionArrayType $TransactionArray
 * @property boolean $PayPalPreferred
 */
class GetItemTransactionsResponseType extends \Thecodebunny\eBayApi\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'PaginationResult' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\PaginationResultType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaginationResult'
        ],
        'HasMoreTransactions' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HasMoreTransactions'
        ],
        'TransactionsPerPage' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TransactionsPerPage'
        ],
        'PageNumber' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PageNumber'
        ],
        'ReturnedTransactionCountActual' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReturnedTransactionCountActual'
        ],
        'Item' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\ItemType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Item'
        ],
        'TransactionArray' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\TransactionArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TransactionArray'
        ],
        'PayPalPreferred' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PayPalPreferred'
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
