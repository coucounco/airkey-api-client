# Swagger\Client\AuthorizationsApi

All URIs are relative to *https://integration.api.airkey.evva.com:443/cloud*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrFetchSimpleAuthorization**](AuthorizationsApi.md#createOrFetchSimpleAuthorization) | **POST** /v1/authorizations/simple | Creates simple authorizations
[**createOrUpdateAuthorizationsWithAdvancedOptions**](AuthorizationsApi.md#createOrUpdateAuthorizationsWithAdvancedOptions) | **POST** /v1/authorizations/advanced | Creates new and updates existing authorizations (advanced version - can be used to create/update all types of authorizations).
[**deleteAuthorization**](AuthorizationsApi.md#deleteAuthorization) | **PUT** /v1/authorizations | Requests deletion of provided authorizations.
[**getAuthorization**](AuthorizationsApi.md#getAuthorization) | **GET** /v1/authorizations/{authorizationId} | Gets a specific authorization.
[**getAuthorizations**](AuthorizationsApi.md#getAuthorizations) | **GET** /v1/authorizations | Gets all authorizations for locks and areas.


# **createOrFetchSimpleAuthorization**
> \Swagger\Client\Model\Authorization createOrFetchSimpleAuthorization($body)

Creates simple authorizations

Creates an authorization of type 'SIMPLE' (same as using SimpleAuthorizationInfo in POST /authorizations/advanced). If an authorization can’t be created (e.g. already has 8 authorizations), an error will be returned. Be advised that this is only a simplified interface for fulfilling basic authorization needs, a 'SIMPLE' authorization will actually consist of up to 3 AuthorizationInfo elements combined (of type one-day and permanent) within an authorization -> authorization of type 'SIMPLE' will never be part of a response. <br/>The dates and timestamps for the authorizations should always be provided regardless of the time zone. <br/>Either lockId or areaId needs to be set for an authorization. It's not possible to set both IDs at the same time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuthorizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SimpleAuthorizationCreate(); // \Swagger\Client\Model\SimpleAuthorizationCreate | Authorization to be created

try {
    $result = $apiInstance->createOrFetchSimpleAuthorization($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationsApi->createOrFetchSimpleAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SimpleAuthorizationCreate**](../Model/SimpleAuthorizationCreate.md)| Authorization to be created |

### Return type

[**\Swagger\Client\Model\Authorization**](../Model/Authorization.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrUpdateAuthorizationsWithAdvancedOptions**
> \Swagger\Client\Model\Authorization[] createOrUpdateAuthorizationsWithAdvancedOptions($body)

Creates new and updates existing authorizations (advanced version - can be used to create/update all types of authorizations).

Creates the provided authorizations to be added in the access control system, updates the provided existing authorizations and returns a list of the new authorization object versions. <br/> The dates and timestamps for the authorizations should always be provided regardless of the time zone. <br/>Create authorization: Either lockId or areaId needs to be set for an authorization. It's not possible to set both IDs at the same time. <br/>Update authorization: It's not possible to change a lockId/areaId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuthorizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AuthorizationChange(); // \Swagger\Client\Model\AuthorizationChange | Authorizations to be created or updated

try {
    $result = $apiInstance->createOrUpdateAuthorizationsWithAdvancedOptions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationsApi->createOrUpdateAuthorizationsWithAdvancedOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AuthorizationChange**](../Model/AuthorizationChange.md)| Authorizations to be created or updated |

### Return type

[**\Swagger\Client\Model\Authorization[]**](../Model/Authorization.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAuthorization**
> \Swagger\Client\Model\Authorization[] deleteAuthorization($body)

Requests deletion of provided authorizations.

Requests and marks provided authorizations for deletion and returns a list of the new authorization object versions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuthorizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\AuthorizationDelete()); // \Swagger\Client\Model\AuthorizationDelete[] | Authorizations to be deleted

try {
    $result = $apiInstance->deleteAuthorization($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationsApi->deleteAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AuthorizationDelete[]**](../Model/AuthorizationDelete.md)| Authorizations to be deleted |

### Return type

[**\Swagger\Client\Model\Authorization[]**](../Model/Authorization.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthorization**
> \Swagger\Client\Model\Authorization getAuthorization($authorization_id)

Gets a specific authorization.

Returns a specific authorization for locks and areas defined in the access control system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuthorizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization_id = 789; // int | Unique identifier of the authorization

try {
    $result = $apiInstance->getAuthorization($authorization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationsApi->getAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization_id** | **int**| Unique identifier of the authorization |

### Return type

[**\Swagger\Client\Model\Authorization**](../Model/Authorization.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthorizations**
> \Swagger\Client\Model\AuthorizationPagingList getAuthorizations($offset, $limit, $lock_id, $area_id, $medium_id, $person_id)

Gets all authorizations for locks and areas.

Returns a list of all authorizations for locks and areas defined in the access control system, sorted by 'created on' timestamp in descending order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuthorizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Offset for paging
$limit = 56; // int | Limit of result size
$lock_id = 789; // int | Filter authorizations by lock id
$area_id = 789; // int | Filter authorizations by area id
$medium_id = 789; // int | Filter authorizations by medium id
$person_id = 789; // int | Filter authorizations by person id

try {
    $result = $apiInstance->getAuthorizations($offset, $limit, $lock_id, $area_id, $medium_id, $person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationsApi->getAuthorizations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Offset for paging | [optional]
 **limit** | **int**| Limit of result size | [optional]
 **lock_id** | **int**| Filter authorizations by lock id | [optional]
 **area_id** | **int**| Filter authorizations by area id | [optional]
 **medium_id** | **int**| Filter authorizations by medium id | [optional]
 **person_id** | **int**| Filter authorizations by person id | [optional]

### Return type

[**\Swagger\Client\Model\AuthorizationPagingList**](../Model/AuthorizationPagingList.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

