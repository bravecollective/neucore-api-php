<?php
/**
 * PluginConfigurationFile
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
 * The version of the OpenAPI document: 1.43.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
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
 * PluginConfigurationFile Class Doc Comment
 *
 * @category Class
 * @description Plugin configuration from YAML file.  API: The required properties are necessary for the service page where users register their account. The rest is necessary for the admin page.
 * @package  Brave\NeucoreApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PluginConfigurationFile implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PluginConfigurationFile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'directory_name' => 'string',
        'urls' => '\Brave\NeucoreApi\Model\PluginConfigurationURL[]',
        'text_top' => 'string',
        'text_account' => 'string',
        'text_register' => 'string',
        'text_pending' => 'string',
        'configuration_data' => 'string',
        'name' => 'string',
        'types' => 'string[]',
        'one_account' => 'bool',
        'properties' => 'string[]',
        'show_password' => 'bool',
        'actions' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'directory_name' => null,
        'urls' => null,
        'text_top' => null,
        'text_account' => null,
        'text_register' => null,
        'text_pending' => null,
        'configuration_data' => null,
        'name' => null,
        'types' => null,
        'one_account' => null,
        'properties' => null,
        'show_password' => null,
        'actions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'directory_name' => false,
		'urls' => false,
		'text_top' => false,
		'text_account' => false,
		'text_register' => false,
		'text_pending' => false,
		'configuration_data' => false,
		'name' => false,
		'types' => false,
		'one_account' => false,
		'properties' => false,
		'show_password' => false,
		'actions' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'directory_name' => 'directoryName',
        'urls' => 'URLs',
        'text_top' => 'textTop',
        'text_account' => 'textAccount',
        'text_register' => 'textRegister',
        'text_pending' => 'textPending',
        'configuration_data' => 'configurationData',
        'name' => 'name',
        'types' => 'types',
        'one_account' => 'oneAccount',
        'properties' => 'properties',
        'show_password' => 'showPassword',
        'actions' => 'actions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'directory_name' => 'setDirectoryName',
        'urls' => 'setUrls',
        'text_top' => 'setTextTop',
        'text_account' => 'setTextAccount',
        'text_register' => 'setTextRegister',
        'text_pending' => 'setTextPending',
        'configuration_data' => 'setConfigurationData',
        'name' => 'setName',
        'types' => 'setTypes',
        'one_account' => 'setOneAccount',
        'properties' => 'setProperties',
        'show_password' => 'setShowPassword',
        'actions' => 'setActions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'directory_name' => 'getDirectoryName',
        'urls' => 'getUrls',
        'text_top' => 'getTextTop',
        'text_account' => 'getTextAccount',
        'text_register' => 'getTextRegister',
        'text_pending' => 'getTextPending',
        'configuration_data' => 'getConfigurationData',
        'name' => 'getName',
        'types' => 'getTypes',
        'one_account' => 'getOneAccount',
        'properties' => 'getProperties',
        'show_password' => 'getShowPassword',
        'actions' => 'getActions'
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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypesAllowableValues()
    {
        return [
            
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPropertiesAllowableValues()
    {
        return [
            
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionsAllowableValues()
    {
        return [
            
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
        $this->setIfExists('directory_name', $data ?? [], null);
        $this->setIfExists('urls', $data ?? [], null);
        $this->setIfExists('text_top', $data ?? [], null);
        $this->setIfExists('text_account', $data ?? [], null);
        $this->setIfExists('text_register', $data ?? [], null);
        $this->setIfExists('text_pending', $data ?? [], null);
        $this->setIfExists('configuration_data', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('types', $data ?? [], null);
        $this->setIfExists('one_account', $data ?? [], null);
        $this->setIfExists('properties', $data ?? [], null);
        $this->setIfExists('show_password', $data ?? [], null);
        $this->setIfExists('actions', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['properties'] === null) {
            $invalidProperties[] = "'properties' can't be null";
        }
        if ($this->container['actions'] === null) {
            $invalidProperties[] = "'actions' can't be null";
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
     * Gets directory_name
     *
     * @return string|null
     */
    public function getDirectoryName()
    {
        return $this->container['directory_name'];
    }

    /**
     * Sets directory_name
     *
     * @param string|null $directory_name Directory where the plugin.yml file is stored.  Only from database but always set when the data from the file is read.
     *
     * @return self
     */
    public function setDirectoryName($directory_name)
    {

        if (is_null($directory_name)) {
            throw new \InvalidArgumentException('non-nullable directory_name cannot be null');
        }

        $this->container['directory_name'] = $directory_name;

        return $this;
    }

    /**
     * Gets urls
     *
     * @return \Brave\NeucoreApi\Model\PluginConfigurationURL[]|null
     */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
     * Sets urls
     *
     * @param \Brave\NeucoreApi\Model\PluginConfigurationURL[]|null $urls urls
     *
     * @return self
     */
    public function setUrls($urls)
    {

        if (is_null($urls)) {
            throw new \InvalidArgumentException('non-nullable urls cannot be null');
        }

        $this->container['urls'] = $urls;

        return $this;
    }

    /**
     * Gets text_top
     *
     * @return string|null
     */
    public function getTextTop()
    {
        return $this->container['text_top'];
    }

    /**
     * Sets text_top
     *
     * @param string|null $text_top text_top
     *
     * @return self
     */
    public function setTextTop($text_top)
    {

        if (is_null($text_top)) {
            throw new \InvalidArgumentException('non-nullable text_top cannot be null');
        }

        $this->container['text_top'] = $text_top;

        return $this;
    }

    /**
     * Gets text_account
     *
     * @return string|null
     */
    public function getTextAccount()
    {
        return $this->container['text_account'];
    }

    /**
     * Sets text_account
     *
     * @param string|null $text_account text_account
     *
     * @return self
     */
    public function setTextAccount($text_account)
    {

        if (is_null($text_account)) {
            throw new \InvalidArgumentException('non-nullable text_account cannot be null');
        }

        $this->container['text_account'] = $text_account;

        return $this;
    }

    /**
     * Gets text_register
     *
     * @return string|null
     */
    public function getTextRegister()
    {
        return $this->container['text_register'];
    }

    /**
     * Sets text_register
     *
     * @param string|null $text_register text_register
     *
     * @return self
     */
    public function setTextRegister($text_register)
    {

        if (is_null($text_register)) {
            throw new \InvalidArgumentException('non-nullable text_register cannot be null');
        }

        $this->container['text_register'] = $text_register;

        return $this;
    }

    /**
     * Gets text_pending
     *
     * @return string|null
     */
    public function getTextPending()
    {
        return $this->container['text_pending'];
    }

    /**
     * Sets text_pending
     *
     * @param string|null $text_pending text_pending
     *
     * @return self
     */
    public function setTextPending($text_pending)
    {

        if (is_null($text_pending)) {
            throw new \InvalidArgumentException('non-nullable text_pending cannot be null');
        }

        $this->container['text_pending'] = $text_pending;

        return $this;
    }

    /**
     * Gets configuration_data
     *
     * @return string|null
     */
    public function getConfigurationData()
    {
        return $this->container['configuration_data'];
    }

    /**
     * Sets configuration_data
     *
     * @param string|null $configuration_data configuration_data
     *
     * @return self
     */
    public function setConfigurationData($configuration_data)
    {

        if (is_null($configuration_data)) {
            throw new \InvalidArgumentException('non-nullable configuration_data cannot be null');
        }

        $this->container['configuration_data'] = $configuration_data;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets types
     *
     * @return string[]|null
     */
    public function getTypes()
    {
        return $this->container['types'];
    }

    /**
     * Sets types
     *
     * @param string[]|null $types Not part of the file but will be set when the plugin implementation is loaded.
     *
     * @return self
     */
    public function setTypes($types)
    {
        $allowedValues = $this->getTypesAllowableValues();
        if (!is_null($types) && array_diff($types, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'types', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($types)) {
            throw new \InvalidArgumentException('non-nullable types cannot be null');
        }

        $this->container['types'] = $types;

        return $this;
    }

    /**
     * Gets one_account
     *
     * @return bool|null
     */
    public function getOneAccount()
    {
        return $this->container['one_account'];
    }

    /**
     * Sets one_account
     *
     * @param bool|null $one_account one_account
     *
     * @return self
     */
    public function setOneAccount($one_account)
    {

        if (is_null($one_account)) {
            throw new \InvalidArgumentException('non-nullable one_account cannot be null');
        }

        $this->container['one_account'] = $one_account;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return string[]
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param string[] $properties properties
     *
     * @return self
     */
    public function setProperties($properties)
    {
        $allowedValues = $this->getPropertiesAllowableValues();
        if (array_diff($properties, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'properties', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($properties)) {
            throw new \InvalidArgumentException('non-nullable properties cannot be null');
        }

        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets show_password
     *
     * @return bool|null
     */
    public function getShowPassword()
    {
        return $this->container['show_password'];
    }

    /**
     * Sets show_password
     *
     * @param bool|null $show_password show_password
     *
     * @return self
     */
    public function setShowPassword($show_password)
    {

        if (is_null($show_password)) {
            throw new \InvalidArgumentException('non-nullable show_password cannot be null');
        }

        $this->container['show_password'] = $show_password;

        return $this;
    }

    /**
     * Gets actions
     *
     * @return string[]
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     *
     * @param string[] $actions actions
     *
     * @return self
     */
    public function setActions($actions)
    {
        $allowedValues = $this->getActionsAllowableValues();
        if (array_diff($actions, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'actions', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($actions)) {
            throw new \InvalidArgumentException('non-nullable actions cannot be null');
        }

        $this->container['actions'] = $actions;

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

