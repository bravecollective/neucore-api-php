# Brave\NeucoreApi\ApplicationESIApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**esiPostV1**](ApplicationESIApi.md#esiPostV1) | **POST** /app/v1/esi | Same as GET /app/v1/esi, but for POST requests.
[**esiV1**](ApplicationESIApi.md#esiV1) | **GET** /app/v1/esi | Makes an ESI GET request on behalf on an EVE character and returns the result.



## esiPostV1

> string esiPostV1($esi_path_query, $datasource, $body)

Same as GET /app/v1/esi, but for POST requests.

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
$datasource = 'datasource_example'; // string | The EVE character ID those token should be used to make the ESI request
$body = 'body_example'; // string | JSON encoded data.

try {
    $result = $apiInstance->esiPostV1($esi_path_query, $datasource, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationESIApi->esiPostV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **esi_path_query** | **string**| The ESI path and query string (without the datasource parameter). |
 **datasource** | **string**| The EVE character ID those token should be used to make the ESI request |
 **body** | **string**| JSON encoded data. |

### Return type

**string**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: text/plain
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## esiV1

> string esiV1($esi_path_query, $datasource)

Makes an ESI GET request on behalf on an EVE character and returns the result.

Needs role: app-esi<br>      *         Public ESI routes are not allowed.<br>      *         The following headers from ESI are passed through to the response if they exist:                Content-Type Expires X-Esi-Error-Limit-Remain X-Esi-Error-Limit-Reset X-Pages warning, Warning<br>      *         The HTTP status code from ESI is also passed through, so there may be more than the documented ones.<br>      *         The ESI path and query parameters can alternatively be appended to the path of this endpoint,                this allows to use OpenAPI clients that were generated for the ESI API,                see doc/app-esi-examples.php for more.

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
$datasource = 'datasource_example'; // string | The EVE character ID those token should be used to make the ESI request

try {
    $result = $apiInstance->esiV1($esi_path_query, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationESIApi->esiV1: ', $e->getMessage(), PHP_EOL;
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

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

