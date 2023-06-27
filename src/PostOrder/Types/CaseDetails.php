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
 * @property string $buyerFinalAcceptResolution
 * @property string $buyerInitExpectResolution
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\DateTime $creationDate
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\DateTime $escalationDate
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\DateTime $expirationDate
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\DateTime $lastBuyerRespDate
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\DateTime $lastSellerRespDate
 * @property boolean $paypalPaid
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\RefundAmounts $refundAmounts
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\DateTime $refundDeadlineDate
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\RefundType $refundType
 */
class CaseDetails extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'buyerFinalAcceptResolution' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerFinalAcceptResolution'
        ],
        'buyerInitExpectResolution' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerInitExpectResolution'
        ],
        'creationDate' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationDate'
        ],
        'escalationDate' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'escalationDate'
        ],
        'expirationDate' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'expirationDate'
        ],
        'lastBuyerRespDate' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lastBuyerRespDate'
        ],
        'lastSellerRespDate' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lastSellerRespDate'
        ],
        'paypalPaid' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paypalPaid'
        ],
        'refundAmounts' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\RefundAmounts',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundAmounts'
        ],
        'refundDeadlineDate' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundDeadlineDate'
        ],
        'refundType' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\RefundType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundType'
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
