<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace TheCodeBunny\eBayApi\Fulfillment\Types;

/**
 *
 * @property string $cancelCompletedDate
 * @property string $cancelInitiator
 * @property string $cancelReason
 * @property string $cancelRequestedDate
 * @property string $cancelRequestId
 * @property \TheCodeBunny\eBayApi\Fulfillment\Enums\CancelRequestStateEnum $cancelRequestState
 */
class CancelRequest extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'cancelCompletedDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelCompletedDate'
        ],
        'cancelInitiator' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelInitiator'
        ],
        'cancelReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelReason'
        ],
        'cancelRequestedDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelRequestedDate'
        ],
        'cancelRequestId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelRequestId'
        ],
        'cancelRequestState' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelRequestState'
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
