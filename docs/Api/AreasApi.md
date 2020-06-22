# Coucounco\Airkey\Swagger\Client\AreasApi

All URIs are relative to *https://integration.api.airkey.evva.com:443/cloud*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getArea**](AreasApi.md#getArea) | **GET** /v1/areas/{areaId} | Gets a specific area.
[**getAreas**](AreasApi.md#getAreas) | **GET** /v1/areas | Gets all available areas.


# **getArea**
> \Coucounco\Airkey\Swagger\Client\Model\Area getArea($area_id)

Gets a specific area.

Returns a specific area defined in the access control system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\AreasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$area_id = 789; // int | Unique identifier of the area

try {
    $result = $apiInstance->getArea($area_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AreasApi->getArea: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **area_id** | **int**| Unique identifier of the area |

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\Area**](../Model/Area.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAreas**
> \Coucounco\Airkey\Swagger\Client\Model\AreaPagingList getAreas($lock_id, $offset, $limit)

Gets all available areas.

Returns a list of all available areas defined in the access control system, sorted by area id in ascending order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\AreasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lock_id = 789; // int | Filter areas by lock id
$offset = 56; // int | Offset for paging
$limit = 56; // int | Limit of result size

try {
    $result = $apiInstance->getAreas($lock_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AreasApi->getAreas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lock_id** | **int**| Filter areas by lock id | [optional]
 **offset** | **int**| Offset for paging | [optional]
 **limit** | **int**| Limit of result size | [optional]

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\AreaPagingList**](../Model/AreaPagingList.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

