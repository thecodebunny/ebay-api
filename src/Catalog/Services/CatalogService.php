<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Thecodebunny\eBayApi\Catalog\Services;

class CatalogService extends \Thecodebunny\eBayApi\Catalog\Services\CatalogBaseService
{
    const API_VERSION = 'v1_beta';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'GetProduct' => [
            'method' => 'GET',
            'resource' => 'product/{epid}',
            'responseClass' => '\Thecodebunny\eBayApi\Catalog\Types\GetProductRestResponse',
            'params' => [
                'epid' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'Search' => [
            'method' => 'GET',
            'resource' => 'product_summary/search',
            'responseClass' => '\Thecodebunny\eBayApi\Catalog\Types\SearchRestResponse',
            'params' => [
                'offset' => [
                    'valid' => ['string']
                ],
                'limit' => [
                    'valid' => ['string']
                ],
                'fieldgroups' => [
                    'valid' => ['string']
                ],
                'aspect_filter' => [
                    'valid' => ['string']
                ],
                'category_ids' => [
                    'valid' => ['string']
                ],
                'mpn' => [
                    'valid' => ['string']
                ],
                'gtin' => [
                    'valid' => ['string']
                ],
                'q' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'GetProductMetadata' => [
            'method' => 'GET',
            'resource' => 'get_product_metadata',
            'responseClass' => '\Thecodebunny\eBayApi\Catalog\Types\GetProductMetadataRestResponse',
            'params' => [
                'other_applicable_category_ids' => [
                    'valid' => ['string']
                ],
                'primary_category_id' => [
                    'valid' => ['string']
                ],
                'epid' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetProductMetadataForCategories' => [
            'method' => 'GET',
            'resource' => 'get_product_metadata_for_categories',
            'responseClass' => '\Thecodebunny\eBayApi\Catalog\Types\GetProductMetadataForCategoriesRestResponse',
            'params' => [
                'other_applicable_category_ids' => [
                    'valid' => ['string']
                ],
                'primary_category_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetChangeRequest' => [
            'method' => 'GET',
            'resource' => 'change_request/{change_request_id}',
            'responseClass' => '\Thecodebunny\eBayApi\Catalog\Types\GetChangeRequestRestResponse',
            'params' => [
                'change_request_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetChangeRequests' => [
            'method' => 'GET',
            'resource' => 'change_request',
            'responseClass' => '\Thecodebunny\eBayApi\Catalog\Types\GetChangeRequestsRestResponse',
            'params' => [
                'offset' => [
                    'valid' => ['string']
                ],
                'limit' => [
                    'valid' => ['string']
                ],
                'filter' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'CreateChangeRequest' => [
            'method' => 'PUT',
            'resource' => 'change_request',
            'responseClass' => '\Thecodebunny\eBayApi\Catalog\Types\CreateChangeRequestRestResponse',
            'params' => [
            ]
        ]
    ];

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \Thecodebunny\eBayApi\Catalog\Types\GetProductRestRequest $request
     * @return \Thecodebunny\eBayApi\Catalog\Types\GetProductRestResponse
     */
    public function getProduct(\Thecodebunny\eBayApi\Catalog\Types\GetProductRestRequest $request)
    {
        return $this->getProductAsync($request)->wait();
    }

    /**
     * @param \Thecodebunny\eBayApi\Catalog\Types\GetProductRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductAsync(\Thecodebunny\eBayApi\Catalog\Types\GetProductRestRequest $request)
    {
        return $this->callOperationAsync('GetProduct', $request);
    }

    /**
     * @param \Thecodebunny\eBayApi\Catalog\Types\SearchRestRequest $request
     * @return \Thecodebunny\eBayApi\Catalog\Types\SearchRestResponse
     */
    public function search(\Thecodebunny\eBayApi\Catalog\Types\SearchRestRequest $request)
    {
        return $this->searchAsync($request)->wait();
    }

    /**
     * @param \Thecodebunny\eBayApi\Catalog\Types\SearchRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAsync(\Thecodebunny\eBayApi\Catalog\Types\SearchRestRequest $request)
    {
        return $this->callOperationAsync('Search', $request);
    }

    /**
     * @param \Thecodebunny\eBayApi\Catalog\Types\GetProductMetadataRestRequest $request
     * @return \Thecodebunny\eBayApi\Catalog\Types\GetProductMetadataRestResponse
     */
    public function getProductMetadata(\Thecodebunny\eBayApi\Catalog\Types\GetProductMetadataRestRequest $request)
    {
        return $this->getProductMetadataAsync($request)->wait();
    }

    /**
     * @param \Thecodebunny\eBayApi\Catalog\Types\GetProductMetadataRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductMetadataAsync(\Thecodebunny\eBayApi\Catalog\Types\GetProductMetadataRestRequest $request)
    {
        return $this->callOperationAsync('GetProductMetadata', $request);
    }

    /**
     * @param \Thecodebunny\eBayApi\Catalog\Types\GetProductMetadataForCategoriesRestRequest $request
     * @return \Thecodebunny\eBayApi\Catalog\Types\GetProductMetadataForCategoriesRestResponse
     */
    public function getProductMetadataForCategories(\Thecodebunny\eBayApi\Catalog\Types\GetProductMetadataForCategoriesRestRequest $request)
    {
        return $this->getProductMetadataForCategoriesAsync($request)->wait();
    }

    /**
     * @param \Thecodebunny\eBayApi\Catalog\Types\GetProductMetadataForCategoriesRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductMetadataForCategoriesAsync(\Thecodebunny\eBayApi\Catalog\Types\GetProductMetadataForCategoriesRestRequest $request)
    {
        return $this->callOperationAsync('GetProductMetadataForCategories', $request);
    }

    /**
     * @param \Thecodebunny\eBayApi\Catalog\Types\GetChangeRequestRestRequest $request
     * @return \Thecodebunny\eBayApi\Catalog\Types\GetChangeRequestRestResponse
     */
    public function getChangeRequest(\Thecodebunny\eBayApi\Catalog\Types\GetChangeRequestRestRequest $request)
    {
        return $this->getChangeRequestAsync($request)->wait();
    }

    /**
     * @param \Thecodebunny\eBayApi\Catalog\Types\GetChangeRequestRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getChangeRequestAsync(\Thecodebunny\eBayApi\Catalog\Types\GetChangeRequestRestRequest $request)
    {
        return $this->callOperationAsync('GetChangeRequest', $request);
    }

    /**
     * @param \Thecodebunny\eBayApi\Catalog\Types\GetChangeRequestsRestRequest $request
     * @return \Thecodebunny\eBayApi\Catalog\Types\GetChangeRequestsRestResponse
     */
    public function getChangeRequests(\Thecodebunny\eBayApi\Catalog\Types\GetChangeRequestsRestRequest $request)
    {
        return $this->getChangeRequestsAsync($request)->wait();
    }

    /**
     * @param \Thecodebunny\eBayApi\Catalog\Types\GetChangeRequestsRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getChangeRequestsAsync(\Thecodebunny\eBayApi\Catalog\Types\GetChangeRequestsRestRequest $request)
    {
        return $this->callOperationAsync('GetChangeRequests', $request);
    }

    /**
     * @param \Thecodebunny\eBayApi\Catalog\Types\CreateChangeRequestRestRequest $request
     * @return \Thecodebunny\eBayApi\Catalog\Types\CreateChangeRequestRestResponse
     */
    public function createChangeRequest(\Thecodebunny\eBayApi\Catalog\Types\CreateChangeRequestRestRequest $request)
    {
        return $this->createChangeRequestAsync($request)->wait();
    }

    /**
     * @param \Thecodebunny\eBayApi\Catalog\Types\CreateChangeRequestRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createChangeRequestAsync(\Thecodebunny\eBayApi\Catalog\Types\CreateChangeRequestRestRequest $request)
    {
        return $this->callOperationAsync('CreateChangeRequest', $request);
    }
}
