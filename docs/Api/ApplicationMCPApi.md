# Brave\NeucoreApi\ApplicationMCPApi



All URIs are relative to https://localhost/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**mcpV1()**](ApplicationMCPApi.md#mcpV1) | **POST** /app/v1/mcp | The Neucore MCP server. |


## `mcpV1()`

```php
mcpV1($mcp_protocol_version, $mcp_method, $mcp_name, $body): string
```

The Neucore MCP server.

Needs role: app-mcp.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationMCPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mcp_protocol_version = 'mcp_protocol_version_example'; // string | The MCP protocol version for this request (e.g., \"2026-07-28\").
$mcp_method = 'mcp_method_example'; // string | Must mirror the JSON-RPC method in the request body (e.g., \"tools/list\", \"tools/call\", \"server/discover\").
$mcp_name = 'mcp_name_example'; // string | Required for tools/call and prompts/get: mirrors the tool or prompt name from the body.
$body = NULL; // mixed | JSON encoded MCP request body.

try {
    $result = $apiInstance->mcpV1($mcp_protocol_version, $mcp_method, $mcp_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationMCPApi->mcpV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mcp_protocol_version** | **string**| The MCP protocol version for this request (e.g., \&quot;2026-07-28\&quot;). | |
| **mcp_method** | **string**| Must mirror the JSON-RPC method in the request body (e.g., \&quot;tools/list\&quot;, \&quot;tools/call\&quot;, \&quot;server/discover\&quot;). | |
| **mcp_name** | **string**| Required for tools/call and prompts/get: mirrors the tool or prompt name from the body. | [optional] |
| **body** | **mixed**| JSON encoded MCP request body. | [optional] |

### Return type

**string**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
