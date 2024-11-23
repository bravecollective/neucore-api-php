# # Character

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**valid_token** | **bool** | Shows if character&#39;s default refresh token is valid or not. This is null if there is no refresh token (EVE SSOv1 only) or a valid token but without scopes (SSOv2). | [optional]
**valid_token_time** | **\DateTime** | Date and time when the valid token property of the default token was last changed. | [optional]
**token_last_checked** | **\DateTime** | Date and time when the default token was last checked. | [optional]
**id** | **int** | EVE character ID. |
**name** | **string** | EVE character name. |
**main** | **bool** |  | [optional]
**esi_tokens** | [**\Brave\NeucoreApi\Model\EsiToken[]**](EsiToken.md) | ESI tokens of the character (API: not included by default). | [optional]
**created** | **\DateTime** |  | [optional]
**last_update** | **\DateTime** | Last ESI update. | [optional]
**corporation** | [**\Brave\NeucoreApi\Model\Corporation**](Corporation.md) |  | [optional]
**character_name_changes** | [**\Brave\NeucoreApi\Model\CharacterNameChange[]**](CharacterNameChange.md) | List of previous character names (API: not included by default). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
