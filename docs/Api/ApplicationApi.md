# Brave\NeucoreApi\ApplicationApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**corpGroupsBulkV1**](ApplicationApi.md#corpGroupsBulkV1) | **POST** /app/v1/corp-groups | Return groups for multiple corporations.
[**corpGroupsV1**](ApplicationApi.md#corpGroupsV1) | **GET** /app/v1/corp-groups/{cid} | Return groups for the corporation.
[**groupsBulkV1**](ApplicationApi.md#groupsBulkV1) | **POST** /app/v1/groups | Return groups of multiple players, identified by one of their character IDs.
[**groupsV1**](ApplicationApi.md#groupsV1) | **GET** /app/v1/groups/{cid} | Return groups of the character&#39;s player account.
[**mainV1**](ApplicationApi.md#mainV1) | **GET** /app/v1/main/{cid} | Returns the main character of the player account to which the character ID belongs.
[**showV1**](ApplicationApi.md#showV1) | **GET** /app/v1/show | Show app information.


# **corpGroupsBulkV1**
> \Brave\NeucoreApi\Model\Corporation[] corpGroupsBulkV1($ids)

Return groups for multiple corporations.

Needs role: app.      *                  Returns only groups that have been added to the app as well.      *                  Skips corporations that are not found in the local database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Brave\NeucoreApi\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array(new \Brave\NeucoreApi\Model\int[]()); // int[] | EVE corporation IDs array.

try {
    $result = $apiInstance->corpGroupsBulkV1($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->corpGroupsBulkV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **int[]**| EVE corporation IDs array. |

### Return type

[**\Brave\NeucoreApi\Model\Corporation[]**](../Model/Corporation.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **corpGroupsV1**
> \Brave\NeucoreApi\Model\Group[] corpGroupsV1($cid)

Return groups for the corporation.

Needs role: app<br>Returns only groups that have been added to the app as well.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Brave\NeucoreApi\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cid = 56; // int | EVE corporation ID.

try {
    $result = $apiInstance->corpGroupsV1($cid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->corpGroupsV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cid** | **int**| EVE corporation ID. |

### Return type

[**\Brave\NeucoreApi\Model\Group[]**](../Model/Group.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsBulkV1**
> \Brave\NeucoreApi\Model\CharacterGroups[] groupsBulkV1($ids)

Return groups of multiple players, identified by one of their character IDs.

Needs role: app.      *                  Returns only groups that have been added to the app as well.      *                  Skips characters that are not found in the local database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Brave\NeucoreApi\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array(new \Brave\NeucoreApi\Model\int[]()); // int[] | EVE character IDs array.

try {
    $result = $apiInstance->groupsBulkV1($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->groupsBulkV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **int[]**| EVE character IDs array. |

### Return type

[**\Brave\NeucoreApi\Model\CharacterGroups[]**](../Model/CharacterGroups.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsV1**
> \Brave\NeucoreApi\Model\Group[] groupsV1($cid)

Return groups of the character's player account.

Needs role: app<br>Returns only groups that have been added to the app as well.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Brave\NeucoreApi\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cid = 56; // int | EVE character ID.

try {
    $result = $apiInstance->groupsV1($cid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->groupsV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cid** | **int**| EVE character ID. |

### Return type

[**\Brave\NeucoreApi\Model\Group[]**](../Model/Group.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mainV1**
> \Brave\NeucoreApi\Model\Character mainV1($cid)

Returns the main character of the player account to which the character ID belongs.

Needs role: app<br>It is possible that an account has no main character.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Brave\NeucoreApi\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cid = 56; // int | EVE character ID.

try {
    $result = $apiInstance->mainV1($cid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->mainV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cid** | **int**| EVE character ID. |

### Return type

[**\Brave\NeucoreApi\Model\Character**](../Model/Character.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showV1**
> \Brave\NeucoreApi\Model\App showV1()

Show app information.

Needs role: app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Brave\NeucoreApi\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->showV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->showV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Brave\NeucoreApi\Model\App**](../Model/App.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

