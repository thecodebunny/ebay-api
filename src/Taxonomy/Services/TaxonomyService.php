<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Thecodebunny\eBayApi\Taxonomy\Services;

class TaxonomyService extends \Thecodebunny\eBayApi\Taxonomy\Services\TaxonomyBaseService
{
    const API_VERSION = 'v1_beta';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'GetADefaultCategoryTreeId' => [
            'method' => 'GET',
            'resource' => 'get_default_category_tree_id',
            'responseClass' => '\Thecodebunny\eBayApi\Taxonomy\Types\GetADefaultCategoryTreeIdRestResponse',
            'params' => [
                'marketplace_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetACategoryTree' => [
            'method' => 'GET',
            'resource' => 'category_tree/{category_tree_id}',
            'responseClass' => '\Thecodebunny\eBayApi\Taxonomy\Types\GetACategoryTreeRestResponse',
            'params' => [
                'category_tree_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetACategorySubtree' => [
            'method' => 'GET',
            'resource' => 'category_tree/{category_tree_id}/get_category_subtree',
            'responseClass' => '\Thecodebunny\eBayApi\Taxonomy\Types\GetACategorySubtreeRestResponse',
            'params' => [
                'category_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'category_tree_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetSuggestedCategories' => [
            'method' => 'GET',
            'resource' => 'category_tree/{category_tree_id}/get_category_suggestions',
            'responseClass' => '\Thecodebunny\eBayApi\Taxonomy\Types\GetSuggestedCategoriesRestResponse',
            'params' => [
                'category_tree_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'q' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetItemAspectsForCategory' => [
            'method' => 'GET',
            'resource' => 'category_tree/{category_tree_id}/get_item_aspects_for_category',
            'responseClass' => '\Thecodebunny\eBayApi\Taxonomy\Types\GetItemAspectsForCategoryRestResponse',
            'params' => [
                'category_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'category_tree_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
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
     * @param \Thecodebunny\eBayApi\Taxonomy\Types\GetADefaultCategoryTreeIdRestRequest $request
     * @return \Thecodebunny\eBayApi\Taxonomy\Types\GetADefaultCategoryTreeIdRestResponse
     */
    public function getADefaultCategoryTreeId(\Thecodebunny\eBayApi\Taxonomy\Types\GetADefaultCategoryTreeIdRestRequest $request)
    {
        return $this->getADefaultCategoryTreeIdAsync($request)->wait();
    }

    /**
     * @param \Thecodebunny\eBayApi\Taxonomy\Types\GetADefaultCategoryTreeIdRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getADefaultCategoryTreeIdAsync(\Thecodebunny\eBayApi\Taxonomy\Types\GetADefaultCategoryTreeIdRestRequest $request)
    {
        return $this->callOperationAsync('GetADefaultCategoryTreeId', $request);
    }

    /**
     * @param \Thecodebunny\eBayApi\Taxonomy\Types\GetACategoryTreeRestRequest $request
     * @return \Thecodebunny\eBayApi\Taxonomy\Types\GetACategoryTreeRestResponse
     */
    public function getACategoryTree(\Thecodebunny\eBayApi\Taxonomy\Types\GetACategoryTreeRestRequest $request)
    {
        return $this->getACategoryTreeAsync($request)->wait();
    }

    /**
     * @param \Thecodebunny\eBayApi\Taxonomy\Types\GetACategoryTreeRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getACategoryTreeAsync(\Thecodebunny\eBayApi\Taxonomy\Types\GetACategoryTreeRestRequest $request)
    {
        return $this->callOperationAsync('GetACategoryTree', $request);
    }

    /**
     * @param \Thecodebunny\eBayApi\Taxonomy\Types\GetACategorySubtreeRestRequest $request
     * @return \Thecodebunny\eBayApi\Taxonomy\Types\GetACategorySubtreeRestResponse
     */
    public function getACategorySubtree(\Thecodebunny\eBayApi\Taxonomy\Types\GetACategorySubtreeRestRequest $request)
    {
        return $this->getACategorySubtreeAsync($request)->wait();
    }

    /**
     * @param \Thecodebunny\eBayApi\Taxonomy\Types\GetACategorySubtreeRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getACategorySubtreeAsync(\Thecodebunny\eBayApi\Taxonomy\Types\GetACategorySubtreeRestRequest $request)
    {
        return $this->callOperationAsync('GetACategorySubtree', $request);
    }

    /**
     * @param \Thecodebunny\eBayApi\Taxonomy\Types\GetSuggestedCategoriesRestRequest $request
     * @return \Thecodebunny\eBayApi\Taxonomy\Types\GetSuggestedCategoriesRestResponse
     */
    public function getSuggestedCategories(\Thecodebunny\eBayApi\Taxonomy\Types\GetSuggestedCategoriesRestRequest $request)
    {
        return $this->getSuggestedCategoriesAsync($request)->wait();
    }

    /**
     * @param \Thecodebunny\eBayApi\Taxonomy\Types\GetSuggestedCategoriesRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSuggestedCategoriesAsync(\Thecodebunny\eBayApi\Taxonomy\Types\GetSuggestedCategoriesRestRequest $request)
    {
        return $this->callOperationAsync('GetSuggestedCategories', $request);
    }

    /**
     * @param \Thecodebunny\eBayApi\Taxonomy\Types\GetItemAspectsForCategoryRestRequest $request
     * @return \Thecodebunny\eBayApi\Taxonomy\Types\GetItemAspectsForCategoryRestResponse
     */
    public function getItemAspectsForCategory(\Thecodebunny\eBayApi\Taxonomy\Types\GetItemAspectsForCategoryRestRequest $request)
    {
        return $this->getItemAspectsForCategoryAsync($request)->wait();
    }

    /**
     * @param \Thecodebunny\eBayApi\Taxonomy\Types\GetItemAspectsForCategoryRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemAspectsForCategoryAsync(\Thecodebunny\eBayApi\Taxonomy\Types\GetItemAspectsForCategoryRestRequest $request)
    {
        return $this->callOperationAsync('GetItemAspectsForCategory', $request);
    }
}
