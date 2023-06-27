<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace TheCodeBunny\eBayApi\Product\Types;

/**
 *
 * @property \TheCodeBunny\eBayApi\Product\Types\ProductIdentifier $productIdentifier
 * @property \TheCodeBunny\eBayApi\Product\Types\PaginationInput $paginationInput
 * @property \TheCodeBunny\eBayApi\Product\Types\PropertyValue[] $applicationPropertyFilter
 * @property string[] $dataset
 * @property \TheCodeBunny\eBayApi\Product\Types\CompatibilitySort[] $sortOrder
 * @property \TheCodeBunny\eBayApi\Product\Types\ProductStatus $disabledProductFilter
 * @property string[] $datasetPropertyName
 */
class GetProductCompatibilitiesRequest extends \TheCodeBunny\eBayApi\Product\Types\BaseServiceRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'productIdentifier' => [
            'type' => 'TheCodeBunny\eBayApi\Product\Types\ProductIdentifier',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'productIdentifier'
        ],
        'paginationInput' => [
            'type' => 'TheCodeBunny\eBayApi\Product\Types\PaginationInput',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paginationInput'
        ],
        'applicationPropertyFilter' => [
            'type' => 'TheCodeBunny\eBayApi\Product\Types\PropertyValue',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'applicationPropertyFilter'
        ],
        'dataset' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'dataset'
        ],
        'sortOrder' => [
            'type' => 'TheCodeBunny\eBayApi\Product\Types\CompatibilitySort',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'sortOrder'
        ],
        'disabledProductFilter' => [
            'type' => 'TheCodeBunny\eBayApi\Product\Types\ProductStatus',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'disabledProductFilter'
        ],
        'datasetPropertyName' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'datasetPropertyName'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/marketplacecatalog/v1/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'getProductCompatibilitiesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}