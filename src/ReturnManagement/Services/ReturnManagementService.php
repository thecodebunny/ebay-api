<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace TheCodeBunny\eBayApi\ReturnManagement\Services;

class ReturnManagementService extends \TheCodeBunny\eBayApi\ReturnManagement\Services\ReturnManagementBaseService
{
    const API_VERSION = '1.1.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \TheCodeBunny\eBayApi\ReturnManagement\Types\GetVersionRequest $request
     * @return \TheCodeBunny\eBayApi\ReturnManagement\Types\GetVersionResponse
     */
    public function getVersion(\TheCodeBunny\eBayApi\ReturnManagement\Types\GetVersionRequest $request)
    {
        return $this->getVersionAsync($request)->wait();
    }

    /**
     * @param \TheCodeBunny\eBayApi\ReturnManagement\Types\GetVersionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVersionAsync(\TheCodeBunny\eBayApi\ReturnManagement\Types\GetVersionRequest $request)
    {
        return $this->callOperationAsync(
            'getVersion',
            $request,
            '\TheCodeBunny\eBayApi\ReturnManagement\Types\GetVersionResponse'
        );
    }

    /**
     * @param \TheCodeBunny\eBayApi\ReturnManagement\Types\GetUserReturnsRequest $request
     * @return \TheCodeBunny\eBayApi\ReturnManagement\Types\GetUserReturnsResponse
     */
    public function getUserReturns(\TheCodeBunny\eBayApi\ReturnManagement\Types\GetUserReturnsRequest $request)
    {
        return $this->getUserReturnsAsync($request)->wait();
    }

    /**
     * @param \TheCodeBunny\eBayApi\ReturnManagement\Types\GetUserReturnsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUserReturnsAsync(\TheCodeBunny\eBayApi\ReturnManagement\Types\GetUserReturnsRequest $request)
    {
        return $this->callOperationAsync(
            'getUserReturns',
            $request,
            '\TheCodeBunny\eBayApi\ReturnManagement\Types\GetUserReturnsResponse'
        );
    }

    /**
     * @param \TheCodeBunny\eBayApi\ReturnManagement\Types\GetReturnDetailRequest $request
     * @return \TheCodeBunny\eBayApi\ReturnManagement\Types\GetReturnDetailResponse
     */
    public function getReturnDetail(\TheCodeBunny\eBayApi\ReturnManagement\Types\GetReturnDetailRequest $request)
    {
        return $this->getReturnDetailAsync($request)->wait();
    }

    /**
     * @param \TheCodeBunny\eBayApi\ReturnManagement\Types\GetReturnDetailRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReturnDetailAsync(\TheCodeBunny\eBayApi\ReturnManagement\Types\GetReturnDetailRequest $request)
    {
        return $this->callOperationAsync(
            'getReturnDetail',
            $request,
            '\TheCodeBunny\eBayApi\ReturnManagement\Types\GetReturnDetailResponse'
        );
    }

    /**
     * @param \TheCodeBunny\eBayApi\ReturnManagement\Types\GetActivityOptionsRequest $request
     * @return \TheCodeBunny\eBayApi\ReturnManagement\Types\GetActivityOptionsResponse
     */
    public function getActivityOptions(\TheCodeBunny\eBayApi\ReturnManagement\Types\GetActivityOptionsRequest $request)
    {
        return $this->getActivityOptionsAsync($request)->wait();
    }

    /**
     * @param \TheCodeBunny\eBayApi\ReturnManagement\Types\GetActivityOptionsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getActivityOptionsAsync(\TheCodeBunny\eBayApi\ReturnManagement\Types\GetActivityOptionsRequest $request)
    {
        return $this->callOperationAsync(
            'getActivityOptions',
            $request,
            '\TheCodeBunny\eBayApi\ReturnManagement\Types\GetActivityOptionsResponse'
        );
    }

    /**
     * @param \TheCodeBunny\eBayApi\ReturnManagement\Types\IssueRefundRequest $request
     * @return \TheCodeBunny\eBayApi\ReturnManagement\Types\IssueRefundResponse
     */
    public function issueRefund(\TheCodeBunny\eBayApi\ReturnManagement\Types\IssueRefundRequest $request)
    {
        return $this->issueRefundAsync($request)->wait();
    }

