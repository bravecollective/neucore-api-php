# # EsiToken

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eve_login_id** | **int** | ID of EveLogin |
**character_id** | **int** | ID of Character |
**player_id** | **int** | ID of Player |
**player_name** | **string** | Name of Player | [optional]
**character** | [**\Brave\NeucoreApi\Model\Character**](Character.md) |  | [optional]
**valid_token** | **bool** | Shows if the refresh token is valid or not.  This is null if there is no refresh token (EVE SSOv1 only) or a valid token but without scopes (SSOv2). |
**valid_token_time** | **\DateTime** | Date and time when the valid token property was last changed. |
**has_roles** | **bool** | Shows if the EVE character has all required roles for the login.  Null if the login does not require any roles or if the token is invalid. |
**last_checked** | **\DateTime** | When the refresh token was last checked for validity. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
