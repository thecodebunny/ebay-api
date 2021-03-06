<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Thecodebunny\eBayApi\ResolutionCaseManagement\Types;

/**
 *
 * @property \Thecodebunny\eBayApi\ResolutionCaseManagement\Types\CaseIdType $caseId
 * @property \Thecodebunny\eBayApi\ResolutionCaseManagement\Types\CaseUserType $user
 * @property \Thecodebunny\eBayApi\ResolutionCaseManagement\Types\CaseUserType $otherParty
 * @property \Thecodebunny\eBayApi\ResolutionCaseManagement\Types\CaseStatusType $status
 * @property \Thecodebunny\eBayApi\ResolutionCaseManagement\Types\ItemType $item
 * @property integer $caseQuantity
 * @property \Thecodebunny\eBayApi\ResolutionCaseManagement\Types\Amount $caseAmount
 * @property \DateTime $respondByDate
 * @property \DateTime $creationDate
 * @property \DateTime $lastModifiedDate
 */
class CaseSummaryType extends \Thecodebunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'caseId' => [
            'type' => 'Thecodebunny\eBayApi\ResolutionCaseManagement\Types\CaseIdType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'caseId'
        ],
        'user' => [
            'type' => 'Thecodebunny\eBayApi\ResolutionCaseManagement\Types\CaseUserType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'user'
        ],
        'otherParty' => [
            'type' => 'Thecodebunny\eBayApi\ResolutionCaseManagement\Types\CaseUserType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'otherParty'
        ],
        'status' => [
            'type' => 'Thecodebunny\eBayApi\ResolutionCaseManagement\Types\CaseStatusType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'status'
        ],
        'item' => [
            'type' => 'Thecodebunny\eBayApi\ResolutionCaseManagement\Types\ItemType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'item'
        ],
        'caseQuantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'caseQuantity'
        ],
        'caseAmount' => [
            'type' => 'Thecodebunny\eBayApi\ResolutionCaseManagement\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'caseAmount'
        ],
        'respondByDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'respondByDate'
        ],
        'creationDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationDate'
        ],
        'lastModifiedDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lastModifiedDate'
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
