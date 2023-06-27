<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace TheCodeBunny\eBayApi\FileTransfer\Services;

class FileTransferService extends \TheCodeBunny\eBayApi\FileTransfer\Services\FileTransferBaseService
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
     * @param \TheCodeBunny\eBayApi\FileTransfer\Types\UploadFileRequest $request
     * @return \TheCodeBunny\eBayApi\FileTransfer\Types\UploadFileResponse
     */
    public function uploadFile(\TheCodeBunny\eBayApi\FileTransfer\Types\UploadFileRequest $request)
    {
        return $this->uploadFileAsync($request)->wait();
    }

    /**
     * @param \TheCodeBunny\eBayApi\FileTransfer\Types\UploadFileRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadFileAsync(\TheCodeBunny\eBayApi\FileTransfer\Types\UploadFileRequest $request)
    {
        return $this->callOperationAsync(
            'uploadFile',
            $request,
            '\TheCodeBunny\eBayApi\FileTransfer\Types\UploadFileResponse'
        );
    }

    /**
     * @param \TheCodeBunny\eBayApi\FileTransfer\Types\DownloadFileRequest $request
     * @return \TheCodeBunny\eBayApi\FileTransfer\Types\DownloadFileResponse
     */
    public function downloadFile(\TheCodeBunny\eBayApi\FileTransfer\Types\DownloadFileRequest $request)
    {
        return $this->downloadFileAsync($request)->wait();
    }

    /**
     * @param \TheCodeBunny\eBayApi\FileTransfer\Types\DownloadFileRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function downloadFileAsync(\TheCodeBunny\eBayApi\FileTransfer\Types\DownloadFileRequest $request)
    {
        return $this->callOperationAsync(
            'downloadFile',
            $request,
            '\TheCodeBunny\eBayApi\FileTransfer\Types\DownloadFileResponse'
        );
    }
}