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
 * @property \TheCodeBunny\eBayApi\ResolutionCaseManagement\Enums\SellerINREscalationReasonType $sellerINRReason
 * @property \TheCodeBunny\eBayApi\ResolutionCaseManagement\Enums\SellerSNADEscalationReasonType $sellerSNADReason
 * @property \TheCodeBunny\eBayApi\ResolutionCaseManagement\Enums\BuyerINREscalationReasonType $buyerINRReason
 * @property \TheCodeBunny\eBayApi\ResolutionCaseManagement\Enums\BuyerSNADEscalationReasonType $buyerSNADReason
 */
class EscalationReasonType extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'sellerINRReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerINRReason'
        ],
        'sellerSNADReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerSNADReason'
        ],
        'buyerINRReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerINRReason'
        ],
        'buyerSNADReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerSNADReason'
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
