# # Character

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | EVE character ID. |
**name** | **string** | EVE character name. |
**main** | **bool** |  | [optional]
**valid_token** | **bool** | Shows if character&#39;s refresh token is valid or not.  This is null if there is no refresh token (EVE SSOv1 only) or a valid token but without scopes (SSOv2). | [optional]
**valid_token_time** | [**\DateTime**](\DateTime.md) | Date and time when that valid token property was last changed. | [optional]
**created** | [**\DateTime**](\DateTime.md) |  | [optional]
**last_update** | [**\DateTime**](\DateTime.md) | Last ESI update. | [optional]
**corporation** | [**\Brave\NeucoreApi\Model\Corporation**](Corporation.md) |  | [optional]
**character_name_changes** | [**\Brave\NeucoreApi\Model\CharacterNameChange[]**](CharacterNameChange.md) | List of previous character names (API: not included by default). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
