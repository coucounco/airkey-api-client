# Coucounco\Airkey\Swagger\Client\MaintenanceTasksApi

All URIs are relative to *https://integration.api.airkey.evva.com:443/cloud*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMaintenanceTasks**](MaintenanceTasksApi.md#getMaintenanceTasks) | **GET** /v1/maintenance-tasks | Gets all maintenance tasks.


# **getMaintenanceTasks**
> \Coucounco\Airkey\Swagger\Client\Model\MaintenanceTaskPagingList getMaintenanceTasks($lock_id, $lock_identifier, $door_name, $alternative_door_name, $offset, $limit)

Gets all maintenance tasks.

Returns a list of all available maintenance tasks of the access control system, sorted by lockId in ascending order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\MaintenanceTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lock_id = 789; // int | Filter maintenance tasks by lock id
$lock_identifier = "lock_identifier_example"; // string | Filter maintenance tasks by lock identifier
$door_name = "door_name_example"; // string | Filter maintenance tasks by door name
$alternative_door_name = "alternative_door_name_example"; // string | Filter maintenance tasks by alternative door name
$offset = 56; // int | Offset for paging
$limit = 56; // int | Limit of result size

try {
    $result = $apiInstance->getMaintenanceTasks($lock_id, $lock_identifier, $door_name, $alternative_door_name, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaintenanceTasksApi->getMaintenanceTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lock_id** | **int**| Filter maintenance tasks by lock id | [optional]
 **lock_identifier** | **string**| Filter maintenance tasks by lock identifier | [optional]
 **door_name** | **string**| Filter maintenance tasks by door name | [optional]
 **alternative_door_name** | **string**| Filter maintenance tasks by alternative door name | [optional]
 **offset** | **int**| Offset for paging | [optional]
 **limit** | **int**| Limit of result size | [optional]

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\MaintenanceTaskPagingList**](../Model/MaintenanceTaskPagingList.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

