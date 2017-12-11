# iPOS\DefaultApi

All URIs are relative to *https://fm.macpartner.dk/fmr/rest/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDelivery**](DefaultApi.md#createDelivery) | **POST** /record/{strService}/api_SPY_Varemodtagelse | Creates a new Delivery
[**createDeliveryLine**](DefaultApi.md#createDeliveryLine) | **POST** /record/{strService}/api_SPY_Varemodtagelse_linie | Creates a new Delivery Line
[**createProduct**](DefaultApi.md#createProduct) | **POST** /record/{strService}/api_SPY_varer | Creates a new product
[**createProductType**](DefaultApi.md#createProductType) | **POST** /record/{strService}/api_SPY_varegrupper | Creates a new product type
[**findProductByEAN**](DefaultApi.md#findProductByEAN) | **POST** /find/{strService}/api_SPY_varer | finds a product based on its EAN code
[**findProductType**](DefaultApi.md#findProductType) | **POST** /find/{strService}/api_SPY_varegrupper | finds a product type based on its Id
[**findSalesReports**](DefaultApi.md#findSalesReports) | **POST** /find/{strService}/api_SPY_Sale | finds sales reports
[**getAllProductTypes**](DefaultApi.md#getAllProductTypes) | **GET** /record/{strService}/api_SPY_varegrupper | retrieves all product types
[**getAllProducts**](DefaultApi.md#getAllProducts) | **GET** /record/{strService}/api_SPY_varer | retrieves all products
[**getDataToken**](DefaultApi.md#getDataToken) | **POST** /auth/{strService} | gets an authentication token (valid for 15 minutes)
[**getProduct**](DefaultApi.md#getProduct) | **GET** /record/{strService}/api_SPY_varer/{iRecordID} | retrieves a product
[**getSaleReport**](DefaultApi.md#getSaleReport) | **GET** /record/{strService}/api_SPY_Sale/{iRecordID} | retrieves a Sales Report line
[**markSalesReportAsRead**](DefaultApi.md#markSalesReportAsRead) | **PUT** /record/{strService}/api_SPY_Sale/{iRecordID} | Marks a Sales Report line as Read
[**updateProduct**](DefaultApi.md#updateProduct) | **PUT** /record/{strService}/api_SPY_varer/{iRecordID} | Updates a product


# **createDelivery**
> \iPOS\Model\CreateResponse createDelivery($strService, $data)

Creates a new Delivery

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = iPOS\Configuration::getDefaultConfiguration()->setApiKey('FM-data-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iPOS\Configuration::getDefaultConfiguration()->setApiKeyPrefix('FM-data-token', 'Bearer');

$apiInstance = new iPOS\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strService = "strService_example"; // string | Target Service in FileMaker
$data = new \iPOS\Model\DeliveryObject(); // \iPOS\Model\DeliveryObject | Record to be created

try {
    $result = $apiInstance->createDelivery($strService, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createDelivery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strService** | **string**| Target Service in FileMaker |
 **data** | [**\iPOS\Model\DeliveryObject**](../Model/DeliveryObject.md)| Record to be created | [optional]

### Return type

[**\iPOS\Model\CreateResponse**](../Model/CreateResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDeliveryLine**
> \iPOS\Model\CreateResponse createDeliveryLine($strService, $data)

Creates a new Delivery Line

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = iPOS\Configuration::getDefaultConfiguration()->setApiKey('FM-data-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iPOS\Configuration::getDefaultConfiguration()->setApiKeyPrefix('FM-data-token', 'Bearer');

$apiInstance = new iPOS\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strService = "strService_example"; // string | Target Service in FileMaker
$data = new \iPOS\Model\DeliveryLineObject(); // \iPOS\Model\DeliveryLineObject | Record to be created

try {
    $result = $apiInstance->createDeliveryLine($strService, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createDeliveryLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strService** | **string**| Target Service in FileMaker |
 **data** | [**\iPOS\Model\DeliveryLineObject**](../Model/DeliveryLineObject.md)| Record to be created | [optional]

### Return type

[**\iPOS\Model\CreateResponse**](../Model/CreateResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProduct**
> \iPOS\Model\CreateResponse createProduct($strService, $data)

Creates a new product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = iPOS\Configuration::getDefaultConfiguration()->setApiKey('FM-data-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iPOS\Configuration::getDefaultConfiguration()->setApiKeyPrefix('FM-data-token', 'Bearer');

$apiInstance = new iPOS\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strService = "strService_example"; // string | Target Service in FileMaker
$data = new \iPOS\Model\ProductObject(); // \iPOS\Model\ProductObject | Record to be created

try {
    $result = $apiInstance->createProduct($strService, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strService** | **string**| Target Service in FileMaker |
 **data** | [**\iPOS\Model\ProductObject**](../Model/ProductObject.md)| Record to be created | [optional]

### Return type

[**\iPOS\Model\CreateResponse**](../Model/CreateResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProductType**
> \iPOS\Model\CreateResponse createProductType($strService, $data)

Creates a new product type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = iPOS\Configuration::getDefaultConfiguration()->setApiKey('FM-data-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iPOS\Configuration::getDefaultConfiguration()->setApiKeyPrefix('FM-data-token', 'Bearer');

$apiInstance = new iPOS\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strService = "strService_example"; // string | Target Service in FileMaker
$data = new \iPOS\Model\ProductTypeObject(); // \iPOS\Model\ProductTypeObject | Record to be created

try {
    $result = $apiInstance->createProductType($strService, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createProductType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strService** | **string**| Target Service in FileMaker |
 **data** | [**\iPOS\Model\ProductTypeObject**](../Model/ProductTypeObject.md)| Record to be created | [optional]

### Return type

[**\iPOS\Model\CreateResponse**](../Model/CreateResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProductByEAN**
> \iPOS\Model\ProductSearchResponseObject findProductByEAN($strService, $data)

finds a product based on its EAN code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = iPOS\Configuration::getDefaultConfiguration()->setApiKey('FM-data-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iPOS\Configuration::getDefaultConfiguration()->setApiKeyPrefix('FM-data-token', 'Bearer');

$apiInstance = new iPOS\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strService = "strService_example"; // string | Target Service in FileMaker
$data = new \iPOS\Model\ProductSearchObject(); // \iPOS\Model\ProductSearchObject | Search data

try {
    $result = $apiInstance->findProductByEAN($strService, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->findProductByEAN: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strService** | **string**| Target Service in FileMaker |
 **data** | [**\iPOS\Model\ProductSearchObject**](../Model/ProductSearchObject.md)| Search data | [optional]

### Return type

[**\iPOS\Model\ProductSearchResponseObject**](../Model/ProductSearchResponseObject.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProductType**
> \iPOS\Model\ProductTypeSearchResponseObject findProductType($strService, $data)

finds a product type based on its Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = iPOS\Configuration::getDefaultConfiguration()->setApiKey('FM-data-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iPOS\Configuration::getDefaultConfiguration()->setApiKeyPrefix('FM-data-token', 'Bearer');

$apiInstance = new iPOS\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strService = "strService_example"; // string | Target Service in FileMaker
$data = new \iPOS\Model\ProductTypeSearchObject(); // \iPOS\Model\ProductTypeSearchObject | Search data

try {
    $result = $apiInstance->findProductType($strService, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->findProductType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strService** | **string**| Target Service in FileMaker |
 **data** | [**\iPOS\Model\ProductTypeSearchObject**](../Model/ProductTypeSearchObject.md)| Search data | [optional]

### Return type

[**\iPOS\Model\ProductTypeSearchResponseObject**](../Model/ProductTypeSearchResponseObject.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findSalesReports**
> \iPOS\Model\SalesReportSearchResponseObject findSalesReports($strService, $data)

finds sales reports

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = iPOS\Configuration::getDefaultConfiguration()->setApiKey('FM-data-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iPOS\Configuration::getDefaultConfiguration()->setApiKeyPrefix('FM-data-token', 'Bearer');

$apiInstance = new iPOS\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strService = "strService_example"; // string | Target Service in FileMaker
$data = new \iPOS\Model\SalesReportSearchObject(); // \iPOS\Model\SalesReportSearchObject | Search data

try {
    $result = $apiInstance->findSalesReports($strService, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->findSalesReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strService** | **string**| Target Service in FileMaker |
 **data** | [**\iPOS\Model\SalesReportSearchObject**](../Model/SalesReportSearchObject.md)| Search data | [optional]

### Return type

[**\iPOS\Model\SalesReportSearchResponseObject**](../Model/SalesReportSearchResponseObject.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllProductTypes**
> \iPOS\Model\ProductTypeSearchResponseObject getAllProductTypes($strService, $offset, $range)

retrieves all product types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = iPOS\Configuration::getDefaultConfiguration()->setApiKey('FM-data-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iPOS\Configuration::getDefaultConfiguration()->setApiKeyPrefix('FM-data-token', 'Bearer');

$apiInstance = new iPOS\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strService = "strService_example"; // string | Target Service in FileMaker
$offset = "offset_example"; // string | 
$range = "range_example"; // string | 

try {
    $result = $apiInstance->getAllProductTypes($strService, $offset, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAllProductTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strService** | **string**| Target Service in FileMaker |
 **offset** | **string**|  | [optional]
 **range** | **string**|  | [optional]

### Return type

[**\iPOS\Model\ProductTypeSearchResponseObject**](../Model/ProductTypeSearchResponseObject.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllProducts**
> \iPOS\Model\ProductSearchResponseObject getAllProducts($strService, $offset, $range)

retrieves all products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = iPOS\Configuration::getDefaultConfiguration()->setApiKey('FM-data-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iPOS\Configuration::getDefaultConfiguration()->setApiKeyPrefix('FM-data-token', 'Bearer');

$apiInstance = new iPOS\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strService = "strService_example"; // string | Target Service in FileMaker
$offset = "offset_example"; // string | 
$range = "range_example"; // string | 

try {
    $result = $apiInstance->getAllProducts($strService, $offset, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAllProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strService** | **string**| Target Service in FileMaker |
 **offset** | **string**|  | [optional]
 **range** | **string**|  | [optional]

### Return type

[**\iPOS\Model\ProductSearchResponseObject**](../Model/ProductSearchResponseObject.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDataToken**
> \iPOS\Model\AuthenticationResponseObject getDataToken($strService, $data)

gets an authentication token (valid for 15 minutes)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new iPOS\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$strService = "strService_example"; // string | Target Service in FileMaker
$data = new \iPOS\Model\AuthenticationObject(); // \iPOS\Model\AuthenticationObject | Connecting data

try {
    $result = $apiInstance->getDataToken($strService, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getDataToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strService** | **string**| Target Service in FileMaker |
 **data** | [**\iPOS\Model\AuthenticationObject**](../Model/AuthenticationObject.md)| Connecting data | [optional]

### Return type

[**\iPOS\Model\AuthenticationResponseObject**](../Model/AuthenticationResponseObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProduct**
> \iPOS\Model\ProductSearchResponseObject getProduct($strService, $iRecordID)

retrieves a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = iPOS\Configuration::getDefaultConfiguration()->setApiKey('FM-data-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iPOS\Configuration::getDefaultConfiguration()->setApiKeyPrefix('FM-data-token', 'Bearer');

$apiInstance = new iPOS\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strService = "strService_example"; // string | Target Service in FileMaker
$iRecordID = 56; // int | FileMaker record id

try {
    $result = $apiInstance->getProduct($strService, $iRecordID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strService** | **string**| Target Service in FileMaker |
 **iRecordID** | **int**| FileMaker record id |

### Return type

[**\iPOS\Model\ProductSearchResponseObject**](../Model/ProductSearchResponseObject.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSaleReport**
> \iPOS\Model\SalesReportSearchResponseObject getSaleReport($strService, $iRecordID)

retrieves a Sales Report line

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = iPOS\Configuration::getDefaultConfiguration()->setApiKey('FM-data-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iPOS\Configuration::getDefaultConfiguration()->setApiKeyPrefix('FM-data-token', 'Bearer');

$apiInstance = new iPOS\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strService = "strService_example"; // string | Target Service in FileMaker
$iRecordID = 56; // int | FileMaker record id

try {
    $result = $apiInstance->getSaleReport($strService, $iRecordID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSaleReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strService** | **string**| Target Service in FileMaker |
 **iRecordID** | **int**| FileMaker record id |

### Return type

[**\iPOS\Model\SalesReportSearchResponseObject**](../Model/SalesReportSearchResponseObject.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markSalesReportAsRead**
> \iPOS\Model\ResponseModel markSalesReportAsRead($strService, $iRecordID, $data)

Marks a Sales Report line as Read

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = iPOS\Configuration::getDefaultConfiguration()->setApiKey('FM-data-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iPOS\Configuration::getDefaultConfiguration()->setApiKeyPrefix('FM-data-token', 'Bearer');

$apiInstance = new iPOS\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strService = "strService_example"; // string | Target Service in FileMaker
$iRecordID = 56; // int | FileMaker record id
$data = new \iPOS\Model\SalesReportObject(); // \iPOS\Model\SalesReportObject | 

try {
    $result = $apiInstance->markSalesReportAsRead($strService, $iRecordID, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->markSalesReportAsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strService** | **string**| Target Service in FileMaker |
 **iRecordID** | **int**| FileMaker record id |
 **data** | [**\iPOS\Model\SalesReportObject**](../Model/SalesReportObject.md)|  | [optional]

### Return type

[**\iPOS\Model\ResponseModel**](../Model/ResponseModel.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProduct**
> \iPOS\Model\ResponseModel updateProduct($strService, $iRecordID, $data)

Updates a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = iPOS\Configuration::getDefaultConfiguration()->setApiKey('FM-data-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iPOS\Configuration::getDefaultConfiguration()->setApiKeyPrefix('FM-data-token', 'Bearer');

$apiInstance = new iPOS\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strService = "strService_example"; // string | Target Service in FileMaker
$iRecordID = 56; // int | FileMaker record id
$data = new \iPOS\Model\ProductObject(); // \iPOS\Model\ProductObject | 

try {
    $result = $apiInstance->updateProduct($strService, $iRecordID, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strService** | **string**| Target Service in FileMaker |
 **iRecordID** | **int**| FileMaker record id |
 **data** | [**\iPOS\Model\ProductObject**](../Model/ProductObject.md)|  | [optional]

### Return type

[**\iPOS\Model\ResponseModel**](../Model/ResponseModel.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

