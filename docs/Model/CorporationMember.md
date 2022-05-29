# # CorporationMember

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**player** | [**\Brave\NeucoreApi\Model\Player**](Player.md) |  | [optional]
**id** | **int** | EVE Character ID. |
**name** | **string** | EVE Character name. |
**location** | [**\Brave\NeucoreApi\Model\EsiLocation**](EsiLocation.md) |  | [optional]
**logoff_date** | **\DateTime** |  | [optional]
**logon_date** | **\DateTime** |  | [optional]
**ship_type** | [**\Brave\NeucoreApi\Model\EsiType**](EsiType.md) |  | [optional]
**start_date** | **\DateTime** |  | [optional]
**character** | [**\Brave\NeucoreApi\Model\Character**](Character.md) |  | [optional]
**missing_character_mail_sent_date** | **\DateTime** | Date and time of the last sent mail. | [optional]
**missing_character_mail_sent_result** | **string** | Result of the last sent mail (OK, Blocked, CSPA charge &gt; 0) | [optional]
**missing_character_mail_sent_number** | **int** | Number of mails sent, is reset when the character is added. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
