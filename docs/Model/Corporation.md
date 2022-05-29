# # Corporation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | EVE corporation ID. |
**name** | **string** | EVE corporation name. |
**ticker** | **string** | Corporation ticker. |
**alliance** | [**\Brave\NeucoreApi\Model\Alliance**](Alliance.md) |  | [optional]
**groups** | [**\Brave\NeucoreApi\Model\Group[]**](Group.md) | Groups for automatic assignment (API: not included by default). | [optional]
**tracking_last_update** | **\DateTime** | Last update of corporation member tracking data (API: not included by default). | [optional]
**auto_allowlist** | **bool** | True if this corporation was automatically placed on the allowlist of a watchlist (API: not included by default). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
