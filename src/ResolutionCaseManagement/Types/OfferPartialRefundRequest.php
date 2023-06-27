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
 * @property \TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\CaseIdType $caseId
 * @property \TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\Money $amount
 * @property string $comments
 */
class OfferPartialRefundRequest extends \TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\BaseRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'caseId' => [
            'type' => 'TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\CaseIdType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'caseId'
        ],
        'amount' => [
            'type' => 'TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\Money',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'amount'
        ],
        'comments' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'comments'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'offerPartialRefundRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
