# Swagger\Client\LocksApi

All URIs are relative to *https://integration.api.airkey.evva.com:443/cloud*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLock**](LocksApi.md#getLock) | **GET** /v1/locks/{lockId} | Gets information of a specific lock.
[**getLocks**](LocksApi.md#getLocks) | **GET** /v1/locks | Gets information of all locks.
[**updateLock**](LocksApi.md#updateLock) | **PUT** /v1/locks/{lockId} | Updates the provided lock.


# **getLock**
> \Swagger\Client\Model\Lock getLock($lock_id)

Gets information of a specific lock.

Returns a specific lock with its information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lock_id = 789; // int | Unique identifier of the lock

try {
    $result = $apiInstance->getLock($lock_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->getLock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lock_id** | **int**| Unique identifier of the lock |

### Return type

[**\Swagger\Client\Model\Lock**](../Model/Lock.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocks**
> \Swagger\Client\Model\LockPagingList getLocks($offset, $limit, $calendar_id)

Gets information of all locks.

Returns a list of all locks with their information, sorted by lock id in ascending order. Maintenance tasks of a lock can be determined by using the maintenance-tasks resource (with lockId as query parameter for a single lock).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Offset for paging
$limit = 56; // int | Limit of result size
$calendar_id = 789; // int | Filter locks by holiday calendar id

try {
    $result = $apiInstance->getLocks($offset, $limit, $calendar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->getLocks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Offset for paging | [optional]
 **limit** | **int**| Limit of result size | [optional]
 **calendar_id** | **int**| Filter locks by holiday calendar id | [optional]

### Return type

[**\Swagger\Client\Model\LockPagingList**](../Model/LockPagingList.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLock**
> \Swagger\Client\Model\Lock updateLock($lock_id, $body)

Updates the provided lock.

Updates the provided lock and returns the new version of the lock object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lock_id = 789; // int | Unique identifier of the lock
$body = new \Swagger\Client\Model\Lock(); // \Swagger\Client\Model\Lock | Lock to be updated

try {
    $result = $apiInstance->updateLock($lock_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->updateLock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lock_id** | **int**| Unique identifier of the lock |
 **body** | [**\Swagger\Client\Model\Lock**](../Model/Lock.md)| Lock to be updated |

### Return type

[**\Swagger\Client\Model\Lock**](../Model/Lock.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

