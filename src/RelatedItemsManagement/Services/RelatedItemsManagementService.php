<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Thecodebunny\eBayApi\RelatedItemsManagement\Services;

class RelatedItemsManagementService extends \Thecodebunny\eBayApi\RelatedItemsManagement\Services\RelatedItemsManagementBaseService
{
    const API_VERSION = '1.0.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \Thecodebunny\eBayApi\RelatedItemsManagement\Types\CreateBundlesRequest $request
     * @return \Thecodebunny\eBayApi\RelatedItemsManagement\Types\CreateBundlesResponse
     */
    public function createBundles(\Thecodebunny\eBayApi\RelatedItemsManagement\Types\CreateBundlesRequest $request)
    {
        return $this->createBundlesAsync($request)->wait();
    }

    /**
     * @param \Thecodebunny\eBayApi\RelatedItemsManagement\Types\CreateBundlesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createBundlesAsync(\Thecodebunny\eBayApi\RelatedItemsManagement\Types\CreateBundlesRequest $request)
    {
        return $this->callOperationAsync(
            'createBundles',
            $request,
            '\Thecodebunny\eBayApi\RelatedItemsManagement\Types\CreateBundlesResponse'
        );
    }

    /**
     * @param \Thecodebunny\eBayApi\RelatedItemsManagement\Types\FindBundlesRequest $request
     * @return \Thecodebunny\eBayApi\RelatedItemsManagement\Types\FindBundlesResponse
     */
    public function findBundles(\Thecodebunny\eBayApi\RelatedItemsManagement\Types\FindBundlesRequest $request)
    {
        return $this->findBundlesAsync($request)->wait();
    }

    /**
     * @param \Thecodebunny\eBayApi\RelatedItemsManagement\Types\FindBundlesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findBundlesAsync(\Thecodebunny\eBayApi\RelatedItemsManagement\Types\FindBundlesRequest $request)
    {
        return $this->callOperationAsync(
            'findBundles',
            $request,
            '\Thecodebunny\eBayApi\RelatedItemsManagement\Types\FindBundlesResponse'
        );
    }

    /**
     * @param \Thecodebunny\eBayApi\RelatedItemsManagement\Types\GetBundlesRequest $request
     * @return \Thecodebunny\eBayApi\RelatedItemsManagement\Types\GetBundlesResponse
     */
    public function getBundles(\Thecodebunny\eBayApi\RelatedItemsManagement\Types\GetBundlesRequest $request)
    {
        return $this->getBundlesAsync($request)->wait();
    }

    /**
     * @param \Thecodebunny\eBayApi\RelatedItemsManagement\Types\GetBundlesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBundlesAsync(\Thecodebunny\eBayApi\RelatedItemsManagement\Types\GetBundlesRequest $request)
    {
        return $this->callOperationAsync(
            'getBundles',
            $request,
            '\Thecodebunny\eBayApi\RelatedItemsManagement\Types\GetBundlesResponse'
        );
    }

    /**
     * @param \Thecodebunny\eBayApi\RelatedItemsManagement\Types\UpdateBundlesRequest $request
     * @return \Thecodebunny\eBayApi\RelatedItemsManagement\Types\UpdateBundlesResponse
     */
    public function updateBundles(\Thecodebunny\eBayApi\RelatedItemsManagement\Types\UpdateBundlesRequest $request)
    {
        return $this->updateBundlesAsync($request)->wait();
    }

    /**
     * @param \Thecodebunny\eBayApi\RelatedItemsManagement\Types\UpdateBundlesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateBundlesAsync(\Thecodebunny\eBayApi\RelatedItemsManagement\Types\UpdateBundlesRequest $request)
    {
        return $this->callOperationAsync(
            'updateBundles',
            $request,
            '\Thecodebunny\eBayApi\RelatedItemsManagement\Types\UpdateBundlesResponse'
        );
    }

    /**
     * @param \Thecodebunny\eBayApi\RelatedItemsManagement\Types\UpdateBundleStatusRequest $request
     * @return \Thecodebunny\eBayApi\RelatedItemsManagement\Types\UpdateBundleStatusResponse
     */
    public function updateBundleStatus(\Thecodebunny\eBayApi\RelatedItemsManagement\Types\UpdateBundleStatusRequest $request)
    {
        return $this->updateBundleStatusAsync($request)->wait();
    }

    /**
     * @param \Thecodebunny\eBayApi\RelatedItemsManagement\Types\UpdateBundleStatusRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateBundleStatusAsync(\Thecodebunny\eBayApi\RelatedItemsManagement\Types\UpdateBundleStatusRequest $request)
    {
        return $this->callOperationAsync(
            'updateBundleStatus',
            $request,
            '\Thecodebunny\eBayApi\RelatedItemsManagement\Types\UpdateBundleStatusResponse'
        );
    }

    /**
     * @param \Thecodebunny\eBayApi\RelatedItemsManagement\Types\DeleteBundlesRequest $request
     * @return \Thecodebunny\eBayApi\RelatedItemsManagement\Types\DeleteBundlesResponse
     */
    public function deleteBundles(\Thecodebunny\eBayApi\RelatedItemsManagement\Types\DeleteBundlesRequest $request)
    {
        return $this->deleteBundlesAsync($request)->wait();
    }

    /**
     * @param \Thecodebunny\eBayApi\RelatedItemsManagement\Types\DeleteBundlesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteBundlesAsync(\Thecodebunny\eBayApi\RelatedItemsManagement\Types\DeleteBundlesRequest $request)
    {
        return $this->callOperationAsync(
            'deleteBundles',
            $request,
            '\Thecodebunny\eBayApi\RelatedItemsManagement\Types\DeleteBundlesResponse'
        );
    }

    /**
     * @param \Thecodebunny\eBayApi\RelatedItemsManagement\Types\GetVersionRequest $request
     * @return \Thecodebunny\eBayApi\RelatedItemsManagement\Types\GetVersionResponse
     */
    public function getVersion(\Thecodebunny\eBayApi\RelatedItemsManagement\Types\GetVersionRequest $request)
    {
        return $this->getVersionAsync($request)->wait();
    }

    /**
     * @param \Thecodebunny\eBayApi\RelatedItemsManagement\Types\GetVersionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVersionAsync(\Thecodebunny\eBayApi\RelatedItemsManagement\Types\GetVersionRequest $request)
    {
        return $this->callOperationAsync(
            'getVersion',
            $request,
            '\Thecodebunny\eBayApi\RelatedItemsManagement\Types\GetVersionResponse'
        );
    }
}
