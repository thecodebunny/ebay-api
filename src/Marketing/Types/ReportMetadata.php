<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace TheCodeBunny\eBayApi\Marketing\Types;

/**
 *
 * @property \TheCodeBunny\eBayApi\Marketing\Types\DimensionMetadata[] $dimensionMetadata
 * @property integer $maxNumberOfDimensionsToRequest
 * @property integer $maxNumberOfMetricsToRequest
 * @property \TheCodeBunny\eBayApi\Marketing\Types\MetricMetadata[] $metricMetadata
 * @property \TheCodeBunny\eBayApi\Marketing\Enums\ReportTypeEnum $reportType
 */
class ReportMetadata extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'dimensionMetadata' => [
            'type' => 'TheCodeBunny\eBayApi\Marketing\Types\DimensionMetadata',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'dimensionMetadata'
        ],
        'maxNumberOfDimensionsToRequest' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'maxNumberOfDimensionsToRequest'
        ],
        'maxNumberOfMetricsToRequest' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'maxNumberOfMetricsToRequest'
        ],
        'metricMetadata' => [
            'type' => 'TheCodeBunny\eBayApi\Marketing\Types\MetricMetadata',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'metricMetadata'
        ],
        'reportType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'reportType'
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
