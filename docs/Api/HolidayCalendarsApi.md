# Coucounco\Airkey\Swagger\Client\HolidayCalendarsApi

All URIs are relative to *https://integration.api.airkey.evva.com:443/cloud*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createHolidayCalendarSlot**](HolidayCalendarsApi.md#createHolidayCalendarSlot) | **POST** /v1/holiday-calendars/{holidayCalendarId}/slots | Adds a new holiday calendar slot to the holiday calendar.
[**deleteHolidayCalendarSlot**](HolidayCalendarsApi.md#deleteHolidayCalendarSlot) | **DELETE** /v1/holiday-calendars/{holidayCalendarId}/slots/{holidayCalendarSlotId} | Deletes provided holiday calendar slot.
[**getHolidayCalendar**](HolidayCalendarsApi.md#getHolidayCalendar) | **GET** /v1/holiday-calendars/{holidayCalendarId} | Gets a specific holiday calendar.
[**getHolidayCalendarSlot**](HolidayCalendarsApi.md#getHolidayCalendarSlot) | **GET** /v1/holiday-calendars/{holidayCalendarId}/slots/{holidayCalendarSlotId} | Gets a specific holiday calendar slot.
[**getHolidayCalendars**](HolidayCalendarsApi.md#getHolidayCalendars) | **GET** /v1/holiday-calendars | Gets all holiday calendars.
[**getLocksByCalendarId**](HolidayCalendarsApi.md#getLocksByCalendarId) | **GET** /v1/holiday-calendars/{holidayCalendarId}/locks | Gets all locks using the holiday calendar.
[**updateHolidayCalendar**](HolidayCalendarsApi.md#updateHolidayCalendar) | **PUT** /v1/holiday-calendars/{holidayCalendarId} | Updates the holiday calendar.
[**updateHolidayCalendarSlot**](HolidayCalendarsApi.md#updateHolidayCalendarSlot) | **PUT** /v1/holiday-calendars/{holidayCalendarId}/slots/{holidayCalendarSlotId} | Updates a holiday calendar slot of the holiday calendar.


# **createHolidayCalendarSlot**
> \Coucounco\Airkey\Swagger\Client\Model\HolidayCalendar createHolidayCalendarSlot($holiday_calendar_id, $body)

Adds a new holiday calendar slot to the holiday calendar.

Creates and adds the holiday calendar slot to the provided holiday calendar and returns the updated holiday calendar object version. In case of a series definition in the given holiday calendar slot, more than one holiday calendar slots could be created. To retrieve the newly created slots from the returned calendar, they can be filtered based on given slot name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\HolidayCalendarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$holiday_calendar_id = 789; // int | Unique identifier of the holiday calendar with which the holiday calendar slot should be associated
$body = new \Coucounco\Airkey\Swagger\Client\Model\HolidayCalendarSlotCreate(); // \Coucounco\Airkey\Swagger\Client\Model\HolidayCalendarSlotCreate | Holiday calendar slot to be added

try {
    $result = $apiInstance->createHolidayCalendarSlot($holiday_calendar_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayCalendarsApi->createHolidayCalendarSlot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **holiday_calendar_id** | **int**| Unique identifier of the holiday calendar with which the holiday calendar slot should be associated |
 **body** | [**\Coucounco\Airkey\Swagger\Client\Model\HolidayCalendarSlotCreate**](../Model/HolidayCalendarSlotCreate.md)| Holiday calendar slot to be added |

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\HolidayCalendar**](../Model/HolidayCalendar.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteHolidayCalendarSlot**
> \Coucounco\Airkey\Swagger\Client\Model\HolidayCalendar deleteHolidayCalendarSlot($holiday_calendar_id, $holiday_calendar_slot_id, $body)

Deletes provided holiday calendar slot.

Deletes the provided holiday calendar slot and returns the new holiday calendar object version.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\HolidayCalendarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$holiday_calendar_id = 789; // int | Unique identifier of the holiday calendar with which the holiday calendar slot is associated
$holiday_calendar_slot_id = 789; // int | Unique identifier of the holiday calendar slot to be deleted
$body = new \Coucounco\Airkey\Swagger\Client\Model\HolidayCalendarSlotDelete(); // \Coucounco\Airkey\Swagger\Client\Model\HolidayCalendarSlotDelete | Holiday calendar slot to be deleted

try {
    $result = $apiInstance->deleteHolidayCalendarSlot($holiday_calendar_id, $holiday_calendar_slot_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayCalendarsApi->deleteHolidayCalendarSlot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **holiday_calendar_id** | **int**| Unique identifier of the holiday calendar with which the holiday calendar slot is associated |
 **holiday_calendar_slot_id** | **int**| Unique identifier of the holiday calendar slot to be deleted |
 **body** | [**\Coucounco\Airkey\Swagger\Client\Model\HolidayCalendarSlotDelete**](../Model/HolidayCalendarSlotDelete.md)| Holiday calendar slot to be deleted |

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\HolidayCalendar**](../Model/HolidayCalendar.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHolidayCalendar**
> \Coucounco\Airkey\Swagger\Client\Model\HolidayCalendar getHolidayCalendar($holiday_calendar_id)

Gets a specific holiday calendar.

Returns information about a specific holiday calendar defined in the access control system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\HolidayCalendarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$holiday_calendar_id = 789; // int | Unique identifier of the holiday calendar

try {
    $result = $apiInstance->getHolidayCalendar($holiday_calendar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayCalendarsApi->getHolidayCalendar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **holiday_calendar_id** | **int**| Unique identifier of the holiday calendar |

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\HolidayCalendar**](../Model/HolidayCalendar.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHolidayCalendarSlot**
> \Coucounco\Airkey\Swagger\Client\Model\HolidayCalendarSlot getHolidayCalendarSlot($holiday_calendar_id, $holiday_calendar_slot_id)

Gets a specific holiday calendar slot.

Returns information about a specific holiday calendar slot of the holiday calendar.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\HolidayCalendarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$holiday_calendar_id = 789; // int | Unique identifier of the holiday calendar with which the holiday calendar slot is associated
$holiday_calendar_slot_id = 789; // int | Unique identifier of the holiday calendar slot

try {
    $result = $apiInstance->getHolidayCalendarSlot($holiday_calendar_id, $holiday_calendar_slot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayCalendarsApi->getHolidayCalendarSlot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **holiday_calendar_id** | **int**| Unique identifier of the holiday calendar with which the holiday calendar slot is associated |
 **holiday_calendar_slot_id** | **int**| Unique identifier of the holiday calendar slot |

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\HolidayCalendarSlot**](../Model/HolidayCalendarSlot.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHolidayCalendars**
> \Coucounco\Airkey\Swagger\Client\Model\HolidayCalendarList getHolidayCalendars()

Gets all holiday calendars.

Returns all available holiday calendars defined in the access control system, sorted by holiday calendar id in ascending order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\HolidayCalendarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getHolidayCalendars();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayCalendarsApi->getHolidayCalendars: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\HolidayCalendarList**](../Model/HolidayCalendarList.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocksByCalendarId**
> \Coucounco\Airkey\Swagger\Client\Model\LockPagingList getLocksByCalendarId($holiday_calendar_id, $offset, $limit)

Gets all locks using the holiday calendar.

Returns a list of all locks that are currently using the provided holiday calendar.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\HolidayCalendarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$holiday_calendar_id = 789; // int | Unique identifier of the holiday calendar
$offset = 56; // int | Offset for paging
$limit = 56; // int | Limit of result size

try {
    $result = $apiInstance->getLocksByCalendarId($holiday_calendar_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayCalendarsApi->getLocksByCalendarId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **holiday_calendar_id** | **int**| Unique identifier of the holiday calendar |
 **offset** | **int**| Offset for paging | [optional]
 **limit** | **int**| Limit of result size | [optional]

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\LockPagingList**](../Model/LockPagingList.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateHolidayCalendar**
> \Coucounco\Airkey\Swagger\Client\Model\HolidayCalendar updateHolidayCalendar($holiday_calendar_id, $body)

Updates the holiday calendar.

Updates the provided holiday calendar and returns the new holiday calendar object version.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\HolidayCalendarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$holiday_calendar_id = 789; // int | Unique identifier of the holiday calendar to be updated
$body = new \Coucounco\Airkey\Swagger\Client\Model\HolidayCalendar(); // \Coucounco\Airkey\Swagger\Client\Model\HolidayCalendar | Holiday calendar to be updated

try {
    $result = $apiInstance->updateHolidayCalendar($holiday_calendar_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayCalendarsApi->updateHolidayCalendar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **holiday_calendar_id** | **int**| Unique identifier of the holiday calendar to be updated |
 **body** | [**\Coucounco\Airkey\Swagger\Client\Model\HolidayCalendar**](../Model/HolidayCalendar.md)| Holiday calendar to be updated |

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\HolidayCalendar**](../Model/HolidayCalendar.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateHolidayCalendarSlot**
> \Coucounco\Airkey\Swagger\Client\Model\HolidayCalendar updateHolidayCalendarSlot($holiday_calendar_id, $holiday_calendar_slot_id, $body)

Updates a holiday calendar slot of the holiday calendar.

Updates the provided holiday calendar slot and returns the new holiday calendar object version.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\HolidayCalendarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$holiday_calendar_id = 789; // int | Unique identifier of the holiday calendar with which the holiday calendar slot is associated
$holiday_calendar_slot_id = 789; // int | Unique identifier of the holiday calendar slot to be updated
$body = new \Coucounco\Airkey\Swagger\Client\Model\HolidayCalendarSlotUpdate(); // \Coucounco\Airkey\Swagger\Client\Model\HolidayCalendarSlotUpdate | Holiday calendar slot to be updated

try {
    $result = $apiInstance->updateHolidayCalendarSlot($holiday_calendar_id, $holiday_calendar_slot_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayCalendarsApi->updateHolidayCalendarSlot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **holiday_calendar_id** | **int**| Unique identifier of the holiday calendar with which the holiday calendar slot is associated |
 **holiday_calendar_slot_id** | **int**| Unique identifier of the holiday calendar slot to be updated |
 **body** | [**\Coucounco\Airkey\Swagger\Client\Model\HolidayCalendarSlotUpdate**](../Model/HolidayCalendarSlotUpdate.md)| Holiday calendar slot to be updated |

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\HolidayCalendar**](../Model/HolidayCalendar.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

