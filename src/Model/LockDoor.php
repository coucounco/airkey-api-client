<?php
/**
 * LockDoor
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
 * OpenAPI spec version: v14.40.2
 * Contact: office-wien@evva.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.23
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
 * LockDoor Class Doc Comment
 *
 * @category Class
 * @description Model that describes the door information associated with a lock.
 * @package  Coucounco\Airkey\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LockDoor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LockDoor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'additional_information' => 'string',
        'location' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'additional_information' => null,
        'location' => null
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
        'name' => 'name',
        'additional_information' => 'additionalInformation',
        'location' => 'location'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'additional_information' => 'setAdditionalInformation',
        'location' => 'setLocation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'additional_information' => 'getAdditionalInformation',
        'location' => 'getLocation'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['additional_information'] = isset($data['additional_information']) ? $data['additional_information'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['additional_information']) && (mb_strlen($this->container['additional_information']) > 50)) {
            $invalidProperties[] = "invalid value for 'additional_information', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['additional_information']) && (mb_strlen($this->container['additional_information']) < 0)) {
            $invalidProperties[] = "invalid value for 'additional_information', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['location']) && (mb_strlen($this->container['location']) > 250)) {
            $invalidProperties[] = "invalid value for 'location', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['location']) && (mb_strlen($this->container['location']) < 0)) {
            $invalidProperties[] = "invalid value for 'location', the character length must be bigger than or equal to 0.";
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
     * @param string $name Name of door
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling LockDoor., must be smaller than or equal to 50.');
        }
        if (!is_null($name) && (mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling LockDoor., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets additional_information
     *
     * @return string
     */
    public function getAdditionalInformation()
    {
        return $this->container['additional_information'];
    }

    /**
     * Sets additional_information
     *
     * @param string $additional_information Additional information about the door
     *
     * @return $this
     */
    public function setAdditionalInformation($additional_information)
    {
        if (!is_null($additional_information) && (mb_strlen($additional_information) > 50)) {
            throw new \InvalidArgumentException('invalid length for $additional_information when calling LockDoor., must be smaller than or equal to 50.');
        }
        if (!is_null($additional_information) && (mb_strlen($additional_information) < 0)) {
            throw new \InvalidArgumentException('invalid length for $additional_information when calling LockDoor., must be bigger than or equal to 0.');
        }

        $this->container['additional_information'] = $additional_information;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location Location of the door which could be an address or GPS coordinates
     *
     * @return $this
     */
    public function setLocation($location)
    {
        if (!is_null($location) && (mb_strlen($location) > 250)) {
            throw new \InvalidArgumentException('invalid length for $location when calling LockDoor., must be smaller than or equal to 250.');
        }
        if (!is_null($location) && (mb_strlen($location) < 0)) {
            throw new \InvalidArgumentException('invalid length for $location when calling LockDoor., must be bigger than or equal to 0.');
        }

        $this->container['location'] = $location;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


