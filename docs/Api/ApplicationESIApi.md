# Brave\NeucoreApi\ApplicationESIApi

All URIs are relative to https://localhost/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**esiAccessTokenV1()**](ApplicationESIApi.md#esiAccessTokenV1) | **GET** /app/v1/esi/access-token/{characterId} | Returns an access token for a character and EVE login. |
| [**esiEveLoginCharactersV1()**](ApplicationESIApi.md#esiEveLoginCharactersV1) | **GET** /app/v1/esi/eve-login/{name}/characters | Returns character IDs of characters that have an ESI token (including invalid) of an EVE login. |
| [**esiEveLoginTokenDataV1()**](ApplicationESIApi.md#esiEveLoginTokenDataV1) | **GET** /app/v1/esi/eve-login/{name}/token-data | Returns data for all valid tokens (roles are also checked if applicable) for an EVE login. |
| [**esiPostV1()**](ApplicationESIApi.md#esiPostV1) | **POST** /app/v1/esi | See POST /app/v2/esi |
| [**esiPostV2()**](ApplicationESIApi.md#esiPostV2) | **POST** /app/v2/esi | Same as GET /app/v2/esi, but for POST requests. |
| [**esiV1()**](ApplicationESIApi.md#esiV1) | **GET** /app/v1/esi | See GET /app/v2/esi |
| [**esiV2()**](ApplicationESIApi.md#esiV2) | **GET** /app/v2/esi | Makes an ESI GET request on behalf on an EVE character and returns the result. |


## `esiAccessTokenV1()`

```php
esiAccessTokenV1($character_id, $eve_login_name): \Brave\NeucoreApi\Model\EsiAccessToken
```

Returns an access token for a character and EVE login.

Needs role: app-esi-token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationESIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | The EVE character ID.
$eve_login_name = 'eve_login_name_example'; // string | Optional EVE login name, defaults to 'core.default'.

try {
    $result = $apiInstance->esiAccessTokenV1($character_id, $eve_login_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationESIApi->esiAccessTokenV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| The EVE character ID. | |
| **eve_login_name** | **string**| Optional EVE login name, defaults to &#39;core.default&#39;. | [optional] |

### Return type

[**\Brave\NeucoreApi\Model\EsiAccessToken**](../Model/EsiAccessToken.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `esiEveLoginCharactersV1()`

```php
esiEveLoginCharactersV1($name): int[]
```

Returns character IDs of characters that have an ESI token (including invalid) of an EVE login.

Needs role: app-esi-login.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationESIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | EVE login name.

try {
    $result = $apiInstance->esiEveLoginCharactersV1($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationESIApi->esiEveLoginCharactersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| EVE login name. | |

### Return type

**int[]**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `esiEveLoginTokenDataV1()`

```php
esiEveLoginTokenDataV1($name): \Brave\NeucoreApi\Model\EsiTokenData[]
```

Returns data for all valid tokens (roles are also checked if applicable) for an EVE login.

Needs role: app-esi-login.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationESIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | EVE login name, 'core.default' is not allowed.

try {
    $result = $apiInstance->esiEveLoginTokenDataV1($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationESIApi->esiEveLoginTokenDataV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| EVE login name, &#39;core.default&#39; is not allowed. | |

### Return type

[**\Brave\NeucoreApi\Model\EsiTokenData[]**](../Model/EsiTokenData.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `esiPostV1()`

```php
esiPostV1($esi_path_query, $datasource, $body, $neucore_eve_character, $neucore_eve_login): string
```

See POST /app/v2/esi

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationESIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$esi_path_query = 'esi_path_query_example'; // string
$datasource = 'datasource_example'; // string
$body = 'body_example'; // string | 
$neucore_eve_character = 'neucore_eve_character_example'; // string | The EVE character ID those token should be used. Has priority over the query      *                       parameter 'datasource'
$neucore_eve_login = 'neucore_eve_login_example'; // string | The EVE login name from which the token should be used, defaults to core.default.

try {
    $result = $apiInstance->esiPostV1($esi_path_query, $datasource, $body, $neucore_eve_character, $neucore_eve_login);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationESIApi->esiPostV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **esi_path_query** | **string**|  | |
| **datasource** | **string**|  | |
| **body** | **string**|  | |
| **neucore_eve_character** | **string**| The EVE character ID those token should be used. Has priority over the query      *                       parameter &#39;datasource&#39; | [optional] |
| **neucore_eve_login** | **string**| The EVE login name from which the token should be used, defaults to core.default. | [optional] |

### Return type

**string**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `text/plain`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `esiPostV2()`

```php
esiPostV2($esi_path_query, $datasource, $body, $neucore_eve_character, $neucore_eve_login): string
```

Same as GET /app/v2/esi, but for POST requests.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationESIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$esi_path_query = 'esi_path_query_example'; // string
$datasource = 'datasource_example'; // string
$body = 'body_example'; // string | JSON encoded data.
$neucore_eve_character = 'neucore_eve_character_example'; // string | The EVE character ID those token should be used. Has priority over the query      *                       parameter 'datasource'
$neucore_eve_login = 'neucore_eve_login_example'; // string | The EVE login name from which the token should be used, defaults to core.default.

try {
    $result = $apiInstance->esiPostV2($esi_path_query, $datasource, $body, $neucore_eve_character, $neucore_eve_login);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationESIApi->esiPostV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **esi_path_query** | **string**|  | |
| **datasource** | **string**|  | |
| **body** | **string**| JSON encoded data. | |
| **neucore_eve_character** | **string**| The EVE character ID those token should be used. Has priority over the query      *                       parameter &#39;datasource&#39; | [optional] |
| **neucore_eve_login** | **string**| The EVE login name from which the token should be used, defaults to core.default. | [optional] |

### Return type

**string**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `text/plain`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `esiV1()`

```php
esiV1($esi_path_query, $datasource, $neucore_eve_character, $neucore_eve_login): string
```

See GET /app/v2/esi

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationESIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$esi_path_query = 'esi_path_query_example'; // string
$datasource = 'datasource_example'; // string
$neucore_eve_character = 'neucore_eve_character_example'; // string | The EVE character ID those token should be used. Has priority over the query      *                       parameter 'datasource'
$neucore_eve_login = 'neucore_eve_login_example'; // string | The EVE login name from which the token should be used, defaults to core.default.

try {
    $result = $apiInstance->esiV1($esi_path_query, $datasource, $neucore_eve_character, $neucore_eve_login);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationESIApi->esiV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **esi_path_query** | **string**|  | |
| **datasource** | **string**|  | |
| **neucore_eve_character** | **string**| The EVE character ID those token should be used. Has priority over the query      *                       parameter &#39;datasource&#39; | [optional] |
| **neucore_eve_login** | **string**| The EVE login name from which the token should be used, defaults to core.default. | [optional] |

### Return type

**string**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `esiV2()`

```php
esiV2($esi_path_query, $neucore_eve_character, $neucore_eve_login, $datasource): string
```

Makes an ESI GET request on behalf on an EVE character and returns the result.

Needs role: app-esi-proxy<br>      *         Either the header 'Neucore-EveCharacter' and optionally 'Neucore-EveLogin' or the query parameter                'datasource' is required.<br>      *         Public ESI routes are not allowed.<br>      *         The following headers from ESI are passed through to the response if they exist:                Content-Type Expires X-Esi-Error-Limit-Remain X-Esi-Error-Limit-Reset X-Pages warning, Warning<br>      *         The HTTP status code from ESI is also passed through, so there may be more than the documented ones.<br>      *         The ESI path and query parameters can alternatively be appended to the path of this endpoint,                this allows to use OpenAPI clients that were generated for the ESI API,                see doc/api-examples for more.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationESIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$esi_path_query = 'esi_path_query_example'; // string | The ESI path and query string (without the datasource parameter).
$neucore_eve_character = 'neucore_eve_character_example'; // string | The EVE character ID those token should be used. Has priority over the query                             parameter 'datasource'
$neucore_eve_login = 'neucore_eve_login_example'; // string | The EVE login name from which the token should be used, defaults to core.default.
$datasource = 'datasource_example'; // string | The EVE character ID those token should be used from the default login to make the ESI                             request. Optionally followed by a colon and the name of an EVE login to use an alternative                             ESI token.

try {
    $result = $apiInstance->esiV2($esi_path_query, $neucore_eve_character, $neucore_eve_login, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationESIApi->esiV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **esi_path_query** | **string**| The ESI path and query string (without the datasource parameter). | |
| **neucore_eve_character** | **string**| The EVE character ID those token should be used. Has priority over the query                             parameter &#39;datasource&#39; | [optional] |
| **neucore_eve_login** | **string**| The EVE login name from which the token should be used, defaults to core.default. | [optional] |
| **datasource** | **string**| The EVE character ID those token should be used from the default login to make the ESI                             request. Optionally followed by a colon and the name of an EVE login to use an alternative                             ESI token. | [optional] |

### Return type

**string**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
