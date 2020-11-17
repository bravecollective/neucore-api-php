# Brave\NeucoreApi\ApplicationGroupsApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allianceGroupsBulkV1**](ApplicationGroupsApi.md#allianceGroupsBulkV1) | **POST** /app/v1/alliance-groups | Return groups of multiple alliances.
[**allianceGroupsV1**](ApplicationGroupsApi.md#allianceGroupsV1) | **GET** /app/v1/alliance-groups/{aid} | Return groups of the alliance.
[**allianceGroupsV2**](ApplicationGroupsApi.md#allianceGroupsV2) | **GET** /app/v2/alliance-groups/{aid} | Return groups of the alliance.
[**corpGroupsBulkV1**](ApplicationGroupsApi.md#corpGroupsBulkV1) | **POST** /app/v1/corp-groups | Return groups of multiple corporations.
[**corpGroupsV1**](ApplicationGroupsApi.md#corpGroupsV1) | **GET** /app/v1/corp-groups/{cid} | Return groups of the corporation.
[**corpGroupsV2**](ApplicationGroupsApi.md#corpGroupsV2) | **GET** /app/v2/corp-groups/{cid} | Return groups of the corporation.
[**groupsBulkV1**](ApplicationGroupsApi.md#groupsBulkV1) | **POST** /app/v1/groups | Return groups of multiple players, identified by one of their character IDs.
[**groupsV1**](ApplicationGroupsApi.md#groupsV1) | **GET** /app/v1/groups/{cid} | Return groups of the character&#39;s player account.
[**groupsV2**](ApplicationGroupsApi.md#groupsV2) | **GET** /app/v2/groups/{cid} | Return groups of the character&#39;s player account.
[**groupsWithFallbackV1**](ApplicationGroupsApi.md#groupsWithFallbackV1) | **GET** /app/v1/groups-with-fallback | Returns groups from the character&#39;s account, if available, or the corporation and alliance.



## allianceGroupsBulkV1

> \Brave\NeucoreApi\Model\Alliance[] allianceGroupsBulkV1($request_body)

Return groups of multiple alliances.

Needs role: app-groups.<br>      *                  Returns only groups that have been added to the app as well.      *                  Skips alliances that are not found in the local database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array(56); // int[] | EVE alliance IDs array.

try {
    $result = $apiInstance->allianceGroupsBulkV1($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationGroupsApi->allianceGroupsBulkV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_body** | [**int[]**](../Model/int.md)| EVE alliance IDs array. |

### Return type

[**\Brave\NeucoreApi\Model\Alliance[]**](../Model/Alliance.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## allianceGroupsV1

> \Brave\NeucoreApi\Model\Group[] allianceGroupsV1($aid)

Return groups of the alliance.

Needs role: app-groups.<br>Returns only groups that have been added to the app as well.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aid = 56; // int | EVE alliance ID.

try {
    $result = $apiInstance->allianceGroupsV1($aid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationGroupsApi->allianceGroupsV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **int**| EVE alliance ID. |

### Return type

[**\Brave\NeucoreApi\Model\Group[]**](../Model/Group.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## allianceGroupsV2

> \Brave\NeucoreApi\Model\Group[] allianceGroupsV2($aid)

Return groups of the alliance.

Needs role: app-groups.<br>Returns only groups that have been added to the app as well.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aid = 56; // int | EVE alliance ID.

try {
    $result = $apiInstance->allianceGroupsV2($aid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationGroupsApi->allianceGroupsV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **int**| EVE alliance ID. |

### Return type

[**\Brave\NeucoreApi\Model\Group[]**](../Model/Group.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## corpGroupsBulkV1

> \Brave\NeucoreApi\Model\Corporation[] corpGroupsBulkV1($request_body)

Return groups of multiple corporations.

Needs role: app-groups.<br>      *                  Returns only groups that have been added to the app as well.      *                  Skips corporations that are not found in the local database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array(56); // int[] | EVE corporation IDs array.

try {
    $result = $apiInstance->corpGroupsBulkV1($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationGroupsApi->corpGroupsBulkV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_body** | [**int[]**](../Model/int.md)| EVE corporation IDs array. |

### Return type

[**\Brave\NeucoreApi\Model\Corporation[]**](../Model/Corporation.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## corpGroupsV1

> \Brave\NeucoreApi\Model\Group[] corpGroupsV1($cid)

Return groups of the corporation.

Needs role: app-groups.<br>Returns only groups that have been added to the app as well.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationGroupsApi(
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
    echo 'Exception when calling ApplicationGroupsApi->corpGroupsV1: ', $e->getMessage(), PHP_EOL;
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

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## corpGroupsV2

> \Brave\NeucoreApi\Model\Group[] corpGroupsV2($cid)

Return groups of the corporation.

Needs role: app-groups.<br>Returns only groups that have been added to the app as well.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cid = 56; // int | EVE corporation ID.

try {
    $result = $apiInstance->corpGroupsV2($cid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationGroupsApi->corpGroupsV2: ', $e->getMessage(), PHP_EOL;
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

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## groupsBulkV1

> \Brave\NeucoreApi\Model\CharacterGroups[] groupsBulkV1($request_body)

Return groups of multiple players, identified by one of their character IDs.

Needs role: app-groups.<br>      *                  Returns only groups that have been added to the app as well.      *                  Skips characters that are not found in the local database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array(56); // int[] | EVE character IDs array.

try {
    $result = $apiInstance->groupsBulkV1($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationGroupsApi->groupsBulkV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_body** | [**int[]**](../Model/int.md)| EVE character IDs array. |

### Return type

[**\Brave\NeucoreApi\Model\CharacterGroups[]**](../Model/CharacterGroups.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## groupsV1

> \Brave\NeucoreApi\Model\Group[] groupsV1($cid)

Return groups of the character's player account.

Needs role: app-groups.<br>Returns only groups that have been added to the app as well.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationGroupsApi(
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
    echo 'Exception when calling ApplicationGroupsApi->groupsV1: ', $e->getMessage(), PHP_EOL;
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

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## groupsV2

> \Brave\NeucoreApi\Model\Group[] groupsV2($cid)

Return groups of the character's player account.

Needs role: app-groups.<br>Returns only groups that have been added to the app as well.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cid = 56; // int | EVE character ID.

try {
    $result = $apiInstance->groupsV2($cid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationGroupsApi->groupsV2: ', $e->getMessage(), PHP_EOL;
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

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## groupsWithFallbackV1

> \Brave\NeucoreApi\Model\Group[] groupsWithFallbackV1($character, $corporation, $alliance)

Returns groups from the character's account, if available, or the corporation and alliance.

Needs role: app-groups.<br>      *                  Returns only groups that have been added to the app as well.<br>      *                  It is not checked if character, corporation and alliance match.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character = 56; // int | EVE character ID.
$corporation = 56; // int | EVE corporation ID.
$alliance = 56; // int | EVE alliance ID.

try {
    $result = $apiInstance->groupsWithFallbackV1($character, $corporation, $alliance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationGroupsApi->groupsWithFallbackV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character** | **int**| EVE character ID. |
 **corporation** | **int**| EVE corporation ID. |
 **alliance** | **int**| EVE alliance ID. | [optional]

### Return type

[**\Brave\NeucoreApi\Model\Group[]**](../Model/Group.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)
