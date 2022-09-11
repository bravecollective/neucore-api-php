# Brave\NeucoreApi\ApplicationESIApi

All URIs are relative to https://localhost/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**esiEveLoginCharactersV1()**](ApplicationESIApi.md#esiEveLoginCharactersV1) | **GET** /app/v1/esi/eve-login/{name}/characters | Returns character IDs of characters that have an ESI token (including invalid) of an EVE login. |
| [**esiEveLoginTokenDataV1()**](ApplicationESIApi.md#esiEveLoginTokenDataV1) | **GET** /app/v1/esi/eve-login/{name}/token-data | Returns data of valid tokens for an EVE login. |
| [**esiPostV1()**](ApplicationESIApi.md#esiPostV1) | **POST** /app/v1/esi | See POST /app/v2/esi |
| [**esiPostV2()**](ApplicationESIApi.md#esiPostV2) | **POST** /app/v2/esi | Same as GET /app/v2/esi, but for POST requests. |
| [**esiV1()**](ApplicationESIApi.md#esiV1) | **GET** /app/v1/esi | See GET /app/v2/esi |
| [**esiV2()**](ApplicationESIApi.md#esiV2) | **GET** /app/v2/esi | Makes an ESI GET request on behalf on an EVE character and returns the result. |


## `esiEveLoginCharactersV1()`

```php
esiEveLoginCharactersV1($name): int[]
```

Returns character IDs of characters that have an ESI token (including invalid) of an EVE login.

Needs role: app-esi.

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

Returns data of valid tokens for an EVE login.

Needs role: app-esi.

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
esiPostV1($esi_path_query, $datasource, $body): string
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

try {
    $result = $apiInstance->esiPostV1($esi_path_query, $datasource, $body);
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
esiPostV2($esi_path_query, $datasource, $body): string
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

try {
    $result = $apiInstance->esiPostV2($esi_path_query, $datasource, $body);
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
esiV1($esi_path_query, $datasource): string
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

try {
    $result = $apiInstance->esiV1($esi_path_query, $datasource);
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
esiV2($esi_path_query, $datasource): string
```

Makes an ESI GET request on behalf on an EVE character and returns the result.

Needs role: app-esi<br>      *         Public ESI routes are not allowed.<br>      *         The following headers from ESI are passed through to the response if they exist:                Content-Type Expires X-Esi-Error-Limit-Remain X-Esi-Error-Limit-Reset X-Pages warning, Warning<br>      *         The HTTP status code from ESI is also passed through, so there may be more than the documented ones.<br>      *         The ESI path and query parameters can alternatively be appended to the path of this endpoint,                this allows to use OpenAPI clients that were generated for the ESI API,                see doc/api-examples for more.

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
$datasource = 'datasource_example'; // string | The EVE character ID those token should be used to make the ESI request. Optionally                             followed by a colon and the name of an EVE login to use an alternative ESI token.

try {
    $result = $apiInstance->esiV2($esi_path_query, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationESIApi->esiV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **esi_path_query** | **string**| The ESI path and query string (without the datasource parameter). | |
| **datasource** | **string**| The EVE character ID those token should be used to make the ESI request. Optionally                             followed by a colon and the name of an EVE login to use an alternative ESI token. | |

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
