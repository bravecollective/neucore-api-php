<?php
/**
 * CorporationMember
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
 * OpenAPI Generator version: 6.6.0
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
 * CorporationMember Class Doc Comment
 *
 * @category Class
 * @description The player property contains only id and name, character does not contain corporation.
 * @package  Brave\NeucoreApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CorporationMember implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CorporationMember';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'player' => '\Brave\NeucoreApi\Model\Player',
        'id' => 'int',
        'name' => 'string',
        'location' => '\Brave\NeucoreApi\Model\EsiLocation',
        'logoff_date' => '\DateTime',
        'logon_date' => '\DateTime',
        'ship_type' => '\Brave\NeucoreApi\Model\EsiType',
        'start_date' => '\DateTime',
        'character' => '\Brave\NeucoreApi\Model\Character',
        'missing_character_mail_sent_date' => '\DateTime',
        'missing_character_mail_sent_result' => 'string',
        'missing_character_mail_sent_number' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'player' => null,
        'id' => 'int64',
        'name' => null,
        'location' => null,
        'logoff_date' => 'date-time',
        'logon_date' => 'date-time',
        'ship_type' => null,
        'start_date' => 'date-time',
        'character' => null,
        'missing_character_mail_sent_date' => 'date-time',
        'missing_character_mail_sent_result' => null,
        'missing_character_mail_sent_number' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'player' => false,
		'id' => true,
		'name' => true,
		'location' => false,
		'logoff_date' => true,
		'logon_date' => true,
		'ship_type' => false,
		'start_date' => true,
		'character' => false,
		'missing_character_mail_sent_date' => true,
		'missing_character_mail_sent_result' => true,
		'missing_character_mail_sent_number' => false
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
        'player' => 'player',
        'id' => 'id',
        'name' => 'name',
        'location' => 'location',
        'logoff_date' => 'logoffDate',
        'logon_date' => 'logonDate',
        'ship_type' => 'shipType',
        'start_date' => 'startDate',
        'character' => 'character',
        'missing_character_mail_sent_date' => 'missingCharacterMailSentDate',
        'missing_character_mail_sent_result' => 'missingCharacterMailSentResult',
        'missing_character_mail_sent_number' => 'missingCharacterMailSentNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'player' => 'setPlayer',
        'id' => 'setId',
        'name' => 'setName',
        'location' => 'setLocation',
        'logoff_date' => 'setLogoffDate',
        'logon_date' => 'setLogonDate',
        'ship_type' => 'setShipType',
        'start_date' => 'setStartDate',
        'character' => 'setCharacter',
        'missing_character_mail_sent_date' => 'setMissingCharacterMailSentDate',
        'missing_character_mail_sent_result' => 'setMissingCharacterMailSentResult',
        'missing_character_mail_sent_number' => 'setMissingCharacterMailSentNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'player' => 'getPlayer',
        'id' => 'getId',
        'name' => 'getName',
        'location' => 'getLocation',
        'logoff_date' => 'getLogoffDate',
        'logon_date' => 'getLogonDate',
        'ship_type' => 'getShipType',
        'start_date' => 'getStartDate',
        'character' => 'getCharacter',
        'missing_character_mail_sent_date' => 'getMissingCharacterMailSentDate',
        'missing_character_mail_sent_result' => 'getMissingCharacterMailSentResult',
        'missing_character_mail_sent_number' => 'getMissingCharacterMailSentNumber'
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
        $this->setIfExists('player', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('logoff_date', $data ?? [], null);
        $this->setIfExists('logon_date', $data ?? [], null);
        $this->setIfExists('ship_type', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('character', $data ?? [], null);
        $this->setIfExists('missing_character_mail_sent_date', $data ?? [], null);
        $this->setIfExists('missing_character_mail_sent_result', $data ?? [], null);
        $this->setIfExists('missing_character_mail_sent_number', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets player
     *
     * @return \Brave\NeucoreApi\Model\Player|null
     */
    public function getPlayer()
    {
        return $this->container['player'];
    }

    /**
     * Sets player
     *
     * @param \Brave\NeucoreApi\Model\Player|null $player player
     *
     * @return self
     */
    public function setPlayer($player)
    {
        if (is_null($player)) {
            throw new \InvalidArgumentException('non-nullable player cannot be null');
        }
        $this->container['player'] = $player;

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
     * @param int $id EVE Character ID.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
     * @param string $name EVE Character name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \Brave\NeucoreApi\Model\EsiLocation|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Brave\NeucoreApi\Model\EsiLocation|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        if (is_null($location)) {
            throw new \InvalidArgumentException('non-nullable location cannot be null');
        }
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets logoff_date
     *
     * @return \DateTime|null
     */
    public function getLogoffDate()
    {
        return $this->container['logoff_date'];
    }

    /**
     * Sets logoff_date
     *
     * @param \DateTime|null $logoff_date logoff_date
     *
     * @return self
     */
    public function setLogoffDate($logoff_date)
    {
        if (is_null($logoff_date)) {
            array_push($this->openAPINullablesSetToNull, 'logoff_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('logoff_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['logoff_date'] = $logoff_date;

        return $this;
    }

    /**
     * Gets logon_date
     *
     * @return \DateTime|null
     */
    public function getLogonDate()
    {
        return $this->container['logon_date'];
    }

    /**
     * Sets logon_date
     *
     * @param \DateTime|null $logon_date logon_date
     *
     * @return self
     */
    public function setLogonDate($logon_date)
    {
        if (is_null($logon_date)) {
            array_push($this->openAPINullablesSetToNull, 'logon_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('logon_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['logon_date'] = $logon_date;

        return $this;
    }

    /**
     * Gets ship_type
     *
     * @return \Brave\NeucoreApi\Model\EsiType|null
     */
    public function getShipType()
    {
        return $this->container['ship_type'];
    }

    /**
     * Sets ship_type
     *
     * @param \Brave\NeucoreApi\Model\EsiType|null $ship_type ship_type
     *
     * @return self
     */
    public function setShipType($ship_type)
    {
        if (is_null($ship_type)) {
            throw new \InvalidArgumentException('non-nullable ship_type cannot be null');
        }
        $this->container['ship_type'] = $ship_type;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date start_date
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        if (is_null($start_date)) {
            array_push($this->openAPINullablesSetToNull, 'start_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('start_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets character
     *
     * @return \Brave\NeucoreApi\Model\Character|null
     */
    public function getCharacter()
    {
        return $this->container['character'];
    }

    /**
     * Sets character
     *
     * @param \Brave\NeucoreApi\Model\Character|null $character character
     *
     * @return self
     */
    public function setCharacter($character)
    {
        if (is_null($character)) {
            throw new \InvalidArgumentException('non-nullable character cannot be null');
        }
        $this->container['character'] = $character;

        return $this;
    }

    /**
     * Gets missing_character_mail_sent_date
     *
     * @return \DateTime|null
     */
    public function getMissingCharacterMailSentDate()
    {
        return $this->container['missing_character_mail_sent_date'];
    }

    /**
     * Sets missing_character_mail_sent_date
     *
     * @param \DateTime|null $missing_character_mail_sent_date Date and time of the last sent mail.
     *
     * @return self
     */
    public function setMissingCharacterMailSentDate($missing_character_mail_sent_date)
    {
        if (is_null($missing_character_mail_sent_date)) {
            array_push($this->openAPINullablesSetToNull, 'missing_character_mail_sent_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('missing_character_mail_sent_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['missing_character_mail_sent_date'] = $missing_character_mail_sent_date;

        return $this;
    }

    /**
     * Gets missing_character_mail_sent_result
     *
     * @return string|null
     */
    public function getMissingCharacterMailSentResult()
    {
        return $this->container['missing_character_mail_sent_result'];
    }

    /**
     * Sets missing_character_mail_sent_result
     *
     * @param string|null $missing_character_mail_sent_result Result of the last sent mail (OK, Blocked, CSPA charge > 0)
     *
     * @return self
     */
    public function setMissingCharacterMailSentResult($missing_character_mail_sent_result)
    {
        if (is_null($missing_character_mail_sent_result)) {
            array_push($this->openAPINullablesSetToNull, 'missing_character_mail_sent_result');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('missing_character_mail_sent_result', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['missing_character_mail_sent_result'] = $missing_character_mail_sent_result;

        return $this;
    }

    /**
     * Gets missing_character_mail_sent_number
     *
     * @return int|null
     */
    public function getMissingCharacterMailSentNumber()
    {
        return $this->container['missing_character_mail_sent_number'];
    }

    /**
     * Sets missing_character_mail_sent_number
     *
     * @param int|null $missing_character_mail_sent_number Number of mails sent, is reset when the character is added.
     *
     * @return self
     */
    public function setMissingCharacterMailSentNumber($missing_character_mail_sent_number)
    {
        if (is_null($missing_character_mail_sent_number)) {
            throw new \InvalidArgumentException('non-nullable missing_character_mail_sent_number cannot be null');
        }
        $this->container['missing_character_mail_sent_number'] = $missing_character_mail_sent_number;

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


