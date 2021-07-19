# # Player

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_accounts** | [**\Brave\NeucoreApi\Model\ServiceAccount[]**](ServiceAccount.md) | External service accounts (API: not included by default) | [optional]
**corporation_name** | **string** | Corporation of main character (API: not included by default) | [optional]
**id** | **int** |  |
**name** | **string** | A name for the player.  This is the EVE character name of the current main character or of the last main character if there is currently none. |
**status** | **string** | Player account status. | [optional]
**roles** | [**\Brave\NeucoreApi\Model\Role[]**](Role.md) | Roles for authorization. | [optional]
**characters** | [**\Brave\NeucoreApi\Model\Character[]**](Character.md) |  | [optional]
**groups** | [**\Brave\NeucoreApi\Model\Group[]**](Group.md) | Group membership. | [optional]
**manager_groups** | [**\Brave\NeucoreApi\Model\Group[]**](Group.md) | Manager of groups. | [optional]
**manager_apps** | [**\Brave\NeucoreApi\Model\App[]**](App.md) | Manager of apps. | [optional]
**removed_characters** | [**\Brave\NeucoreApi\Model\RemovedCharacter[]**](RemovedCharacter.md) | Characters that were removed from a player (API: not included by default). | [optional]
**incoming_characters** | [**\Brave\NeucoreApi\Model\RemovedCharacter[]**](RemovedCharacter.md) | Characters that were moved from another player account to this account (API: not included by default). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
