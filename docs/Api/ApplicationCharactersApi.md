# Brave\NeucoreApi\ApplicationCharactersApi

All URIs are relative to https://localhost/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**characterListV1()**](ApplicationCharactersApi.md#characterListV1) | **POST** /app/v1/character-list | Returns all known characters from the parameter list. |
| [**charactersBulkV1()**](ApplicationCharactersApi.md#charactersBulkV1) | **POST** /app/v1/characters | Returns all characters from multiple player accounts identified by character IDs. |
| [**charactersV1()**](ApplicationCharactersApi.md#charactersV1) | **GET** /app/v1/characters/{characterId} | Returns all characters of the player account to which the character ID belongs. |
| [**corporationCharactersV1()**](ApplicationCharactersApi.md#corporationCharactersV1) | **GET** /app/v1/corp-characters/{corporationId} | Returns a list of all known characters from the corporation. |
| [**corporationPlayersV1()**](ApplicationCharactersApi.md#corporationPlayersV1) | **GET** /app/v1/corp-players/{corporationId} | Returns a list of all players that have a character in the corporation. |
| [**incomingCharactersV1()**](ApplicationCharactersApi.md#incomingCharactersV1) | **GET** /app/v1/incoming-characters/{characterId} | Returns all characters that were moved from another account to the player account to which the                     ID belongs. |
| [**mainV1()**](ApplicationCharactersApi.md#mainV1) | **GET** /app/v1/main/{cid} | Returns the main character of the player account to which the character ID belongs. |
| [**mainV2()**](ApplicationCharactersApi.md#mainV2) | **GET** /app/v2/main/{cid} | Returns the main character of the player account to which the character ID belongs. |
| [**playerCharactersV1()**](ApplicationCharactersApi.md#playerCharactersV1) | **GET** /app/v1/player-chars/{playerId} | Returns all characters from the player account. |
| [**playerV1()**](ApplicationCharactersApi.md#playerV1) | **GET** /app/v1/player/{characterId} | Returns the player account to which the character ID belongs. |
| [**playerWithCharactersV1()**](ApplicationCharactersApi.md#playerWithCharactersV1) | **GET** /app/v1/player-with-characters/{characterId} | Returns the player account to which the character ID belongs with all characters. |
| [**playersV1()**](ApplicationCharactersApi.md#playersV1) | **POST** /app/v1/players | Returns player accounts identified by character IDs. |
| [**removedCharactersV1()**](ApplicationCharactersApi.md#removedCharactersV1) | **GET** /app/v1/removed-characters/{characterId} | Returns all characters that were removed from the player account to which the character ID                     belongs. |


## `characterListV1()`

```php
characterListV1($request_body): \Brave\NeucoreApi\Model\Character[]
```

Returns all known characters from the parameter list.

Needs role: app-chars.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array(56); // int[] | Array with EVE character IDs.

try {
    $result = $apiInstance->characterListV1($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationCharactersApi->characterListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**int[]**](../Model/int.md)| Array with EVE character IDs. | |

### Return type

[**\Brave\NeucoreApi\Model\Character[]**](../Model/Character.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `charactersBulkV1()`

```php
charactersBulkV1($request_body): int[][]
```

Returns all characters from multiple player accounts identified by character IDs.

Needs role: app-chars.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array(56); // int[] | EVE character IDs array.

try {
    $result = $apiInstance->charactersBulkV1($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationCharactersApi->charactersBulkV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**int[]**](../Model/int.md)| EVE character IDs array. | |

### Return type

**int[][]**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `charactersV1()`

```php
charactersV1($character_id): \Brave\NeucoreApi\Model\Character[]
```

Returns all characters of the player account to which the character ID belongs.

Needs role: app-chars.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | EVE character ID.

try {
    $result = $apiInstance->charactersV1($character_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationCharactersApi->charactersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| EVE character ID. | |

### Return type

[**\Brave\NeucoreApi\Model\Character[]**](../Model/Character.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `corporationCharactersV1()`

```php
corporationCharactersV1($corporation_id): \Brave\NeucoreApi\Model\Character[]
```

Returns a list of all known characters from the corporation.

Needs role: app-chars.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | EVE corporation ID.

try {
    $result = $apiInstance->corporationCharactersV1($corporation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationCharactersApi->corporationCharactersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| EVE corporation ID. | |

### Return type

[**\Brave\NeucoreApi\Model\Character[]**](../Model/Character.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `corporationPlayersV1()`

```php
corporationPlayersV1($corporation_id): \Brave\NeucoreApi\Model\Player[]
```

Returns a list of all players that have a character in the corporation.

Needs role: app-chars.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | EVE corporation ID.

try {
    $result = $apiInstance->corporationPlayersV1($corporation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationCharactersApi->corporationPlayersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| EVE corporation ID. | |

### Return type

[**\Brave\NeucoreApi\Model\Player[]**](../Model/Player.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incomingCharactersV1()`

```php
incomingCharactersV1($character_id): \Brave\NeucoreApi\Model\RemovedCharacter[]
```

Returns all characters that were moved from another account to the player account to which the                     ID belongs.

Needs role: app-chars.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | EVE character ID.

try {
    $result = $apiInstance->incomingCharactersV1($character_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationCharactersApi->incomingCharactersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| EVE character ID. | |

### Return type

[**\Brave\NeucoreApi\Model\RemovedCharacter[]**](../Model/RemovedCharacter.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mainV1()`

```php
mainV1($cid): \Brave\NeucoreApi\Model\Character
```

Returns the main character of the player account to which the character ID belongs.

Needs role: app-chars.<br>It is possible that an account has no main character.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cid = 56; // int | EVE character ID.

try {
    $result = $apiInstance->mainV1($cid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationCharactersApi->mainV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cid** | **int**| EVE character ID. | |

### Return type

[**\Brave\NeucoreApi\Model\Character**](../Model/Character.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mainV2()`

```php
mainV2($cid): \Brave\NeucoreApi\Model\Character
```

Returns the main character of the player account to which the character ID belongs.

Needs role: app-chars.<br>It is possible that an account has no main character.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cid = 56; // int | EVE character ID.

try {
    $result = $apiInstance->mainV2($cid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationCharactersApi->mainV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cid** | **int**| EVE character ID. | |

### Return type

[**\Brave\NeucoreApi\Model\Character**](../Model/Character.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `playerCharactersV1()`

```php
playerCharactersV1($player_id): \Brave\NeucoreApi\Model\Character[]
```

Returns all characters from the player account.

Needs role: app-chars.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$player_id = 56; // int | Player ID.

try {
    $result = $apiInstance->playerCharactersV1($player_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationCharactersApi->playerCharactersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **player_id** | **int**| Player ID. | |

### Return type

[**\Brave\NeucoreApi\Model\Character[]**](../Model/Character.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `playerV1()`

```php
playerV1($character_id): \Brave\NeucoreApi\Model\Player
```

Returns the player account to which the character ID belongs.

Needs role: app-chars.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | EVE character ID.

try {
    $result = $apiInstance->playerV1($character_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationCharactersApi->playerV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| EVE character ID. | |

### Return type

[**\Brave\NeucoreApi\Model\Player**](../Model/Player.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `playerWithCharactersV1()`

```php
playerWithCharactersV1($character_id): \Brave\NeucoreApi\Model\Player
```

Returns the player account to which the character ID belongs with all characters.

Needs role: app-chars.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | EVE character ID.

try {
    $result = $apiInstance->playerWithCharactersV1($character_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationCharactersApi->playerWithCharactersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| EVE character ID. | |

### Return type

[**\Brave\NeucoreApi\Model\Player**](../Model/Player.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `playersV1()`

```php
playersV1($request_body): \Brave\NeucoreApi\Model\Player[]
```

Returns player accounts identified by character IDs.

Needs role: app-chars.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array(56); // int[] | EVE character IDs array.

try {
    $result = $apiInstance->playersV1($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationCharactersApi->playersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**int[]**](../Model/int.md)| EVE character IDs array. | |

### Return type

[**\Brave\NeucoreApi\Model\Player[]**](../Model/Player.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removedCharactersV1()`

```php
removedCharactersV1($character_id): \Brave\NeucoreApi\Model\RemovedCharacter[]
```

Returns all characters that were removed from the player account to which the character ID                     belongs.

Needs role: app-chars.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Brave\NeucoreApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Brave\NeucoreApi\Api\ApplicationCharactersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | EVE character ID.

try {
    $result = $apiInstance->removedCharactersV1($character_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationCharactersApi->removedCharactersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| EVE character ID. | |

### Return type

[**\Brave\NeucoreApi\Model\RemovedCharacter[]**](../Model/RemovedCharacter.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
