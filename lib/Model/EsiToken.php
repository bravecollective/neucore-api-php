<?php
/**
 * EsiToken
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
 * The version of the OpenAPI document: 1.33.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Brave\NeucoreApi\Model;

use \ArrayAccess;
use \Brave\NeucoreApi\ObjectSerializer;

/**
 * EsiToken Class Doc Comment
 *
 * @category Class
 * @package  Brave\NeucoreApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EsiToken implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EsiToken';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'eve_login_id' => 'int',
        'valid_token' => 'bool',
        'valid_token_time' => '\DateTime',
        'has_roles' => 'bool',
        'last_checked' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'eve_login_id' => null,
        'valid_token' => null,
        'valid_token_time' => 'date-time',
        'has_roles' => null,
        'last_checked' => 'date-time'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'eve_login_id' => 'eveLoginId',
        'valid_token' => 'validToken',
        'valid_token_time' => 'validTokenTime',
        'has_roles' => 'hasRoles',
        'last_checked' => 'lastChecked'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'eve_login_id' => 'setEveLoginId',
        'valid_token' => 'setValidToken',
        'valid_token_time' => 'setValidTokenTime',
        'has_roles' => 'setHasRoles',
        'last_checked' => 'setLastChecked'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'eve_login_id' => 'getEveLoginId',
        'valid_token' => 'getValidToken',
        'valid_token_time' => 'getValidTokenTime',
        'has_roles' => 'getHasRoles',
        'last_checked' => 'getLastChecked'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['eve_login_id'] = $data['eve_login_id'] ?? null;
        $this->container['valid_token'] = $data['valid_token'] ?? null;
        $this->container['valid_token_time'] = $data['valid_token_time'] ?? null;
        $this->container['has_roles'] = $data['has_roles'] ?? null;
        $this->container['last_checked'] = $data['last_checked'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['eve_login_id'] === null) {
            $invalidProperties[] = "'eve_login_id' can't be null";
        }
        if ($this->container['valid_token'] === null) {
            $invalidProperties[] = "'valid_token' can't be null";
        }
        if ($this->container['valid_token_time'] === null) {
            $invalidProperties[] = "'valid_token_time' can't be null";
        }
        if ($this->container['has_roles'] === null) {
            $invalidProperties[] = "'has_roles' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets eve_login_id
     *
     * @return int
     */
    public function getEveLoginId()
    {
        return $this->container['eve_login_id'];
    }

    /**
     * Sets eve_login_id
     *
     * @param int $eve_login_id ID of EveLogin
     *
     * @return self
     */
    public function setEveLoginId($eve_login_id)
    {
        $this->container['eve_login_id'] = $eve_login_id;

        return $this;
    }

    /**
     * Gets valid_token
     *
     * @return bool
     */
    public function getValidToken()
    {
        return $this->container['valid_token'];
    }

    /**
     * Sets valid_token
     *
     * @param bool $valid_token Shows if the refresh token is valid or not.  This is null if there is no refresh token (EVE SSOv1 only) or a valid token but without scopes (SSOv2).
     *
     * @return self
     */
    public function setValidToken($valid_token)
    {
        $this->container['valid_token'] = $valid_token;

        return $this;
    }

    /**
     * Gets valid_token_time
     *
     * @return \DateTime
     */
    public function getValidTokenTime()
    {
        return $this->container['valid_token_time'];
    }

    /**
     * Sets valid_token_time
     *
     * @param \DateTime $valid_token_time Date and time when the valid token property was last changed.
     *
     * @return self
     */
    public function setValidTokenTime($valid_token_time)
    {
        $this->container['valid_token_time'] = $valid_token_time;

        return $this;
    }

    /**
     * Gets has_roles
     *
     * @return bool
     */
    public function getHasRoles()
    {
        return $this->container['has_roles'];
    }

    /**
     * Sets has_roles
     *
     * @param bool $has_roles Shows if the EVE character has all required roles for the login.  Null if the login does not require any roles or if the token is invalid.
     *
     * @return self
     */
    public function setHasRoles($has_roles)
    {
        $this->container['has_roles'] = $has_roles;

        return $this;
    }

    /**
     * Gets last_checked
     *
     * @return \DateTime|null
     */
    public function getLastChecked()
    {
        return $this->container['last_checked'];
    }

    /**
     * Sets last_checked
     *
     * @param \DateTime|null $last_checked When the refresh token was last checked for validity.
     *
     * @return self
     */
    public function setLastChecked($last_checked)
    {
        $this->container['last_checked'] = $last_checked;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


