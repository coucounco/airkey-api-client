# Coucounco\Airkey\Swagger\Client\MediumProtocolApi

All URIs are relative to *https://integration.api.airkey.evva.com:443/cloud*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMediumProtocol**](MediumProtocolApi.md#getMediumProtocol) | **GET** /v1/medium-protocol | Deprecated/Legacy: This resource will be removed in future versions. Please use resource \&quot;/v1/medium-protocol-limit\&quot; instead.
[**getMediumProtocolLimited**](MediumProtocolApi.md#getMediumProtocolLimited) | **GET** /v1/medium-protocol-limit | Gets protocol of media.


# **getMediumProtocol**
> \Coucounco\Airkey\Swagger\Client\Model\LockProtocolPagingList getMediumProtocol($offset, $limit, $from, $to, $medium_id, $language)

Deprecated/Legacy: This resource will be removed in future versions. Please use resource \"/v1/medium-protocol-limit\" instead.

Returns a list of protocol of media in the access control system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\MediumProtocolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Offset for paging
$limit = 56; // int | Limit of result size
$from = "from_example"; // string | Timestamp from when the protocols need to be considered (ISO 8601-format compliant date with time in UTC, milliseconds precision)
$to = "to_example"; // string | Timestamp until when the protocol need to be considered (ISO 8601-format compliant date with time in UTC, milliseconds precision)
$medium_id = 789; // int | Filter authorizations by medium id
$language = "de-DE"; // string | Language codes as a comma-separated list of IETF (bcp47) language tags (e.g. de-DE, en-UK) or \"all\" for all possible languages used for translations

try {
    $result = $apiInstance->getMediumProtocol($offset, $limit, $from, $to, $medium_id, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediumProtocolApi->getMediumProtocol: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Offset for paging | [optional]
 **limit** | **int**| Limit of result size | [optional]
 **from** | **string**| Timestamp from when the protocols need to be considered (ISO 8601-format compliant date with time in UTC, milliseconds precision) | [optional]
 **to** | **string**| Timestamp until when the protocol need to be considered (ISO 8601-format compliant date with time in UTC, milliseconds precision) | [optional]
 **medium_id** | **int**| Filter authorizations by medium id | [optional]
 **language** | **string**| Language codes as a comma-separated list of IETF (bcp47) language tags (e.g. de-DE, en-UK) or \&quot;all\&quot; for all possible languages used for translations | [optional] [default to de-DE]

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\LockProtocolPagingList**](../Model/LockProtocolPagingList.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediumProtocolLimited**
> \Coucounco\Airkey\Swagger\Client\Model\LockProtocolPagingList getMediumProtocolLimited($offset, $limit, $from, $to, $medium_id, $language)

Gets protocol of media.

Returns a list of protocol entries of media in the access control system. If 'from' and 'to' is missing, a default period of 'one day' is used. The period between 'from' and 'to' can be maximum one year (365 days).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\MediumProtocolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Offset for paging
$limit = 56; // int | Limit of result size
$from = "from_example"; // string | Timestamp from when the protocol entries need to be considered (inclusive, ISO 8601-format compliant date with time in UTC, milliseconds precision)
$to = "to_example"; // string | Timestamp until when the protocol entries need to be considered (inclusive, ISO 8601-format compliant date with time in UTC, milliseconds precision)
$medium_id = 789; // int | Filter authorizations by medium id
$language = "de-DE"; // string | Language codes as a comma-separated list of IETF (bcp47) language tags (e.g. de-DE, en-UK) or \"all\" for all possible languages used for translations

try {
    $result = $apiInstance->getMediumProtocolLimited($offset, $limit, $from, $to, $medium_id, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediumProtocolApi->getMediumProtocolLimited: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Offset for paging | [optional]
 **limit** | **int**| Limit of result size | [optional]
 **from** | **string**| Timestamp from when the protocol entries need to be considered (inclusive, ISO 8601-format compliant date with time in UTC, milliseconds precision) | [optional]
 **to** | **string**| Timestamp until when the protocol entries need to be considered (inclusive, ISO 8601-format compliant date with time in UTC, milliseconds precision) | [optional]
 **medium_id** | **int**| Filter authorizations by medium id | [optional]
 **language** | **string**| Language codes as a comma-separated list of IETF (bcp47) language tags (e.g. de-DE, en-UK) or \&quot;all\&quot; for all possible languages used for translations | [optional] [default to de-DE]

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\LockProtocolPagingList**](../Model/LockProtocolPagingList.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

