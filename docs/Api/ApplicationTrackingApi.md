# Brave\NeucoreApi\ApplicationTrackingApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**memberTrackingV1**](ApplicationTrackingApi.md#memberTrackingV1) | **GET** /app/v1/corporation/{id}/member-tracking | Return corporation member tracking data.



## memberTrackingV1

> \Brave\NeucoreApi\Model\CorporationMember[] memberTrackingV1($id, $inactive, $active, $account)

Return corporation member tracking data.

Needs role: app-tracking

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationTrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | EVE corporation ID.
$inactive = 56; // int | Limit to members who have been inactive for x days or longer.
$active = 56; // int | Limit to members who were active in the last x days.
$account = 'account_example'; // string | Limit to members with (true) or without (false) an account.

try {
    $result = $apiInstance->memberTrackingV1($id, $inactive, $active, $account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationTrackingApi->memberTrackingV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| EVE corporation ID. |
 **inactive** | **int**| Limit to members who have been inactive for x days or longer. | [optional]
 **active** | **int**| Limit to members who were active in the last x days. | [optional]
 **account** | **string**| Limit to members with (true) or without (false) an account. | [optional]

### Return type

[**\Brave\NeucoreApi\Model\CorporationMember[]**](../Model/CorporationMember.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

