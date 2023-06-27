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
 * @property string $caseId
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\ReturnEligibilityErrorDetailType[] $eligibilityErrorDetail
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\StatusType $eligibilityStatus
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\DateTime $eligibleStartDate
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\DateTime $returnCreationDate
 * @property \TheCodeBunny\eBayApi\PostOrder\Types\DateTime $returnDeadline
 * @property string $returnId
 */
class EligibilityResultType extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'caseId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'caseId'
        ],
        'eligibilityErrorDetail' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\ReturnEligibilityErrorDetailType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'eligibilityErrorDetail'
        ],
        'eligibilityStatus' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\StatusType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eligibilityStatus'
        ],
        'eligibleStartDate' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eligibleStartDate'
        ],
        'returnCreationDate' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnCreationDate'
        ],
        'returnDeadline' => [
            'type' => 'TheCodeBunny\eBayApi\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnDeadline'
        ],
        'returnId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnId'
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
