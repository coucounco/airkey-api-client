# Coucounco\Airkey\Swagger\Client\SendAKeyApi

All URIs are relative to *https://integration.api.airkey.evva.com:443/cloud*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sendAKey**](SendAKeyApi.md#sendAKey) | **POST** /v1/send-a-key | Sends a registration code to the phone and creates all necessary prerequisites if needed.


# **sendAKey**
> \Coucounco\Airkey\Swagger\Client\Model\SendAKeyResponse sendAKey($body)

Sends a registration code to the phone and creates all necessary prerequisites if needed.

Based on the given phone number this request sends a registration link via SMS for easy installation of the AirKey app. It simplifies the task of creating new mobile app users by implicitly creating new persons, phones and authorizations of type 'SIMPLE' if needed, i.e. it reuses an existing person if found. Please check before if a phone already exists with the given phone number to prevent duplicates (GET /media/phones using the filter phoneNumber). The reason why duplicates are allowed is to be able to create a new phone with an already existing phone number so it is not mandatory to delete an old phone before creating the new phone with the same phone number. <br/>Authorization creation mirrors the behaviour of POST /authorizations/simple. If you need more control consider creating a phone and person with this call and using the advanced authorization interface for creating authorizations. <br/>Either lockId or areaId needs to be set for an authorization. It's not possible to set both IDs at the same time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\SendAKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Coucounco\Airkey\Swagger\Client\Model\SendAKeyRequest(); // \Coucounco\Airkey\Swagger\Client\Model\SendAKeyRequest | Send-A-Key request wrapper

try {
    $result = $apiInstance->sendAKey($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendAKeyApi->sendAKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Coucounco\Airkey\Swagger\Client\Model\SendAKeyRequest**](../Model/SendAKeyRequest.md)| Send-A-Key request wrapper |

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\SendAKeyResponse**](../Model/SendAKeyResponse.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

