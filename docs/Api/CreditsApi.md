# Coucounco\Airkey\Swagger\Client\CreditsApi

All URIs are relative to *https://integration.api.airkey.evva.com:443/cloud*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCredits**](CreditsApi.md#getCredits) | **GET** /v1/credits | Gets available credit information.
[**getCreditsProtocol**](CreditsApi.md#getCreditsProtocol) | **GET** /v1/credits-protocol | Gets protocol of credits.


# **getCredits**
> \Coucounco\Airkey\Swagger\Client\Model\CreditInfo getCredits()

Gets available credit information.

Returns information about available credits of customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\CreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCredits();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditsApi->getCredits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\CreditInfo**](../Model/CreditInfo.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCreditsProtocol**
> \Coucounco\Airkey\Swagger\Client\Model\CreditsProtocolPagingList getCreditsProtocol($id, $user_id, $administrator, $language)

Gets protocol of credits.

Returns the protocol of credits actions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\CreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | Filter events by unique protocol entry identifier
$user_id = 789; // int | Filter events by unique administrator user identifier
$administrator = "administrator_example"; // string | Filter events by name of administrator
$language = "de-DE"; // string | Language codes as a comma-separated list of IETF (bcp47) language tags (e.g. de-DE, en-UK) or \"all\" for all possible languages used for translations

try {
    $result = $apiInstance->getCreditsProtocol($id, $user_id, $administrator, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditsApi->getCreditsProtocol: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Filter events by unique protocol entry identifier | [optional]
 **user_id** | **int**| Filter events by unique administrator user identifier | [optional]
 **administrator** | **string**| Filter events by name of administrator | [optional]
 **language** | **string**| Language codes as a comma-separated list of IETF (bcp47) language tags (e.g. de-DE, en-UK) or \&quot;all\&quot; for all possible languages used for translations | [optional] [default to de-DE]

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\CreditsProtocolPagingList**](../Model/CreditsProtocolPagingList.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

