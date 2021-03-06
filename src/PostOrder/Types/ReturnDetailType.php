<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Thecodebunny\eBayApi\PostOrder\Types;

/**
 *
 * @property \Thecodebunny\eBayApi\PostOrder\Types\ReturnAddressType $buyerAddress
 * @property string $buyerLoginName
 * @property \Thecodebunny\eBayApi\PostOrder\Types\ReturnCloseInfoType $closeInfo
 * @property \Thecodebunny\eBayApi\PostOrder\Types\DispositionRuleDetailType[] $dispositionRuleDetail
 * @property \Thecodebunny\eBayApi\PostOrder\Types\ReturnFileType[] $files
 * @property \Thecodebunny\eBayApi\PostOrder\Types\ReturnHoldInfoType $holdInfo
 * @property \Thecodebunny\eBayApi\PostOrder\Types\ItemDetailType $itemDetail
 * @property \Thecodebunny\eBayApi\PostOrder\Enums\MarketplaceIdEnum $marketplaceId
 * @property \Thecodebunny\eBayApi\PostOrder\Types\MoneyMovementDetailType[] $moneyMovementInfo
 * @property \Thecodebunny\eBayApi\PostOrder\Types\RefundInfoType $refundInfo
 * @property \Thecodebunny\eBayApi\PostOrder\Types\ShipmentType $replacementShipmentInfo
 * @property \Thecodebunny\eBayApi\PostOrder\Types\ReturnResponseHistoryType[] $responseHistory
 * @property \Thecodebunny\eBayApi\PostOrder\Types\ShipmentType $returnShipmentInfo
 * @property string $RMANumber
 * @property \Thecodebunny\eBayApi\PostOrder\Types\ReturnAddressType $sellerAddress
 * @property string $sellerLoginName
 */
class ReturnDetailType extends \Thecodebunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'buyerAddress' => [
            'type' => 'Thecodebunny\eBayApi\PostOrder\Types\ReturnAddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerAddress'
        ],
        'buyerLoginName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerLoginName'
        ],
        'closeInfo' => [
            'type' => 'Thecodebunny\eBayApi\PostOrder\Types\ReturnCloseInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'closeInfo'
        ],
        'dispositionRuleDetail' => [
            'type' => 'Thecodebunny\eBayApi\PostOrder\Types\DispositionRuleDetailType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'dispositionRuleDetail'
        ],
        'files' => [
            'type' => 'Thecodebunny\eBayApi\PostOrder\Types\ReturnFileType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'files'
        ],
        'holdInfo' => [
            'type' => 'Thecodebunny\eBayApi\PostOrder\Types\ReturnHoldInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'holdInfo'
        ],
        'itemDetail' => [
            'type' => 'Thecodebunny\eBayApi\PostOrder\Types\ItemDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemDetail'
        ],
        'marketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketplaceId'
        ],
        'moneyMovementInfo' => [
            'type' => 'Thecodebunny\eBayApi\PostOrder\Types\MoneyMovementDetailType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'moneyMovementInfo'
        ],
        'refundInfo' => [
            'type' => 'Thecodebunny\eBayApi\PostOrder\Types\RefundInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundInfo'
        ],
        'replacementShipmentInfo' => [
            'type' => 'Thecodebunny\eBayApi\PostOrder\Types\ShipmentType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'replacementShipmentInfo'
        ],
        'responseHistory' => [
            'type' => 'Thecodebunny\eBayApi\PostOrder\Types\ReturnResponseHistoryType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'responseHistory'
        ],
        'returnShipmentInfo' => [
            'type' => 'Thecodebunny\eBayApi\PostOrder\Types\ShipmentType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnShipmentInfo'
        ],
        'RMANumber' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RMANumber'
        ],
        'sellerAddress' => [
            'type' => 'Thecodebunny\eBayApi\PostOrder\Types\ReturnAddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerAddress'
        ],
        'sellerLoginName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerLoginName'
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
