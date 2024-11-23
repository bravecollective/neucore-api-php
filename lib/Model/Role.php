<?php
/**
 * Role
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Brave\NeucoreApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Neucore API
 *
 * Client library of Neucore API
 *
 * The version of the OpenAPI document: 2.4.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Brave\NeucoreApi\Model;
use \Brave\NeucoreApi\ObjectSerializer;

/**
 * Role Class Doc Comment
 *
 * @category Class
 * @description Roles are used to determined player permissions.
 * @package  Brave\NeucoreApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Role
{
    /**
     * Possible values of this enum
     */
    public const APP = 'app';

    public const APP_GROUPS = 'app-groups';

    public const APP_CHARS = 'app-chars';

    public const APP_TRACKING = 'app-tracking';

    public const APP_ESI_LOGIN = 'app-esi-login';

    public const APP_ESI_PROXY = 'app-esi-proxy';

    public const APP_ESI_TOKEN = 'app-esi-token';

    public const USER = 'user';

    public const USER_ADMIN = 'user-admin';

    public const USER_MANAGER = 'user-manager';

    public const USER_CHARS = 'user-chars';

    public const GROUP_ADMIN = 'group-admin';

    public const GROUP_MANAGER = 'group-manager';

    public const APP_ADMIN = 'app-admin';

    public const APP_MANAGER = 'app-manager';

    public const PLUGIN_ADMIN = 'plugin-admin';

    public const STATISTICS = 'statistics';

    public const ESI = 'esi';

    public const SETTINGS = 'settings';

    public const TRACKING = 'tracking';

    public const TRACKING_ADMIN = 'tracking-admin';

    public const WATCHLIST = 'watchlist';

    public const WATCHLIST_MANAGER = 'watchlist-manager';

    public const WATCHLIST_ADMIN = 'watchlist-admin';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::APP,
            self::APP_GROUPS,
            self::APP_CHARS,
            self::APP_TRACKING,
            self::APP_ESI_LOGIN,
            self::APP_ESI_PROXY,
            self::APP_ESI_TOKEN,
            self::USER,
            self::USER_ADMIN,
            self::USER_MANAGER,
            self::USER_CHARS,
            self::GROUP_ADMIN,
            self::GROUP_MANAGER,
            self::APP_ADMIN,
            self::APP_MANAGER,
            self::PLUGIN_ADMIN,
            self::STATISTICS,
            self::ESI,
            self::SETTINGS,
            self::TRACKING,
            self::TRACKING_ADMIN,
            self::WATCHLIST,
            self::WATCHLIST_MANAGER,
            self::WATCHLIST_ADMIN
        ];
    }
}


