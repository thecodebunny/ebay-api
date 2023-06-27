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
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\Amount $buyerTotalAmount
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\EstimatedRefundDetailType $estimatedRefundDetail
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\Amount $sellerTotalAmount
 */
class EstimatedRefundInfoType extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'buyerTotalAmount' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerTotalAmount'
        ],
        'estimatedRefundDetail' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\EstimatedRefundDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'estimatedRefundDetail'
        ],
        'sellerTotalAmount' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerTotalAmount'
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
