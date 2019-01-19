# SwaggerClient-php
Client library of Brave Collective Core Services API

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.6.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

This includes only the Application Api which should be used for
applications interacting with core.

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/bravecollective/neucore-api.git"
    }
  ],
  "require": {
    "bravecollective/neucore-api": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/application/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Brave\NeucoreApi\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array(new \Brave\NeucoreApi\Model\int[]()); // int[] | EVE alliance IDs array.

try {
    $result = $apiInstance->allianceGroupsBulkV1($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->allianceGroupsBulkV1: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://localhost/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ApplicationApi* | [**allianceGroupsBulkV1**](docs/Api/ApplicationApi.md#alliancegroupsbulkv1) | **POST** /app/v1/alliance-groups | Return groups of multiple alliances.
*ApplicationApi* | [**allianceGroupsV1**](docs/Api/ApplicationApi.md#alliancegroupsv1) | **GET** /app/v1/alliance-groups/{aid} | Return groups of the alliance.
*ApplicationApi* | [**allianceGroupsV2**](docs/Api/ApplicationApi.md#alliancegroupsv2) | **GET** /app/v2/alliance-groups/{aid} | Return groups of the alliance.
*ApplicationApi* | [**charactersV1**](docs/Api/ApplicationApi.md#charactersv1) | **GET** /app/v1/characters/{characterId} | Return all characters of the player account to which the character ID belongs.
*ApplicationApi* | [**corpGroupsBulkV1**](docs/Api/ApplicationApi.md#corpgroupsbulkv1) | **POST** /app/v1/corp-groups | Return groups of multiple corporations.
*ApplicationApi* | [**corpGroupsV1**](docs/Api/ApplicationApi.md#corpgroupsv1) | **GET** /app/v1/corp-groups/{cid} | Return groups of the corporation.
*ApplicationApi* | [**corpGroupsV2**](docs/Api/ApplicationApi.md#corpgroupsv2) | **GET** /app/v2/corp-groups/{cid} | Return groups of the corporation.
*ApplicationApi* | [**groupsBulkV1**](docs/Api/ApplicationApi.md#groupsbulkv1) | **POST** /app/v1/groups | Return groups of multiple players, identified by one of their character IDs.
*ApplicationApi* | [**groupsV1**](docs/Api/ApplicationApi.md#groupsv1) | **GET** /app/v1/groups/{cid} | Return groups of the character&#39;s player account.
*ApplicationApi* | [**groupsV2**](docs/Api/ApplicationApi.md#groupsv2) | **GET** /app/v2/groups/{cid} | Return groups of the character&#39;s player account.
*ApplicationApi* | [**mainV1**](docs/Api/ApplicationApi.md#mainv1) | **GET** /app/v1/main/{cid} | Returns the main character of the player account to which the character ID belongs.
*ApplicationApi* | [**mainV2**](docs/Api/ApplicationApi.md#mainv2) | **GET** /app/v2/main/{cid} | Return the main character of the player account to which the character ID belongs.
*ApplicationApi* | [**memberTrackingV1**](docs/Api/ApplicationApi.md#membertrackingv1) | **GET** /app/v1/corporation/{id}/member-tracking | Return corporation member tracking data.
*ApplicationApi* | [**showV1**](docs/Api/ApplicationApi.md#showv1) | **GET** /app/v1/show | Show app information.


## Documentation For Models

 - [Alliance](docs/Model/Alliance.md)
 - [App](docs/Model/App.md)
 - [Character](docs/Model/Character.md)
 - [CharacterGroups](docs/Model/CharacterGroups.md)
 - [Corporation](docs/Model/Corporation.md)
 - [CorporationMember](docs/Model/CorporationMember.md)
 - [Group](docs/Model/Group.md)
 - [Player](docs/Model/Player.md)
 - [RemovedCharacter](docs/Model/RemovedCharacter.md)
 - [Role](docs/Model/Role.md)
 - [SystemVariable](docs/Model/SystemVariable.md)


## Documentation For Authorization


## Bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header

## Author




