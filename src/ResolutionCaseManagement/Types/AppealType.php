<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace TheCodeBunny\eBayApi\ResolutionCaseManagement\Types;

/**
 *
 * @property \TheCodeBunny\eBayApi\ResolutionCaseManagement\Enums\AppealDecisionType $decision
 * @property string $decisionReason
 * @property \TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\DecisionReasonDetailType $decisionReasonDetail
 * @property \DateTime $decisionDate
 * @property \DateTime $creationDate
 * @property string $id
 */
class AppealType extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'decision' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'decision'
        ],
        'decisionReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'decisionReason'
        ],
        'decisionReasonDetail' => [
            'type' => 'TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\DecisionReasonDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'decisionReasonDetail'
        ],
        'decisionDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'decisionDate'
        ],
        'creationDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationDate'
        ],
        'id' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'id'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/resolution/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
