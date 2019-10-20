<?php
/**
 * RemovedCharacter
 *
 * PHP version 5
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
 * The version of the OpenAPI document: 1.5.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3
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
 * RemovedCharacter Class Doc Comment
 *
 * @category Class
 * @package  Brave\NeucoreApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RemovedCharacter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RemovedCharacter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'new_player_id' => 'int',
        'new_player_name' => 'string',
        'player' => '\Brave\NeucoreApi\Model\Player',
        'character_id' => 'int',
        'character_name' => 'string',
        'removed_date' => '\DateTime',
        'reason' => 'string',
        'deleted_by' => '\Brave\NeucoreApi\Model\Player'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'new_player_id' => null,
        'new_player_name' => null,
        'player' => null,
        'character_id' => 'int64',
        'character_name' => null,
        'removed_date' => 'date-time',
        'reason' => null,
        'deleted_by' => null
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
        'new_player_id' => 'newPlayerId',
        'new_player_name' => 'newPlayerName',
        'player' => 'player',
        'character_id' => 'characterId',
        'character_name' => 'characterName',
        'removed_date' => 'removedDate',
        'reason' => 'reason',
        'deleted_by' => 'deletedBy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'new_player_id' => 'setNewPlayerId',
        'new_player_name' => 'setNewPlayerName',
        'player' => 'setPlayer',
        'character_id' => 'setCharacterId',
        'character_name' => 'setCharacterName',
        'removed_date' => 'setRemovedDate',
        'reason' => 'setReason',
        'deleted_by' => 'setDeletedBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'new_player_id' => 'getNewPlayerId',
        'new_player_name' => 'getNewPlayerName',
        'player' => 'getPlayer',
        'character_id' => 'getCharacterId',
        'character_name' => 'getCharacterName',
        'removed_date' => 'getRemovedDate',
        'reason' => 'getReason',
        'deleted_by' => 'getDeletedBy'
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

    const REASON_MOVED = 'moved';
    const REASON_DELETED_MANUALLY = 'deleted-manually';
    const REASON_DELETED_BIOMASSED = 'deleted-biomassed';
    const REASON_DELETED_OWNER_CHANGED = 'deleted-owner-changed';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonAllowableValues()
    {
        return [
            self::REASON_MOVED,
            self::REASON_DELETED_MANUALLY,
            self::REASON_DELETED_BIOMASSED,
            self::REASON_DELETED_OWNER_CHANGED,
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
        $this->container['new_player_id'] = isset($data['new_player_id']) ? $data['new_player_id'] : null;
        $this->container['new_player_name'] = isset($data['new_player_name']) ? $data['new_player_name'] : null;
        $this->container['player'] = isset($data['player']) ? $data['player'] : null;
        $this->container['character_id'] = isset($data['character_id']) ? $data['character_id'] : null;
        $this->container['character_name'] = isset($data['character_name']) ? $data['character_name'] : null;
        $this->container['removed_date'] = isset($data['removed_date']) ? $data['removed_date'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['deleted_by'] = isset($data['deleted_by']) ? $data['deleted_by'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['character_id'] === null) {
            $invalidProperties[] = "'character_id' can't be null";
        }
        if ($this->container['character_name'] === null) {
            $invalidProperties[] = "'character_name' can't be null";
        }
        if ($this->container['removed_date'] === null) {
            $invalidProperties[] = "'removed_date' can't be null";
        }
        if ($this->container['reason'] === null) {
            $invalidProperties[] = "'reason' can't be null";
        }
        $allowedValues = $this->getReasonAllowableValues();
        if (!is_null($this->container['reason']) && !in_array($this->container['reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reason', must be one of '%s'",
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
     * Gets new_player_id
     *
     * @return int|null
     */
    public function getNewPlayerId()
    {
        return $this->container['new_player_id'];
    }

    /**
     * Sets new_player_id
     *
     * @param int|null $new_player_id new_player_id
     *
     * @return $this
     */
    public function setNewPlayerId($new_player_id)
    {
        $this->container['new_player_id'] = $new_player_id;

        return $this;
    }

    /**
     * Gets new_player_name
     *
     * @return string|null
     */
    public function getNewPlayerName()
    {
        return $this->container['new_player_name'];
    }

    /**
     * Sets new_player_name
     *
     * @param string|null $new_player_name new_player_name
     *
     * @return $this
     */
    public function setNewPlayerName($new_player_name)
    {
        $this->container['new_player_name'] = $new_player_name;

        return $this;
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
     * @return $this
     */
    public function setPlayer($player)
    {
        $this->container['player'] = $player;

        return $this;
    }

    /**
     * Gets character_id
     *
     * @return int
     */
    public function getCharacterId()
    {
        return $this->container['character_id'];
    }

    /**
     * Sets character_id
     *
     * @param int $character_id EVE character ID.
     *
     * @return $this
     */
    public function setCharacterId($character_id)
    {
        $this->container['character_id'] = $character_id;

        return $this;
    }

    /**
     * Gets character_name
     *
     * @return string
     */
    public function getCharacterName()
    {
        return $this->container['character_name'];
    }

    /**
     * Sets character_name
     *
     * @param string $character_name EVE character name.
     *
     * @return $this
     */
    public function setCharacterName($character_name)
    {
        $this->container['character_name'] = $character_name;

        return $this;
    }

    /**
     * Gets removed_date
     *
     * @return \DateTime
     */
    public function getRemovedDate()
    {
        return $this->container['removed_date'];
    }

    /**
     * Sets removed_date
     *
     * @param \DateTime $removed_date Date of removal.
     *
     * @return $this
     */
    public function setRemovedDate($removed_date)
    {
        $this->container['removed_date'] = $removed_date;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason How it was removed (deleted or moved to another account).
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $allowedValues = $this->getReasonAllowableValues();
        if (!in_array($reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reason', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets deleted_by
     *
     * @return \Brave\NeucoreApi\Model\Player|null
     */
    public function getDeletedBy()
    {
        return $this->container['deleted_by'];
    }

    /**
     * Sets deleted_by
     *
     * @param \Brave\NeucoreApi\Model\Player|null $deleted_by deleted_by
     *
     * @return $this
     */
    public function setDeletedBy($deleted_by)
    {
        $this->container['deleted_by'] = $deleted_by;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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


