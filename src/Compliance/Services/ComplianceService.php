<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace TheCodeBunny\eBayApi\Compliance\Services;

class ComplianceService extends \TheCodeBunny\eBayApi\Compliance\Services\ComplianceBaseService
{
    const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'GetListingViolationsSummary' => [
            'method' => 'GET',
            'resource' => 'listing_violation_summary',
            'responseClass' => '\TheCodeBunny\eBayApi\Compliance\Types\GetListingViolationsSummaryRestResponse',
            'params' => [
                'compliance_type' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'GetListingViolations' => [
            'method' => 'GET',
            'resource' => 'listing_violation',
            'responseClass' => '\TheCodeBunny\eBayApi\Compliance\Types\GetListingViolationsRestResponse',
            'params' => [
                'limit' => [
                    'valid' => ['integer']
                ],
                'listing_id' => [
                    'valid' => ['string']
                ],
                'offset' => [
                    'valid' => ['integer']
                ],
                'compliance_type' => [
                    'valid' => ['string']
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
     * @param \TheCodeBunny\eBayApi\Compliance\Types\GetListingViolationsSummaryRestRequest $request
     * @return \TheCodeBunny\eBayApi\Compliance\Types\GetListingViolationsSummaryRestResponse
     */
    public function getListingViolationsSummary(\TheCodeBunny\eBayApi\Compliance\Types\GetListingViolationsSummaryRestRequest $request)
    {
        return $this->getListingViolationsSummaryAsync($request)->wait();
    }

    /**
     * @param \TheCodeBunny\eBayApi\Compliance\Types\GetListingViolationsSummaryRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getListingViolationsSummaryAsync(\TheCodeBunny\eBayApi\Compliance\Types\GetListingViolationsSummaryRestRequest $request)
    {
        return $this->callOperationAsync('GetListingViolationsSummary', $request);
    }

    /**
     * @param \TheCodeBunny\eBayApi\Compliance\Types\GetListingViolationsRestRequest $request
     * @return \TheCodeBunny\eBayApi\Compliance\Types\GetListingViolationsRestResponse
     */
    public function getListingViolations(\TheCodeBunny\eBayApi\Compliance\Types\GetListingViolationsRestRequest $request)
    {
        return $this->getListingViolationsAsync($request)->wait();
    }

    /**
     * @param \TheCodeBunny\eBayApi\Compliance\Types\GetListingViolationsRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getListingViolationsAsync(\TheCodeBunny\eBayApi\Compliance\Types\GetListingViolationsRestRequest $request)
    {
        return $this->callOperationAsync('GetListingViolations', $request);
    }
}
