<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace TheCodeBunny\eBayApi\Trading\Types;

/**
 *
 * @property \DateTime $StartTime
 * @property \DateTime $EndTime
 * @property \TheCodeBunny\eBayApi\Trading\Types\NotificationDetailsArrayType $NotificationDetailsArray
 * @property \TheCodeBunny\eBayApi\Trading\Types\MarkUpMarkDownHistoryType $MarkUpMarkDownHistory
 * @property \TheCodeBunny\eBayApi\Trading\Types\NotificationStatisticsType $NotificationStatistics
 */
class GetNotificationsUsageResponseType extends \TheCodeBunny\eBayApi\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'StartTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StartTime'
        ],
        'EndTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndTime'
        ],
        'NotificationDetailsArray' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\NotificationDetailsArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NotificationDetailsArray'
        ],
        'MarkUpMarkDownHistory' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\MarkUpMarkDownHistoryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MarkUpMarkDownHistory'
        ],
        'NotificationStatistics' => [
            'type' => 'TheCodeBunny\eBayApi\Trading\Types\NotificationStatisticsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NotificationStatistics'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
