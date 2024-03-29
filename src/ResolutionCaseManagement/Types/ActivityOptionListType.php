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
 * @property \TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\OfferOtherSolutionOptionType $offerOtherSolution
 * @property \TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\ProvideTrackingInfoOptionType $provideTrackingInfo
 * @property \TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\IssueFullRefundOptionType $issueFullRefund
 * @property \TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\IssuePartialRefundOptionType $issuePartialRefund
 * @property \TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\ProvideShippingInfoOptionType $provideShippingInfo
 * @property \TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\RequestBuyerToReturnOptionType $requestBuyerToReturn
 * @property \TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\ProvideShippingOrTrackingInfoOptionType $provideShippingOrTrackingInfo
 * @property \TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\ProvideRefundInfoOptionType $provideRefundInfo
 * @property \TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\ContactCustomerSupportOptionType $contactCustomerSupport
 * @property \TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\EscalateToCustomerSupportOptionType $escalateToCustomerSupport
 * @property \TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\AppealToCustomerSupportOptionType $appealToCustomerSupport
 */
class ActivityOptionListType extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'offerOtherSolution' => [
            'type' => 'TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\OfferOtherSolutionOptionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'offerOtherSolution'
        ],
        'provideTrackingInfo' => [
            'type' => 'TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\ProvideTrackingInfoOptionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'provideTrackingInfo'
        ],
        'issueFullRefund' => [
            'type' => 'TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\IssueFullRefundOptionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'issueFullRefund'
        ],
        'issuePartialRefund' => [
            'type' => 'TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\IssuePartialRefundOptionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'issuePartialRefund'
        ],
        'provideShippingInfo' => [
            'type' => 'TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\ProvideShippingInfoOptionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'provideShippingInfo'
        ],
        'requestBuyerToReturn' => [
            'type' => 'TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\RequestBuyerToReturnOptionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'requestBuyerToReturn'
        ],
        'provideShippingOrTrackingInfo' => [
            'type' => 'TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\ProvideShippingOrTrackingInfoOptionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'provideShippingOrTrackingInfo'
        ],
        'provideRefundInfo' => [
            'type' => 'TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\ProvideRefundInfoOptionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'provideRefundInfo'
        ],
        'contactCustomerSupport' => [
            'type' => 'TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\ContactCustomerSupportOptionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'contactCustomerSupport'
        ],
        'escalateToCustomerSupport' => [
            'type' => 'TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\EscalateToCustomerSupportOptionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'escalateToCustomerSupport'
        ],
        'appealToCustomerSupport' => [
            'type' => 'TheCodeBunny\eBayApi\ResolutionCaseManagement\Types\AppealToCustomerSupportOptionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'appealToCustomerSupport'
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