    /**
     * @param \TheCodeBunny\eBayApi\ReturnManagement\Types\IssueRefundRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function issueRefundAsync(\TheCodeBunny\eBayApi\ReturnManagement\Types\IssueRefundRequest $request)
    {
        return $this->callOperationAsync(
            'issueRefund',
            $request,
            '\TheCodeBunny\eBayApi\ReturnManagement\Types\IssueRefundResponse'
        );
    }

    /**
     * @param \TheCodeBunny\eBayApi\ReturnManagement\Types\ProvideSellerInfoRequest $request
     * @return \TheCodeBunny\eBayApi\ReturnManagement\Types\ProvideSellerInfoResponse
     */
    public function provideSellerInfo(\TheCodeBunny\eBayApi\ReturnManagement\Types\ProvideSellerInfoRequest $request)
    {
        return $this->provideSellerInfoAsync($request)->wait();
    }

    /**
     * @param \TheCodeBunny\eBayApi\ReturnManagement\Types\ProvideSellerInfoRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function provideSellerInfoAsync(\TheCodeBunny\eBayApi\ReturnManagement\Types\ProvideSellerInfoRequest $request)
    {
        return $this->callOperationAsync(
            'provideSellerInfo',
            $request,
            '\TheCodeBunny\eBayApi\ReturnManagement\Types\ProvideSellerInfoResponse'
        );
    }

    /**
     * @param \TheCodeBunny\eBayApi\ReturnManagement\Types\GetReturnMetadataRequest $request
     * @return \TheCodeBunny\eBayApi\ReturnManagement\Types\GetReturnMetadataResponse
     */
    public function getReturnMetadata(\TheCodeBunny\eBayApi\ReturnManagement\Types\GetReturnMetadataRequest $request)
    {
        return $this->getReturnMetadataAsync($request)->wait();
    }

    /**
     * @param \TheCodeBunny\eBayApi\ReturnManagement\Types\GetReturnMetadataRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReturnMetadataAsync(\TheCodeBunny\eBayApi\ReturnManagement\Types\GetReturnMetadataRequest $request)
    {
        return $this->callOperationAsync(
            'getReturnMetadata',
            $request,
            '\TheCodeBunny\eBayApi\ReturnManagement\Types\GetReturnMetadataResponse'
        );
    }

    /**
     * @param \TheCodeBunny\eBayApi\ReturnManagement\Types\ProvideTrackingInfoRequest $request
     * @return \TheCodeBunny\eBayApi\ReturnManagement\Types\ProvideTrackingInfoResponse
     */
    public function provideTrackingInfo(\TheCodeBunny\eBayApi\ReturnManagement\Types\ProvideTrackingInfoRequest $request)
    {
        return $this->provideTrackingInfoAsync($request)->wait();
    }

    /**
     * @param \TheCodeBunny\eBayApi\ReturnManagement\Types\ProvideTrackingInfoRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function provideTrackingInfoAsync(\TheCodeBunny\eBayApi\ReturnManagement\Types\ProvideTrackingInfoRequest $request)
    {
        return $this->callOperationAsync(
            'provideTrackingInfo',
            $request,
            '\TheCodeBunny\eBayApi\ReturnManagement\Types\ProvideTrackingInfoResponse'
        );
    }

    /**
     * @param \TheCodeBunny\eBayApi\ReturnManagement\Types\SetItemAsReceivedRequest $request
     * @return \TheCodeBunny\eBayApi\ReturnManagement\Types\SetItemAsReceivedResponse
     */
    public function setItemAsReceived(\TheCodeBunny\eBayApi\ReturnManagement\Types\SetItemAsReceivedRequest $request)
    {
        return $this->setItemAsReceivedAsync($request)->wait();
    }

    /**
     * @param \TheCodeBunny\eBayApi\ReturnManagement\Types\SetItemAsReceivedRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setItemAsReceivedAsync(\TheCodeBunny\eBayApi\ReturnManagement\Types\SetItemAsReceivedRequest $request)
    {
        return $this->callOperationAsync(
            'setItemAsReceived',
            $request,
            '\TheCodeBunny\eBayApi\ReturnManagement\Types\SetItemAsReceivedResponse'
        );
    }
}
