<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace TheCodeBunny\eBayApi\MerchantData\Types;

/**
 *
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\ActiveInventoryReportResponseType $ActiveInventoryReport
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\AddFixedPriceItemResponseType[] $AddFixedPriceItemResponse
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\AddItemResponseType[] $AddItemResponse
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\EndFixedPriceItemResponseType[] $EndFixedPriceItemResponse
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\EndItemResponseType[] $EndItemResponse
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\FeeSettlementReportResponseType $FeeSettlementReport
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\OrderAckResponseType[] $OrderAckResponse
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\RelistFixedPriceItemResponseType[] $RelistFixedPriceItemResponse
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\RelistItemResponseType[] $RelistItemResponse
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\ReviseFixedPriceItemResponseType[] $ReviseFixedPriceItemResponse
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\ReviseInventoryStatusResponseType[] $ReviseInventoryStatusResponse
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\ReviseItemResponseType[] $ReviseItemResponse
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\SetShipmentTrackingInfoResponseType[] $SetShipmentTrackingInfoResponse
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\SoldReportResponseType $SoldReport
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\UploadSiteHostedPicturesResponseType[] $UploadSiteHostedPicturesResponse
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\VerifyAddFixedPriceItemResponseType[] $VerifyAddFixedPriceItemResponse
 * @property \TheCodeBunny\eBayApi\MerchantData\Types\VerifyAddItemResponseType[] $VerifyAddItemResponse
 */
class BulkDataExchangeResponsesType extends \TheCodeBunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ActiveInventoryReport' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\ActiveInventoryReportResponseType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ActiveInventoryReport'
        ],
        'AddFixedPriceItemResponse' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\AddFixedPriceItemResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'AddFixedPriceItemResponse'
        ],
        'AddItemResponse' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\AddItemResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'AddItemResponse'
        ],
        'EndFixedPriceItemResponse' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\EndFixedPriceItemResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'EndFixedPriceItemResponse'
        ],
        'EndItemResponse' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\EndItemResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'EndItemResponse'
        ],
        'FeeSettlementReport' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\FeeSettlementReportResponseType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeeSettlementReport'
        ],
        'OrderAckResponse' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\OrderAckResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'OrderAckResponse'
        ],
        'RelistFixedPriceItemResponse' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\RelistFixedPriceItemResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'RelistFixedPriceItemResponse'
        ],
        'RelistItemResponse' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\RelistItemResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'RelistItemResponse'
        ],
        'ReviseFixedPriceItemResponse' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\ReviseFixedPriceItemResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ReviseFixedPriceItemResponse'
        ],
        'ReviseInventoryStatusResponse' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\ReviseInventoryStatusResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ReviseInventoryStatusResponse'
        ],
        'ReviseItemResponse' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\ReviseItemResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ReviseItemResponse'
        ],
        'SetShipmentTrackingInfoResponse' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\SetShipmentTrackingInfoResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'SetShipmentTrackingInfoResponse'
        ],
        'SoldReport' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\SoldReportResponseType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SoldReport'
        ],
        'UploadSiteHostedPicturesResponse' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\UploadSiteHostedPicturesResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'UploadSiteHostedPicturesResponse'
        ],
        'VerifyAddFixedPriceItemResponse' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\VerifyAddFixedPriceItemResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'VerifyAddFixedPriceItemResponse'
        ],
        'VerifyAddItemResponse' => [
            'type' => 'TheCodeBunny\eBayApi\MerchantData\Types\VerifyAddItemResponseType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'VerifyAddItemResponse'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'BulkDataExchangeResponses';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}