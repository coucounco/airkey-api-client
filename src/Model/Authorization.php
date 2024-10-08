<?php
/**
 * Authorization
 *
 * PHP version 5
 *
 * @category Class
 * @package  Coucounco\Airkey\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVVA AirKey Cloud API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v18.0.4
 * Contact: office-wien@evva.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.41
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Coucounco\Airkey\Swagger\Client\Model;

use \ArrayAccess;
use \Coucounco\Airkey\Swagger\Client\ObjectSerializer;

/**
 * Authorization Class Doc Comment
 *
 * @category Class
 * @description Model that describes an authorization defined in the access control system (NOTE: Either the lock or the area is set, not both).
 * @package  Coucounco\Airkey\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Authorization implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Authorization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'version' => 'int',
        'medium' => '\Coucounco\Airkey\Swagger\Client\Model\SimpleMedium',
        'lock' => '\Coucounco\Airkey\Swagger\Client\Model\SimpleLock',
        'area' => '\Coucounco\Airkey\Swagger\Client\Model\SimpleArea',
        'person_id' => 'int',
        'current_state' => 'string',
        'created_on' => 'string',
        'updated_on' => 'string',
        'synchronized_on' => 'string',
        'deletion_requested' => 'bool',
        'authorization_info_list' => '\Coucounco\Airkey\Swagger\Client\Model\AuthorizationInfo[]',
        'custom' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'version' => 'int64',
        'medium' => null,
        'lock' => null,
        'area' => null,
        'person_id' => 'int64',
        'current_state' => null,
        'created_on' => null,
        'updated_on' => null,
        'synchronized_on' => null,
        'deletion_requested' => null,
        'authorization_info_list' => null,
        'custom' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'version' => 'version',
        'medium' => 'medium',
        'lock' => 'lock',
        'area' => 'area',
        'person_id' => 'personId',
        'current_state' => 'currentState',
        'created_on' => 'createdOn',
        'updated_on' => 'updatedOn',
        'synchronized_on' => 'synchronizedOn',
        'deletion_requested' => 'deletionRequested',
        'authorization_info_list' => 'authorizationInfoList',
        'custom' => 'custom'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'version' => 'setVersion',
        'medium' => 'setMedium',
        'lock' => 'setLock',
        'area' => 'setArea',
        'person_id' => 'setPersonId',
        'current_state' => 'setCurrentState',
        'created_on' => 'setCreatedOn',
        'updated_on' => 'setUpdatedOn',
        'synchronized_on' => 'setSynchronizedOn',
        'deletion_requested' => 'setDeletionRequested',
        'authorization_info_list' => 'setAuthorizationInfoList',
        'custom' => 'setCustom'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'version' => 'getVersion',
        'medium' => 'getMedium',
        'lock' => 'getLock',
        'area' => 'getArea',
        'person_id' => 'getPersonId',
        'current_state' => 'getCurrentState',
        'created_on' => 'getCreatedOn',
        'updated_on' => 'getUpdatedOn',
        'synchronized_on' => 'getSynchronizedOn',
        'deletion_requested' => 'getDeletionRequested',
        'authorization_info_list' => 'getAuthorizationInfoList',
        'custom' => 'getCustom'
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
        return self::$swaggerModelName;
    }

    const CURRENT_STATE_UNCHANGED = 'UNCHANGED';
    const CURRENT_STATE_MODIFIED = 'MODIFIED';
    const CURRENT_STATE_CREATED = 'CREATED';
    const CURRENT_STATE_DELETED = 'DELETED';
    const CURRENT_STATE_CREATED_BLACKLISTED = 'CREATED_BLACKLISTED';
    const CURRENT_STATE_DEACTIVATED_RESTORABLE = 'DEACTIVATED_RESTORABLE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrentStateAllowableValues()
    {
        return [
            self::CURRENT_STATE_UNCHANGED,
            self::CURRENT_STATE_MODIFIED,
            self::CURRENT_STATE_CREATED,
            self::CURRENT_STATE_DELETED,
            self::CURRENT_STATE_CREATED_BLACKLISTED,
            self::CURRENT_STATE_DEACTIVATED_RESTORABLE,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['medium'] = isset($data['medium']) ? $data['medium'] : null;
        $this->container['lock'] = isset($data['lock']) ? $data['lock'] : null;
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['person_id'] = isset($data['person_id']) ? $data['person_id'] : null;
        $this->container['current_state'] = isset($data['current_state']) ? $data['current_state'] : null;
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        $this->container['updated_on'] = isset($data['updated_on']) ? $data['updated_on'] : null;
        $this->container['synchronized_on'] = isset($data['synchronized_on']) ? $data['synchronized_on'] : null;
        $this->container['deletion_requested'] = isset($data['deletion_requested']) ? $data['deletion_requested'] : null;
        $this->container['authorization_info_list'] = isset($data['authorization_info_list']) ? $data['authorization_info_list'] : null;
        $this->container['custom'] = isset($data['custom']) ? $data['custom'] : null;
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
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['medium'] === null) {
            $invalidProperties[] = "'medium' can't be null";
        }
        $allowedValues = $this->getCurrentStateAllowableValues();
        if (!is_null($this->container['current_state']) && !in_array($this->container['current_state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'current_state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['authorization_info_list'] === null) {
            $invalidProperties[] = "'authorization_info_list' can't be null";
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
     * @param int $id Unique identifier
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version Current version number of the authorization
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets medium
     *
     * @return \Coucounco\Airkey\Swagger\Client\Model\SimpleMedium
     */
    public function getMedium()
    {
        return $this->container['medium'];
    }

    /**
     * Sets medium
     *
     * @param \Coucounco\Airkey\Swagger\Client\Model\SimpleMedium $medium Medium to which this authorization is defined
     *
     * @return $this
     */
    public function setMedium($medium)
    {
        $this->container['medium'] = $medium;

        return $this;
    }

    /**
     * Gets lock
     *
     * @return \Coucounco\Airkey\Swagger\Client\Model\SimpleLock
     */
    public function getLock()
    {
        return $this->container['lock'];
    }

    /**
     * Sets lock
     *
     * @param \Coucounco\Airkey\Swagger\Client\Model\SimpleLock $lock Lock for which the medium is authorized
     *
     * @return $this
     */
    public function setLock($lock)
    {
        $this->container['lock'] = $lock;

        return $this;
    }

    /**
     * Gets area
     *
     * @return \Coucounco\Airkey\Swagger\Client\Model\SimpleArea
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area
     *
     * @param \Coucounco\Airkey\Swagger\Client\Model\SimpleArea $area Area for which the medium is authorized
     *
     * @return $this
     */
    public function setArea($area)
    {
        $this->container['area'] = $area;

        return $this;
    }

    /**
     * Gets person_id
     *
     * @return int
     */
    public function getPersonId()
    {
        return $this->container['person_id'];
    }

    /**
     * Sets person_id
     *
     * @param int $person_id Owner of this authorization
     *
     * @return $this
     */
    public function setPersonId($person_id)
    {
        $this->container['person_id'] = $person_id;

        return $this;
    }

    /**
     * Gets current_state
     *
     * @return string
     */
    public function getCurrentState()
    {
        return $this->container['current_state'];
    }

    /**
     * Sets current_state
     *
     * @param string $current_state Current state of authorization
     *
     * @return $this
     */
    public function setCurrentState($current_state)
    {
        $allowedValues = $this->getCurrentStateAllowableValues();
        if (!is_null($current_state) && !in_array($current_state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'current_state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['current_state'] = $current_state;

        return $this;
    }

    /**
     * Gets created_on
     *
     * @return string
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param string $created_on Timestamp when the authorization was created (ISO 8601-format compliant date with time in UTC, milliseconds precision)
     *
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }

    /**
     * Gets updated_on
     *
     * @return string
     */
    public function getUpdatedOn()
    {
        return $this->container['updated_on'];
    }

    /**
     * Sets updated_on
     *
     * @param string $updated_on Timestamp when the authorization was last updated (ISO 8601-format compliant date with time in UTC, milliseconds precision)
     *
     * @return $this
     */
    public function setUpdatedOn($updated_on)
    {
        $this->container['updated_on'] = $updated_on;

        return $this;
    }

    /**
     * Gets synchronized_on
     *
     * @return string
     */
    public function getSynchronizedOn()
    {
        return $this->container['synchronized_on'];
    }

    /**
     * Sets synchronized_on
     *
     * @param string $synchronized_on Timestamp when the authorization was last synchronized with the medium (ISO 8601-format compliant date with time in UTC, milliseconds precision)
     *
     * @return $this
     */
    public function setSynchronizedOn($synchronized_on)
    {
        $this->container['synchronized_on'] = $synchronized_on;

        return $this;
    }

    /**
     * Gets deletion_requested
     *
     * @return bool
     */
    public function getDeletionRequested()
    {
        return $this->container['deletion_requested'];
    }

    /**
     * Sets deletion_requested
     *
     * @param bool $deletion_requested Is a deletion of the authorization requested or not
     *
     * @return $this
     */
    public function setDeletionRequested($deletion_requested)
    {
        $this->container['deletion_requested'] = $deletion_requested;

        return $this;
    }

    /**
     * Gets authorization_info_list
     *
     * @return \Coucounco\Airkey\Swagger\Client\Model\AuthorizationInfo[]
     */
    public function getAuthorizationInfoList()
    {
        return $this->container['authorization_info_list'];
    }

    /**
     * Sets authorization_info_list
     *
     * @param \Coucounco\Airkey\Swagger\Client\Model\AuthorizationInfo[] $authorization_info_list List of authorization details
     *
     * @return $this
     */
    public function setAuthorizationInfoList($authorization_info_list)
    {
        $this->container['authorization_info_list'] = $authorization_info_list;

        return $this;
    }

    /**
     * Gets custom
     *
     * @return bool
     */
    public function getCustom()
    {
        return $this->container['custom'];
    }

    /**
     * Sets custom
     *
     * @param bool $custom Authorization combines different authorization types
     *
     * @return $this
     */
    public function setCustom($custom)
    {
        $this->container['custom'] = $custom;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


