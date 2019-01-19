# Player

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | 
**name** | **string** | A name for the player.  This is the EVE character name of the current main character or of the last main character if there is currently none. | 
**roles** | [**\Brave\NeucoreApi\Model\Role[]**](Role.md) | Roles for authorization. | [optional] 
**characters** | [**\Brave\NeucoreApi\Model\Character[]**](Character.md) |  | [optional] 
**applications** | [**\Brave\NeucoreApi\Model\Group[]**](Group.md) | Group applications. | [optional] 
**groups** | [**\Brave\NeucoreApi\Model\Group[]**](Group.md) | Group membership. | [optional] 
**manager_groups** | [**\Brave\NeucoreApi\Model\Group[]**](Group.md) | Manager of groups. | [optional] 
**manager_apps** | [**\Brave\NeucoreApi\Model\App[]**](App.md) | Manager of apps. | [optional] 
**removed_characters** | [**\Brave\NeucoreApi\Model\RemovedCharacter[]**](RemovedCharacter.md) | Characters that were removed from a player (API: not included by default). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


