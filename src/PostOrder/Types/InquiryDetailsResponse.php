<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace TheCodeBunny\eBayApi\PostOrder\Types;

/**
 *
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\Amount $claimAmount
 * @property string $extTransactionId
 * @property \TheCodeBunny\eBayApi\PostOrder\Enums\UserPartyEnum $initiator
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\InquiryDetails $inquiryDetails
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\ClaimHistoryResponse $inquiryHistoryDetails
 * @property string $inquiryId
 * @property integer $inquiryQuantity
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\ItemDetails $itemDetails
 * @property string $itemId
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\ReturnAddress $returnDetails
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\DateTime $sellerMakeItRightByDate
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\Amount $shippingCost
 * @property string $state
 * @property string $status
 * @property string $transactionId
 * @property string $viewPPTrasanctionUrl
 */
class InquiryDetailsResponse extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'claimAmount' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'claimAmount'
        ],
        'extTransactionId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'extTransactionId'
        ],
        'initiator' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'initiator'
        ],
        'inquiryDetails' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\InquiryDetails',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inquiryDetails'
        ],
        'inquiryHistoryDetails' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\ClaimHistoryResponse',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inquiryHistoryDetails'
        ],
        'inquiryId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inquiryId'
        ],
        'inquiryQuantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inquiryQuantity'
        ],
        'itemDetails' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\ItemDetails',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemDetails'
        ],
        'itemId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemId'
        ],
        'returnDetails' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\ReturnAddress',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnDetails'
        ],
        'sellerMakeItRightByDate' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerMakeItRightByDate'
        ],
        'shippingCost' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingCost'
        ],
        'state' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'state'
        ],
        'status' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'status'
        ],
        'transactionId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'transactionId'
        ],
        'viewPPTrasanctionUrl' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'viewPPTrasanctionUrl'
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
