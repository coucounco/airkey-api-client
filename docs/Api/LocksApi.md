# Coucounco\Airkey\Swagger\Client\LocksApi

All URIs are relative to *https://integration.api.airkey.evva.com:443/cloud*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addSharedLock**](LocksApi.md#addSharedLock) | **POST** /v1/locks/add-shared-lock | Redeems a sharing code to add a lock from another access control system.
[**assignAreas**](LocksApi.md#assignAreas) | **POST** /v1/locks/{lockId}/settings/assigned-areas/add | Assigns areas to the specific lock.
[**createSharingCode**](LocksApi.md#createSharingCode) | **POST** /v1/locks/{lockId}/settings/sharing-codes | Creates sharing code for a specific lock.
[**deleteSharingCode**](LocksApi.md#deleteSharingCode) | **DELETE** /v1/locks/{lockId}/settings/sharing-codes/{sharingCodeId} | Removes sharing code from the specific lock.
[**getActiveShares**](LocksApi.md#getActiveShares) | **GET** /v1/locks/{lockId}/settings/active-shares | Returns a list of other access control systems your lock has been shared with.
[**getAssignedAreas**](LocksApi.md#getAssignedAreas) | **GET** /v1/locks/{lockId}/settings/assigned-areas | Gets assigned areas of a specific lock.
[**getLock**](LocksApi.md#getLock) | **GET** /v1/locks/{lockId} | Gets information of a specific lock.
[**getLockSettings**](LocksApi.md#getLockSettings) | **GET** /v1/locks/{lockId}/settings | Gets settings of a specific lock.
[**getLocks**](LocksApi.md#getLocks) | **GET** /v1/locks | Gets information of all locks.
[**getSharingCodes**](LocksApi.md#getSharingCodes) | **GET** /v1/locks/{lockId}/settings/sharing-codes | Returns a list of sharing codes for a specific lock.
[**markLockAsToBeRemoved**](LocksApi.md#markLockAsToBeRemoved) | **POST** /v1/locks/{lockId}/remove | Marks a lock as to be removed. Lock needs to be synchronized to be actually removed.
[**removeActiveShares**](LocksApi.md#removeActiveShares) | **POST** /v1/locks/{lockId}/settings/active-shares/remove | Removes shares for a specific lock.
[**unassignAreas**](LocksApi.md#unassignAreas) | **POST** /v1/locks/{lockId}/settings/assigned-areas/remove | Unassigns areas from the specific lock.
[**unmarkLockAsToBeRemoved**](LocksApi.md#unmarkLockAsToBeRemoved) | **POST** /v1/locks/{lockId}/abort-remove | Aborts removal of a lock (removes the to be removed mark on the lock)
[**updateLock**](LocksApi.md#updateLock) | **PUT** /v1/locks/{lockId} | Updates the provided lock.
[**updateLockSettings**](LocksApi.md#updateLockSettings) | **PUT** /v1/locks/{lockId}/settings | Updates settings of the lock.


# **addSharedLock**
> \Coucounco\Airkey\Swagger\Client\Model\Lock addSharedLock($body)

Redeems a sharing code to add a lock from another access control system.

Returns the shared lock with its information. The following global sharing codes are available in the integration environment: AaBbCcDdEe11, AaBbCcDdEe22, AaBbCcDdEe33

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Coucounco\Airkey\Swagger\Client\Model\SharedLock(); // \Coucounco\Airkey\Swagger\Client\Model\SharedLock | Data to redeem sharing code

try {
    $result = $apiInstance->addSharedLock($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->addSharedLock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Coucounco\Airkey\Swagger\Client\Model\SharedLock**](../Model/SharedLock.md)| Data to redeem sharing code |

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\Lock**](../Model/Lock.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assignAreas**
> \Coucounco\Airkey\Swagger\Client\Model\AssignedArea[] assignAreas($lock_id, $body)

Assigns areas to the specific lock.

Returns a list of the just assigned areas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lock_id = 789; // int | Unique identifier of the lock
$body = array(new \Coucounco\Airkey\Swagger\Client\Model\int[]()); // int[] | A list of areaIds

try {
    $result = $apiInstance->assignAreas($lock_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->assignAreas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lock_id** | **int**| Unique identifier of the lock |
 **body** | **int[]**| A list of areaIds |

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\AssignedArea[]**](../Model/AssignedArea.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSharingCode**
> \Coucounco\Airkey\Swagger\Client\Model\SharingCode createSharingCode($lock_id)

Creates sharing code for a specific lock.

Returns the created sharing code.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lock_id = 789; // int | Unique identifier of the lock

try {
    $result = $apiInstance->createSharingCode($lock_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->createSharingCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lock_id** | **int**| Unique identifier of the lock |

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\SharingCode**](../Model/SharingCode.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSharingCode**
> int deleteSharingCode($lock_id, $sharing_code_id)

Removes sharing code from the specific lock.

Returns id of the deleted SharingCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lock_id = 789; // int | Unique identifier of the lock
$sharing_code_id = 789; // int | Unique identifier of the sharing code

try {
    $result = $apiInstance->deleteSharingCode($lock_id, $sharing_code_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->deleteSharingCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lock_id** | **int**| Unique identifier of the lock |
 **sharing_code_id** | **int**| Unique identifier of the sharing code |

### Return type

**int**

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActiveShares**
> \Coucounco\Airkey\Swagger\Client\Model\ActiveShare[] getActiveShares($lock_id)

Returns a list of other access control systems your lock has been shared with.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lock_id = 789; // int | Unique identifier of the lock

try {
    $result = $apiInstance->getActiveShares($lock_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->getActiveShares: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lock_id** | **int**| Unique identifier of the lock |

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\ActiveShare[]**](../Model/ActiveShare.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssignedAreas**
> \Coucounco\Airkey\Swagger\Client\Model\AssignedArea[] getAssignedAreas($lock_id)

Gets assigned areas of a specific lock.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lock_id = 789; // int | Unique identifier of the lock

try {
    $result = $apiInstance->getAssignedAreas($lock_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->getAssignedAreas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lock_id** | **int**| Unique identifier of the lock |

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\AssignedArea[]**](../Model/AssignedArea.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLock**
> \Coucounco\Airkey\Swagger\Client\Model\Lock getLock($lock_id)

Gets information of a specific lock.

Returns a specific lock with its information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\LocksApi(
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

[**\Coucounco\Airkey\Swagger\Client\Model\Lock**](../Model/Lock.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLockSettings**
> \Coucounco\Airkey\Swagger\Client\Model\LockSettings getLockSettings($lock_id)

Gets settings of a specific lock.

Returns settings of a specific lock.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lock_id = 789; // int | Unique identifier of the lock

try {
    $result = $apiInstance->getLockSettings($lock_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->getLockSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lock_id** | **int**| Unique identifier of the lock |

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\LockSettings**](../Model/LockSettings.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocks**
> \Coucounco\Airkey\Swagger\Client\Model\LockPagingList getLocks($offset, $limit, $calendar_id, $locking_system_id)

Gets information of all locks.

Returns a list of all locks with their information, sorted by lock id in ascending order. Maintenance tasks of a lock can be determined by using the maintenance-tasks resource (with lockId as query parameter for a single lock).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Offset for paging
$limit = 56; // int | Limit of result size
$calendar_id = 789; // int | Filter locks by holiday calendar id
$locking_system_id = 789; // int | Filter locks by technical identifier lockingSystemId

try {
    $result = $apiInstance->getLocks($offset, $limit, $calendar_id, $locking_system_id);
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
 **locking_system_id** | **int**| Filter locks by technical identifier lockingSystemId | [optional]

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\LockPagingList**](../Model/LockPagingList.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSharingCodes**
> \Coucounco\Airkey\Swagger\Client\Model\SharingCode[] getSharingCodes($lock_id)

Returns a list of sharing codes for a specific lock.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lock_id = 789; // int | Unique identifier of the lock

try {
    $result = $apiInstance->getSharingCodes($lock_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->getSharingCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lock_id** | **int**| Unique identifier of the lock |

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\SharingCode[]**](../Model/SharingCode.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markLockAsToBeRemoved**
> \Coucounco\Airkey\Swagger\Client\Model\Lock markLockAsToBeRemoved($lock_id)

Marks a lock as to be removed. Lock needs to be synchronized to be actually removed.

Returns the lock that has been marked as to be removed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lock_id = 789; // int | Unique identifier of the lock

try {
    $result = $apiInstance->markLockAsToBeRemoved($lock_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->markLockAsToBeRemoved: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lock_id** | **int**| Unique identifier of the lock |

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\Lock**](../Model/Lock.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeActiveShares**
> \Coucounco\Airkey\Swagger\Client\Model\ActiveShare[] removeActiveShares($lock_id, $body)

Removes shares for a specific lock.

Returns a list of just removed shares where the lock needs to be synchronized.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lock_id = 789; // int | Unique identifier of the lock
$body = array(new \Coucounco\Airkey\Swagger\Client\Model\string[]()); // string[] | A list of customerNumber

try {
    $result = $apiInstance->removeActiveShares($lock_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->removeActiveShares: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lock_id** | **int**| Unique identifier of the lock |
 **body** | **string[]**| A list of customerNumber |

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\ActiveShare[]**](../Model/ActiveShare.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unassignAreas**
> \Coucounco\Airkey\Swagger\Client\Model\AssignedArea[] unassignAreas($lock_id, $body)

Unassigns areas from the specific lock.

Returns a list of just unassigned areas where the lock needs to be synchronized.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lock_id = 789; // int | Unique identifier of the lock
$body = array(new \Coucounco\Airkey\Swagger\Client\Model\int[]()); // int[] | A list of areaIds

try {
    $result = $apiInstance->unassignAreas($lock_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->unassignAreas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lock_id** | **int**| Unique identifier of the lock |
 **body** | **int[]**| A list of areaIds |

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\AssignedArea[]**](../Model/AssignedArea.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unmarkLockAsToBeRemoved**
> \Coucounco\Airkey\Swagger\Client\Model\Lock unmarkLockAsToBeRemoved($lock_id)

Aborts removal of a lock (removes the to be removed mark on the lock)

Returns the lock whose removal was aborted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lock_id = 789; // int | Unique identifier of the lock

try {
    $result = $apiInstance->unmarkLockAsToBeRemoved($lock_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->unmarkLockAsToBeRemoved: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lock_id** | **int**| Unique identifier of the lock |

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\Lock**](../Model/Lock.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLock**
> \Coucounco\Airkey\Swagger\Client\Model\Lock updateLock($lock_id, $body)

Updates the provided lock.

Updates the provided lock and returns the new version of the lock object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lock_id = 789; // int | Unique identifier of the lock
$body = new \Coucounco\Airkey\Swagger\Client\Model\Lock(); // \Coucounco\Airkey\Swagger\Client\Model\Lock | Lock to be updated

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
 **body** | [**\Coucounco\Airkey\Swagger\Client\Model\Lock**](../Model/Lock.md)| Lock to be updated |

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\Lock**](../Model/Lock.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLockSettings**
> \Coucounco\Airkey\Swagger\Client\Model\LockSettings updateLockSettings($lock_id, $body)

Updates settings of the lock.

Updates lock settings and returns the new settings of the lock.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\LocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lock_id = 789; // int | Unique identifier of the lock
$body = new \Coucounco\Airkey\Swagger\Client\Model\LockSettings(); // \Coucounco\Airkey\Swagger\Client\Model\LockSettings | Lock settings to be updated

try {
    $result = $apiInstance->updateLockSettings($lock_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocksApi->updateLockSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lock_id** | **int**| Unique identifier of the lock |
 **body** | [**\Coucounco\Airkey\Swagger\Client\Model\LockSettings**](../Model/LockSettings.md)| Lock settings to be updated |

### Return type

[**\Coucounco\Airkey\Swagger\Client\Model\LockSettings**](../Model/LockSettings.md)

### Authorization

[X-API-Key](../../README.md#X-API-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

