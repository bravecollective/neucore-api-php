# # PluginConfigurationDatabase

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**directory_name** | **string** | Directory where the plugin.yml file is stored.  Only from database but always set when the data from the file is read. | [optional]
**urls** | [**\Brave\NeucoreApi\Model\PluginConfigurationURL[]**](PluginConfigurationURL.md) |  |
**text_top** | **string** |  |
**text_account** | **string** |  |
**text_register** | **string** |  |
**text_pending** | **string** |  |
**configuration_data** | **string** |  |
**active** | **bool** | Inactive plugins are neither updated by the cron job nor displayed to the user.  From admin UI. | [optional]
**required_groups** | **int[]** | From admin UI. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
