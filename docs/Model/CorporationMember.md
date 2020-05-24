# # CorporationMember

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**player** | [**\Brave\NeucoreApi\Model\Player**](Player.md) |  | [optional] 
**id** | **int** | EVE Character ID. | 
**name** | **string** | EVE Character name. | 
**location** | [**\Brave\NeucoreApi\Model\EsiLocation**](EsiLocation.md) |  | [optional] 
**logoff_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**logon_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**ship_type** | [**\Brave\NeucoreApi\Model\EsiType**](EsiType.md) |  | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**character** | [**\Brave\NeucoreApi\Model\Character**](Character.md) |  | [optional] 
**missing_character_mail_sent_date** | [**\DateTime**](\DateTime.md) | Date and time of the last sent mail. | [optional] 
**missing_character_mail_sent_result** | **string** | Result of the last sent mail (OK, Blocked, CSPA charge &gt; 0) | [optional] 
**missing_character_mail_sent_number** | **int** | Number of mails sent, is reset when the character is added. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


