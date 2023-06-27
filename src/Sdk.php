<?php
namespace TheCodeBunny\eBayApi;

/**
 * Builds TheCodeBunny\eBayApi services based on passed configuration options.
 *
 * @method \TheCodeBunny\eBayApi\Account\Services\AccountService createAccount(array $args = [])
 * @method \TheCodeBunny\eBayApi\Analytics\Services\AnalyticsService createAnalytics(array $args = [])
 * @method \TheCodeBunny\eBayApi\Browse\Services\BrowseService createBrowse(array $args = [])
 * @method \TheCodeBunny\eBayApi\BulkDataExchange\Services\BulkDataExchangeService createBulkDataExchange(array $args = [])
 * @method \TheCodeBunny\eBayApi\BusinessPoliciesManagement\Services\BusinessPoliciesManagementService createBusinessPoliciesManagement(array $args = [])
 * @method \TheCodeBunny\eBayApi\Feedback\Services\FeedbackService createFeedback(array $args = [])
 * @method \TheCodeBunny\eBayApi\FileTransfer\Services\FileTransferService createFileTransfer(array $args = [])
 * @method \TheCodeBunny\eBayApi\Finding\Services\FindingService createFinding(array $args = [])
 * @method \TheCodeBunny\eBayApi\Fulfillment\Services\FulfillmentService createFulfillment(array $args = [])
 * @method \TheCodeBunny\eBayApi\HalfFinding\Services\HalfFindingService createHalfFinding(array $args = [])
 * @method \TheCodeBunny\eBayApi\Inventory\Services\InventoryService createInventory(array $args = [])
 * @method \TheCodeBunny\eBayApi\Marketing\Services\MarketingService createMarketing(array $args = [])
 * @method \TheCodeBunny\eBayApi\Merchandising\Services\MerchandisingService createMerchandising(array $args = [])
 * @method \TheCodeBunny\eBayApi\Metadata\Services\MetadataService createMetadata(array $args = [])
 * @method \TheCodeBunny\eBayApi\Order\Services\OrderService createOrder(array $args = [])
 * @method \TheCodeBunny\eBayApi\PostOrder\Services\PostOrderService createPostOrder(array $args = [])
 * @method \TheCodeBunny\eBayApi\Product\Services\ProductService createProduct(array $args = [])
 * @method \TheCodeBunny\eBayApi\ProductMetadata\Services\ProductMetadataService createProductMetadata(array $args = [])
 * @method \TheCodeBunny\eBayApi\RelatedItemsManagement\Services\RelatedItemsManagementService createRelatedItemsManagement(array $args = [])
 * @method \TheCodeBunny\eBayApi\ResolutionCaseManagement\Services\ResolutionCaseManagementService createResolutionCaseManagement(array $args = [])
 * @method \TheCodeBunny\eBayApi\ReturnManagement\Services\ReturnManagementService createReturnManagement(array $args = [])
 * @method \TheCodeBunny\eBayApi\Shopping\Services\ShoppingService createShopping(array $args = [])
 * @method \TheCodeBunny\eBayApi\Trading\Services\TradingService createTrading(array $args = [])
 */
class Sdk
{
    const VERSION = '18.0.0';

    /**
     * @var bool Controls if the SDK should enforce strict types
     * when values are assigned to property classes.
     */
    public static $STRICT_PROPERTY_TYPES = true;

    /**
     * @var array Configuration options for all services.
     */
    private $config;

    /**
     * @param array $config Configuration option values for all services.
     */
    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    /**
     * @param string $name The method name.
     * @param array $args Arguments that will be passed to the method.
     *
     * @return \TheCodeBunny\eBayApi\Services\BaseService
     * @throws \BadMethodCallException
     */
    public function __call($name, array $args)
    {
        if (strpos($name, 'create') === 0) {
            return $this->createService(
                substr($name, 6),
                isset($args[0]) ? $args[0] : []
            );
        }

        throw new \BadMethodCallException("Unknown method: {$name}.");
    }

    /**
     * Create a service object by namespace. Service is configured using array of options.
     *
     * @param string $namespace Service namespace (e.g. Finding, Trading).
     * @param array  $config Configuration options for the service.
     *
     * @return \TheCodeBunny\eBayApi\Services\BaseService
     **/
    public function createService($namespace, array $config = [])
    {
        $configuration = $this->config;

        if (isset($this->config[$namespace])) {
            $configuration = arrayMergeDeep($configuration, $this->config[$namespace]);
        }

        $configuration = arrayMergeDeep($configuration, $config);

        $service = "DTS\\eBaySDK\\{$namespace}\\Services\\{$namespace}Service";

        return new $service($configuration);
    }
}
