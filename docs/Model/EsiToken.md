# # EsiToken

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eve_login_id** | **int** | ID of EveLogin |
**valid_token** | **bool** | Shows if the refresh token is valid or not.  This is null if there is no refresh token (EVE SSOv1 only) or a valid token but without scopes (SSOv2). |
**valid_token_time** | **\DateTime** | Date and time when the valid token property was last changed. |
**has_roles** | **bool** | Shows if the EVE character has all required roles for the login.  Null if the login does not require any roles or if the token is invalid. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)