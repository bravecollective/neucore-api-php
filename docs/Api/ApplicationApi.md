# Brave\NeucoreApi\ApplicationApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allianceGroupsBulkV1**](ApplicationApi.md#allianceGroupsBulkV1) | **POST** /app/v1/alliance-groups | Return groups of multiple alliances.
[**allianceGroupsV1**](ApplicationApi.md#allianceGroupsV1) | **GET** /app/v1/alliance-groups/{aid} | Return groups of the alliance.
[**allianceGroupsV2**](ApplicationApi.md#allianceGroupsV2) | **GET** /app/v2/alliance-groups/{aid} | Return groups of the alliance.
[**charactersV1**](ApplicationApi.md#charactersV1) | **GET** /app/v1/characters/{characterId} | Return all characters of the player account to which the character ID belongs.
[**corpGroupsBulkV1**](ApplicationApi.md#corpGroupsBulkV1) | **POST** /app/v1/corp-groups | Return groups of multiple corporations.
[**corpGroupsV1**](ApplicationApi.md#corpGroupsV1) | **GET** /app/v1/corp-groups/{cid} | Return groups of the corporation.
[**corpGroupsV2**](ApplicationApi.md#corpGroupsV2) | **GET** /app/v2/corp-groups/{cid} | Return groups of the corporation.
[**esiPostV1**](ApplicationApi.md#esiPostV1) | **POST** /app/v1/esi | Makes an ESI POST request on behalf on an EVE character and returns the result.
[**esiV1**](ApplicationApi.md#esiV1) | **GET** /app/v1/esi | Makes an ESI GET request on behalf on an EVE character and returns the result.
[**groupsBulkV1**](ApplicationApi.md#groupsBulkV1) | **POST** /app/v1/groups | Return groups of multiple players, identified by one of their character IDs.
[**groupsV1**](ApplicationApi.md#groupsV1) | **GET** /app/v1/groups/{cid} | Return groups of the character&#39;s player account.
[**groupsV2**](ApplicationApi.md#groupsV2) | **GET** /app/v2/groups/{cid} | Return groups of the character&#39;s player account.
[**groupsWithFallbackV1**](ApplicationApi.md#groupsWithFallbackV1) | **GET** /app/v1/groups-with-fallback | Returns groups from the character&#39;s account, if available, or the corporation and alliance.
[**mainV1**](ApplicationApi.md#mainV1) | **GET** /app/v1/main/{cid} | Returns the main character of the player account to which the character ID belongs.
[**mainV2**](ApplicationApi.md#mainV2) | **GET** /app/v2/main/{cid} | Return the main character of the player account to which the character ID belongs.
[**memberTrackingV1**](ApplicationApi.md#memberTrackingV1) | **GET** /app/v1/corporation/{id}/member-tracking | Return corporation member tracking data.
[**showV1**](ApplicationApi.md#showV1) | **GET** /app/v1/show | Show app information.


# **allianceGroupsBulkV1**
> \Brave\NeucoreApi\Model\Alliance[] allianceGroupsBulkV1($ids)

Return groups of multiple alliances.

Needs role: app-groups.<br>      *                  Returns only groups that have been added to the app as well.      *                  Skips alliances that are not found in the local database.

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
$ids = array(new \Brave\NeucoreApi\Model\int[]()); // int[] | EVE alliance IDs array.

try {
    $result = $apiInstance->allianceGroupsBulkV1($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->allianceGroupsBulkV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **int[]**| EVE alliance IDs array. |

### Return type

[**\Brave\NeucoreApi\Model\Alliance[]**](../Model/Alliance.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allianceGroupsV1**
> \Brave\NeucoreApi\Model\Group[] allianceGroupsV1($aid)

Return groups of the alliance.

Needs role: app-groups.<br>Returns only groups that have been added to the app as well.

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
$aid = 56; // int | EVE alliance ID.

try {
    $result = $apiInstance->allianceGroupsV1($aid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->allianceGroupsV1: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allianceGroupsV2**
> \Brave\NeucoreApi\Model\Group[] allianceGroupsV2($aid)

Return groups of the alliance.

Needs role: app-groups.<br>Returns only groups that have been added to the app as well.

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
$aid = 56; // int | EVE alliance ID.

try {
    $result = $apiInstance->allianceGroupsV2($aid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->allianceGroupsV2: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **charactersV1**
> \Brave\NeucoreApi\Model\Character[] charactersV1($character_id)

Return all characters of the player account to which the character ID belongs.

Needs role: app-chars.

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
$character_id = 56; // int | EVE character ID.

try {
    $result = $apiInstance->charactersV1($character_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->charactersV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| EVE character ID. |

### Return type

[**\Brave\NeucoreApi\Model\Character[]**](../Model/Character.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **corpGroupsBulkV1**
> \Brave\NeucoreApi\Model\Corporation[] corpGroupsBulkV1($ids)

Return groups of multiple corporations.

Needs role: app-groups.<br>      *                  Returns only groups that have been added to the app as well.      *                  Skips corporations that are not found in the local database.

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

Return groups of the corporation.

Needs role: app-groups.<br>Returns only groups that have been added to the app as well.

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

# **corpGroupsV2**
> \Brave\NeucoreApi\Model\Group[] corpGroupsV2($cid)

Return groups of the corporation.

Needs role: app-groups.<br>Returns only groups that have been added to the app as well.

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
    $result = $apiInstance->corpGroupsV2($cid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->corpGroupsV2: ', $e->getMessage(), PHP_EOL;
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

# **esiPostV1**
> string esiPostV1($esi_path_query, $datasource, $data)

Makes an ESI POST request on behalf on an EVE character and returns the result.

Needs role: app-esi<br>      *         Public ESI routes are not allowed.<br>      *         The following headers from ESI are passed through to the response:                Content-Type Expires X-Esi-Error-Limit-Remain X-Esi-Error-Limit-Reset X-Pages warning<br>      *         The HTTP status code from ESI is also passed through, so maybe there's more than the documented.

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
$esi_path_query = "esi_path_query_example"; // string | The ESI path and query string (without the datasource parameter).
$datasource = "datasource_example"; // string | The EVE character ID those token should be used to make the ESI request
$data = "data_example"; // string | JSON encoded data.

try {
    $result = $apiInstance->esiPostV1($esi_path_query, $datasource, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->esiPostV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **esi_path_query** | **string**| The ESI path and query string (without the datasource parameter). |
 **datasource** | **string**| The EVE character ID those token should be used to make the ESI request |
 **data** | **string**| JSON encoded data. |

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **esiV1**
> string esiV1($esi_path_query, $datasource)

Makes an ESI GET request on behalf on an EVE character and returns the result.

Needs role: app-esi<br>      *         Public ESI routes are not allowed.<br>      *         The following headers from ESI are passed through to the response:                Content-Type Expires X-Esi-Error-Limit-Remain X-Esi-Error-Limit-Reset X-Pages warning<br>      *         The HTTP status code from ESI is also passed through, so maybe there's more than the documented.

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
$esi_path_query = "esi_path_query_example"; // string | The ESI path and query string (without the datasource parameter).
$datasource = "datasource_example"; // string | The EVE character ID those token should be used to make the ESI request

try {
    $result = $apiInstance->esiV1($esi_path_query, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->esiV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **esi_path_query** | **string**| The ESI path and query string (without the datasource parameter). |
 **datasource** | **string**| The EVE character ID those token should be used to make the ESI request |

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsBulkV1**
> \Brave\NeucoreApi\Model\CharacterGroups[] groupsBulkV1($ids)

Return groups of multiple players, identified by one of their character IDs.

Needs role: app-groups.<br>      *                  Returns only groups that have been added to the app as well.      *                  Skips characters that are not found in the local database.

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

Needs role: app-groups.<br>Returns only groups that have been added to the app as well.

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

# **groupsV2**
> \Brave\NeucoreApi\Model\Group[] groupsV2($cid)

Return groups of the character's player account.

Needs role: app-groups.<br>Returns only groups that have been added to the app as well.

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
    $result = $apiInstance->groupsV2($cid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->groupsV2: ', $e->getMessage(), PHP_EOL;
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

# **groupsWithFallbackV1**
> \Brave\NeucoreApi\Model\Group[] groupsWithFallbackV1($character, $corporation, $alliance)

Returns groups from the character's account, if available, or the corporation and alliance.

Needs role: app-groups.<br>      *                  Returns only groups that have been added to the app as well.<br>      *                  It is not checked if character, corporation and alliance match.

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
$character = 56; // int | EVE character ID.
$corporation = 56; // int | EVE corporation ID.
$alliance = 56; // int | EVE alliance ID.

try {
    $result = $apiInstance->groupsWithFallbackV1($character, $corporation, $alliance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->groupsWithFallbackV1: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mainV1**
> \Brave\NeucoreApi\Model\Character mainV1($cid)

Returns the main character of the player account to which the character ID belongs.

Needs role: app-chars.<br>It is possible that an account has no main character.

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

# **mainV2**
> \Brave\NeucoreApi\Model\Character mainV2($cid)

Return the main character of the player account to which the character ID belongs.

Needs role: app-chars.<br>It is possible that an account has no main character.

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
    $result = $apiInstance->mainV2($cid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->mainV2: ', $e->getMessage(), PHP_EOL;
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

# **memberTrackingV1**
> \Brave\NeucoreApi\Model\CorporationMember[] memberTrackingV1($id, $inactive, $active)

Return corporation member tracking data.

Needs role: app-tracking

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
$id = 56; // int | EVE corporation ID.
$inactive = 56; // int | Limit to members who have been inactive for x days or longer.
$active = 56; // int | Limit to members who were active in the last x days.

try {
    $result = $apiInstance->memberTrackingV1($id, $inactive, $active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->memberTrackingV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| EVE corporation ID. |
 **inactive** | **int**| Limit to members who have been inactive for x days or longer. | [optional]
 **active** | **int**| Limit to members who were active in the last x days. | [optional]

### Return type

[**\Brave\NeucoreApi\Model\CorporationMember[]**](../Model/CorporationMember.md)

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

