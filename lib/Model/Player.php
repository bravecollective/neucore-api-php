<?php
/**
 * Player
 *
 * PHP version 7.2
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
 * The version of the OpenAPI document: 1.22.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
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
 * Player Class Doc Comment
 *
 * @category Class
 * @package  Brave\NeucoreApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Player implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Player';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'service_accounts' => '\Brave\NeucoreApi\Model\ServiceAccount[]',
        'id' => 'int',
        'name' => 'string',
        'status' => 'string',
        'roles' => '\Brave\NeucoreApi\Model\Role[]',
        'characters' => '\Brave\NeucoreApi\Model\Character[]',
        'groups' => '\Brave\NeucoreApi\Model\Group[]',
        'manager_groups' => '\Brave\NeucoreApi\Model\Group[]',
        'manager_apps' => '\Brave\NeucoreApi\Model\App[]',
        'removed_characters' => '\Brave\NeucoreApi\Model\RemovedCharacter[]',
        'incoming_characters' => '\Brave\NeucoreApi\Model\RemovedCharacter[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'service_accounts' => null,
        'id' => null,
        'name' => null,
        'status' => null,
        'roles' => null,
        'characters' => null,
        'groups' => null,
        'manager_groups' => null,
        'manager_apps' => null,
        'removed_characters' => null,
        'incoming_characters' => null
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
        'service_accounts' => 'serviceAccounts',
        'id' => 'id',
        'name' => 'name',
        'status' => 'status',
        'roles' => 'roles',
        'characters' => 'characters',
        'groups' => 'groups',
        'manager_groups' => 'managerGroups',
        'manager_apps' => 'managerApps',
        'removed_characters' => 'removedCharacters',
        'incoming_characters' => 'incomingCharacters'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'service_accounts' => 'setServiceAccounts',
        'id' => 'setId',
        'name' => 'setName',
        'status' => 'setStatus',
        'roles' => 'setRoles',
        'characters' => 'setCharacters',
        'groups' => 'setGroups',
        'manager_groups' => 'setManagerGroups',
        'manager_apps' => 'setManagerApps',
        'removed_characters' => 'setRemovedCharacters',
        'incoming_characters' => 'setIncomingCharacters'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'service_accounts' => 'getServiceAccounts',
        'id' => 'getId',
        'name' => 'getName',
        'status' => 'getStatus',
        'roles' => 'getRoles',
        'characters' => 'getCharacters',
        'groups' => 'getGroups',
        'manager_groups' => 'getManagerGroups',
        'manager_apps' => 'getManagerApps',
        'removed_characters' => 'getRemovedCharacters',
        'incoming_characters' => 'getIncomingCharacters'
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

    const STATUS_STANDARD = 'standard';
    const STATUS_MANAGED = 'managed';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_STANDARD,
            self::STATUS_MANAGED,
        ];
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
        $this->container['service_accounts'] = $data['service_accounts'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['roles'] = $data['roles'] ?? null;
        $this->container['characters'] = $data['characters'] ?? null;
        $this->container['groups'] = $data['groups'] ?? null;
        $this->container['manager_groups'] = $data['manager_groups'] ?? null;
        $this->container['manager_apps'] = $data['manager_apps'] ?? null;
        $this->container['removed_characters'] = $data['removed_characters'] ?? null;
        $this->container['incoming_characters'] = $data['incoming_characters'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
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
     * Gets service_accounts
     *
     * @return \Brave\NeucoreApi\Model\ServiceAccount[]|null
     */
    public function getServiceAccounts()
    {
        return $this->container['service_accounts'];
    }

    /**
     * Sets service_accounts
     *
     * @param \Brave\NeucoreApi\Model\ServiceAccount[]|null $service_accounts External service accounts (API: not included by default)
     *
     * @return self
     */
    public function setServiceAccounts($service_accounts)
    {
        $this->container['service_accounts'] = $service_accounts;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name A name for the player.  This is the EVE character name of the current main character or of the last main character if there is currently none.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Player account status.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return \Brave\NeucoreApi\Model\Role[]|null
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param \Brave\NeucoreApi\Model\Role[]|null $roles Roles for authorization.
     *
     * @return self
     */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets characters
     *
     * @return \Brave\NeucoreApi\Model\Character[]|null
     */
    public function getCharacters()
    {
        return $this->container['characters'];
    }

    /**
     * Sets characters
     *
     * @param \Brave\NeucoreApi\Model\Character[]|null $characters characters
     *
     * @return self
     */
    public function setCharacters($characters)
    {
        $this->container['characters'] = $characters;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return \Brave\NeucoreApi\Model\Group[]|null
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param \Brave\NeucoreApi\Model\Group[]|null $groups Group membership.
     *
     * @return self
     */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets manager_groups
     *
     * @return \Brave\NeucoreApi\Model\Group[]|null
     */
    public function getManagerGroups()
    {
        return $this->container['manager_groups'];
    }

    /**
     * Sets manager_groups
     *
     * @param \Brave\NeucoreApi\Model\Group[]|null $manager_groups Manager of groups.
     *
     * @return self
     */
    public function setManagerGroups($manager_groups)
    {
        $this->container['manager_groups'] = $manager_groups;

        return $this;
    }

    /**
     * Gets manager_apps
     *
     * @return \Brave\NeucoreApi\Model\App[]|null
     */
    public function getManagerApps()
    {
        return $this->container['manager_apps'];
    }

    /**
     * Sets manager_apps
     *
     * @param \Brave\NeucoreApi\Model\App[]|null $manager_apps Manager of apps.
     *
     * @return self
     */
    public function setManagerApps($manager_apps)
    {
        $this->container['manager_apps'] = $manager_apps;

        return $this;
    }

    /**
     * Gets removed_characters
     *
     * @return \Brave\NeucoreApi\Model\RemovedCharacter[]|null
     */
    public function getRemovedCharacters()
    {
        return $this->container['removed_characters'];
    }

    /**
     * Sets removed_characters
     *
     * @param \Brave\NeucoreApi\Model\RemovedCharacter[]|null $removed_characters Characters that were removed from a player (API: not included by default).
     *
     * @return self
     */
    public function setRemovedCharacters($removed_characters)
    {
        $this->container['removed_characters'] = $removed_characters;

        return $this;
    }

    /**
     * Gets incoming_characters
     *
     * @return \Brave\NeucoreApi\Model\RemovedCharacter[]|null
     */
    public function getIncomingCharacters()
    {
        return $this->container['incoming_characters'];
    }

    /**
     * Sets incoming_characters
     *
     * @param \Brave\NeucoreApi\Model\RemovedCharacter[]|null $incoming_characters Characters that were moved from another player account to this account (API: not included by default).
     *
     * @return self
     */
    public function setIncomingCharacters($incoming_characters)
    {
        $this->container['incoming_characters'] = $incoming_characters;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


