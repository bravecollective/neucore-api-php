The version numbers correspond to the Neucore version numbers.

When updating, check the generator version in .openapi-generator/VERSION, 
a new version may break backwards compatibility.

**Breaking changes**

- 1.43.0  
  Player.character_id is now an integer instead of string.
- 1.33.0  
  Needs PHP ^7.4 || ^8.0
- 1.31.1  
  Updated guzzlehttp/guzzle to ^7.3 (from ^6.2 || ^7.2)
- 1.26.0  
  Needs PHP ^7.3 || ^8.0
- 1.21.0  
  Needs PHP 7.2+
- 1.14.0  
  The API is now split into several tags. This means that there are now several Api PHP classes instead of just one,
  the methods remain the same, but they have moved to other classes.
- 1.4.0  
  Generated from OpenAPI v3 definition file.  
  The authorization configuration changed, use `setAccessToken()` instead of `setApiKey()`, see below. 

# OpenAPIClient-php

Client library of Neucore API


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "require": {
    "bravecollective/neucore-api": "^2.4"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->showV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->showV1: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://localhost/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ApplicationApi* | [**showV1**](docs/Api/ApplicationApi.md#showv1) | **GET** /app/v1/show | Show app information.
*ApplicationCharactersApi* | [**characterListV1**](docs/Api/ApplicationCharactersApi.md#characterlistv1) | **POST** /app/v1/character-list | Returns all known characters from the parameter list.
*ApplicationCharactersApi* | [**charactersBulkV1**](docs/Api/ApplicationCharactersApi.md#charactersbulkv1) | **POST** /app/v1/characters | Returns all characters from multiple player accounts identified by character IDs.
*ApplicationCharactersApi* | [**charactersV1**](docs/Api/ApplicationCharactersApi.md#charactersv1) | **GET** /app/v1/characters/{characterId} | Returns all characters of the player account to which the character ID belongs.
*ApplicationCharactersApi* | [**corporationCharactersV1**](docs/Api/ApplicationCharactersApi.md#corporationcharactersv1) | **GET** /app/v1/corp-characters/{corporationId} | Returns a list of all known characters from the corporation.
*ApplicationCharactersApi* | [**corporationPlayersV1**](docs/Api/ApplicationCharactersApi.md#corporationplayersv1) | **GET** /app/v1/corp-players/{corporationId} | Returns a list of all players that have a character in the corporation.
*ApplicationCharactersApi* | [**incomingCharactersV1**](docs/Api/ApplicationCharactersApi.md#incomingcharactersv1) | **GET** /app/v1/incoming-characters/{characterId} | Returns all characters that were moved from another account to the player account to which the                     ID belongs.
*ApplicationCharactersApi* | [**mainV1**](docs/Api/ApplicationCharactersApi.md#mainv1) | **GET** /app/v1/main/{cid} | Returns the main character of the player account to which the character ID belongs.
*ApplicationCharactersApi* | [**mainV2**](docs/Api/ApplicationCharactersApi.md#mainv2) | **GET** /app/v2/main/{cid} | Returns the main character of the player account to which the character ID belongs.
*ApplicationCharactersApi* | [**playerCharactersV1**](docs/Api/ApplicationCharactersApi.md#playercharactersv1) | **GET** /app/v1/player-chars/{playerId} | Returns all characters from the player account.
*ApplicationCharactersApi* | [**playerV1**](docs/Api/ApplicationCharactersApi.md#playerv1) | **GET** /app/v1/player/{characterId} | Returns the player account to which the character ID belongs.
*ApplicationCharactersApi* | [**playerWithCharactersV1**](docs/Api/ApplicationCharactersApi.md#playerwithcharactersv1) | **GET** /app/v1/player-with-characters/{characterId} | Returns the player account to which the character ID belongs with all characters.
*ApplicationCharactersApi* | [**playersV1**](docs/Api/ApplicationCharactersApi.md#playersv1) | **POST** /app/v1/players | Returns player accounts identified by character IDs. Can contain the same player several times.
*ApplicationCharactersApi* | [**removedCharactersV1**](docs/Api/ApplicationCharactersApi.md#removedcharactersv1) | **GET** /app/v1/removed-characters/{characterId} | Returns all characters that were removed from the player account to which the character ID                     belongs.
*ApplicationESIApi* | [**esiAccessTokenV1**](docs/Api/ApplicationESIApi.md#esiaccesstokenv1) | **GET** /app/v1/esi/access-token/{characterId} | Returns an access token for a character and EVE login.
*ApplicationESIApi* | [**esiEveLoginCharactersV1**](docs/Api/ApplicationESIApi.md#esievelogincharactersv1) | **GET** /app/v1/esi/eve-login/{name}/characters | Returns character IDs of characters that have an ESI token (including invalid) of an EVE login.
*ApplicationESIApi* | [**esiEveLoginTokenDataV1**](docs/Api/ApplicationESIApi.md#esievelogintokendatav1) | **GET** /app/v1/esi/eve-login/{name}/token-data | Returns data for all valid tokens (roles are also checked if applicable) for an EVE login.
*ApplicationESIApi* | [**esiPostV1**](docs/Api/ApplicationESIApi.md#esipostv1) | **POST** /app/v1/esi | See POST /app/v2/esi
*ApplicationESIApi* | [**esiPostV2**](docs/Api/ApplicationESIApi.md#esipostv2) | **POST** /app/v2/esi | Same as GET /app/v2/esi, but for POST requests.
*ApplicationESIApi* | [**esiV1**](docs/Api/ApplicationESIApi.md#esiv1) | **GET** /app/v1/esi | See GET /app/v2/esi
*ApplicationESIApi* | [**esiV2**](docs/Api/ApplicationESIApi.md#esiv2) | **GET** /app/v2/esi | Makes an ESI GET request on behalf on an EVE character and returns the result.
*ApplicationGroupsApi* | [**allianceGroupsBulkV1**](docs/Api/ApplicationGroupsApi.md#alliancegroupsbulkv1) | **POST** /app/v1/alliance-groups | Return groups of multiple alliances.
*ApplicationGroupsApi* | [**allianceGroupsV1**](docs/Api/ApplicationGroupsApi.md#alliancegroupsv1) | **GET** /app/v1/alliance-groups/{aid} | Return groups of the alliance.
*ApplicationGroupsApi* | [**allianceGroupsV2**](docs/Api/ApplicationGroupsApi.md#alliancegroupsv2) | **GET** /app/v2/alliance-groups/{aid} | Return groups of the alliance.
*ApplicationGroupsApi* | [**corpGroupsBulkV1**](docs/Api/ApplicationGroupsApi.md#corpgroupsbulkv1) | **POST** /app/v1/corp-groups | Return groups of multiple corporations.
*ApplicationGroupsApi* | [**corpGroupsV1**](docs/Api/ApplicationGroupsApi.md#corpgroupsv1) | **GET** /app/v1/corp-groups/{cid} | Return groups of the corporation.
*ApplicationGroupsApi* | [**corpGroupsV2**](docs/Api/ApplicationGroupsApi.md#corpgroupsv2) | **GET** /app/v2/corp-groups/{cid} | Return groups of the corporation.
*ApplicationGroupsApi* | [**groupMembersV1**](docs/Api/ApplicationGroupsApi.md#groupmembersv1) | **GET** /app/v1/group-members/{groupId} | Returns the main character IDs from all group members.
*ApplicationGroupsApi* | [**groupsBulkV1**](docs/Api/ApplicationGroupsApi.md#groupsbulkv1) | **POST** /app/v1/groups | Return groups of multiple players, identified by one of their character IDs.
*ApplicationGroupsApi* | [**groupsV1**](docs/Api/ApplicationGroupsApi.md#groupsv1) | **GET** /app/v1/groups/{cid} | Return groups of the character&#39;s player account.
*ApplicationGroupsApi* | [**groupsV2**](docs/Api/ApplicationGroupsApi.md#groupsv2) | **GET** /app/v2/groups/{cid} | Return groups of the character&#39;s player account.
*ApplicationGroupsApi* | [**groupsWithFallbackV1**](docs/Api/ApplicationGroupsApi.md#groupswithfallbackv1) | **GET** /app/v1/groups-with-fallback | Returns groups from the character&#39;s account, if available, or the corporation and alliance.
*ApplicationTrackingApi* | [**memberTrackingV1**](docs/Api/ApplicationTrackingApi.md#membertrackingv1) | **GET** /app/v1/corporation/{id}/member-tracking | Return corporation member tracking data.

## Models

- [Alliance](docs/Model/Alliance.md)
- [App](docs/Model/App.md)
- [Character](docs/Model/Character.md)
- [CharacterGroups](docs/Model/CharacterGroups.md)
- [CharacterNameChange](docs/Model/CharacterNameChange.md)
- [Corporation](docs/Model/Corporation.md)
- [CorporationMember](docs/Model/CorporationMember.md)
- [EsiAccessToken](docs/Model/EsiAccessToken.md)
- [EsiLocation](docs/Model/EsiLocation.md)
- [EsiToken](docs/Model/EsiToken.md)
- [EsiTokenData](docs/Model/EsiTokenData.md)
- [EsiType](docs/Model/EsiType.md)
- [EveLogin](docs/Model/EveLogin.md)
- [Group](docs/Model/Group.md)
- [GroupApplication](docs/Model/GroupApplication.md)
- [HourlyAppRequests](docs/Model/HourlyAppRequests.md)
- [MonthlyAppRequests](docs/Model/MonthlyAppRequests.md)
- [Player](docs/Model/Player.md)
- [PlayerLoginStatistics](docs/Model/PlayerLoginStatistics.md)
- [PlayerWithCharcterId](docs/Model/PlayerWithCharcterId.md)
- [Plugin](docs/Model/Plugin.md)
- [PluginConfigurationDatabase](docs/Model/PluginConfigurationDatabase.md)
- [PluginConfigurationFile](docs/Model/PluginConfigurationFile.md)
- [PluginConfigurationURL](docs/Model/PluginConfigurationURL.md)
- [RemovedCharacter](docs/Model/RemovedCharacter.md)
- [Role](docs/Model/Role.md)
- [SearchResult](docs/Model/SearchResult.md)
- [ServiceAccount](docs/Model/ServiceAccount.md)
- [SystemVariable](docs/Model/SystemVariable.md)
- [TotalDailyAppRequests](docs/Model/TotalDailyAppRequests.md)
- [TotalMonthlyAppRequests](docs/Model/TotalMonthlyAppRequests.md)
- [Watchlist](docs/Model/Watchlist.md)

## Authorization

Authentication schemes defined for the API:
### BearerAuth

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.4.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
