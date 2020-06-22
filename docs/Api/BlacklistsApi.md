# Coucounco\Airkey\Swagger\Client\BlacklistsApi

All URIs are relative to *https://integration.api.airkey.evva.com:443/cloud*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBlacklists**](BlacklistsApi.md#getBlacklists) | **GET** /v1/blacklists | Gets all available blacklist entries.


# **getBlacklists**
> \Coucounco\Airkey\Swagger\Client\Model\BlacklistEntry[] getBlacklists($lock_id, $medium_id)

Gets all available blacklist entries.

Returns a list of all available blacklist entries defined in the access control system, sorted by lock id and medium id in ascending order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\BlacklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lock_id = 789; // int | Filter blacklist entries by lock id
$medium_id = 789; // int | Filter blacklist entries by medium id

try {
    $result = $apiInstance->getBlacklists($lock_id, $medium_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistsApi->getBlacklists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lock_id** | **int**| Filter blacklist entries by lock id | [optional]
 **medium_id** | **int**| Filter blacklist entries by medium id | [optional]

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\BlacklistEntry[]**](../Model/BlacklistEntry.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

