<?php
/**
 * LockFirmware
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
 * LockFirmware Class Doc Comment
 *
 * @category Class
 * @description Model that describes the firmware information of a lock.
 * @package  Coucounco\Airkey\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LockFirmware implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LockFirmware';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'applet_version' => 'string',
        'pic_version' => 'string',
        'motor_pic_version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'applet_version' => null,
        'pic_version' => null,
        'motor_pic_version' => null
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
        'applet_version' => 'appletVersion',
        'pic_version' => 'picVersion',
        'motor_pic_version' => 'motorPicVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applet_version' => 'setAppletVersion',
        'pic_version' => 'setPicVersion',
        'motor_pic_version' => 'setMotorPicVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applet_version' => 'getAppletVersion',
        'pic_version' => 'getPicVersion',
        'motor_pic_version' => 'getMotorPicVersion'
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
        $this->container['applet_version'] = isset($data['applet_version']) ? $data['applet_version'] : null;
        $this->container['pic_version'] = isset($data['pic_version']) ? $data['pic_version'] : null;
        $this->container['motor_pic_version'] = isset($data['motor_pic_version']) ? $data['motor_pic_version'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['applet_version']) && (mb_strlen($this->container['applet_version']) > 15)) {
            $invalidProperties[] = "invalid value for 'applet_version', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['applet_version']) && (mb_strlen($this->container['applet_version']) < 0)) {
            $invalidProperties[] = "invalid value for 'applet_version', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['pic_version']) && (mb_strlen($this->container['pic_version']) > 15)) {
            $invalidProperties[] = "invalid value for 'pic_version', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['pic_version']) && (mb_strlen($this->container['pic_version']) < 0)) {
            $invalidProperties[] = "invalid value for 'pic_version', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['motor_pic_version']) && (mb_strlen($this->container['motor_pic_version']) > 15)) {
            $invalidProperties[] = "invalid value for 'motor_pic_version', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['motor_pic_version']) && (mb_strlen($this->container['motor_pic_version']) < 0)) {
            $invalidProperties[] = "invalid value for 'motor_pic_version', the character length must be bigger than or equal to 0.";
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
     * Gets applet_version
     *
     * @return string
     */
    public function getAppletVersion()
    {
        return $this->container['applet_version'];
    }

    /**
     * Sets applet_version
     *
     * @param string $applet_version Current version of applet
     *
     * @return $this
     */
    public function setAppletVersion($applet_version)
    {
        if (!is_null($applet_version) && (mb_strlen($applet_version) > 15)) {
            throw new \InvalidArgumentException('invalid length for $applet_version when calling LockFirmware., must be smaller than or equal to 15.');
        }
        if (!is_null($applet_version) && (mb_strlen($applet_version) < 0)) {
            throw new \InvalidArgumentException('invalid length for $applet_version when calling LockFirmware., must be bigger than or equal to 0.');
        }

        $this->container['applet_version'] = $applet_version;

        return $this;
    }

    /**
     * Gets pic_version
     *
     * @return string
     */
    public function getPicVersion()
    {
        return $this->container['pic_version'];
    }

    /**
     * Sets pic_version
     *
     * @param string $pic_version Current version of pic
     *
     * @return $this
     */
    public function setPicVersion($pic_version)
    {
        if (!is_null($pic_version) && (mb_strlen($pic_version) > 15)) {
            throw new \InvalidArgumentException('invalid length for $pic_version when calling LockFirmware., must be smaller than or equal to 15.');
        }
        if (!is_null($pic_version) && (mb_strlen($pic_version) < 0)) {
            throw new \InvalidArgumentException('invalid length for $pic_version when calling LockFirmware., must be bigger than or equal to 0.');
        }

        $this->container['pic_version'] = $pic_version;

        return $this;
    }

    /**
     * Gets motor_pic_version
     *
     * @return string
     */
    public function getMotorPicVersion()
    {
        return $this->container['motor_pic_version'];
    }

    /**
     * Sets motor_pic_version
     *
     * @param string $motor_pic_version Current version of motor pic
     *
     * @return $this
     */
    public function setMotorPicVersion($motor_pic_version)
    {
        if (!is_null($motor_pic_version) && (mb_strlen($motor_pic_version) > 15)) {
            throw new \InvalidArgumentException('invalid length for $motor_pic_version when calling LockFirmware., must be smaller than or equal to 15.');
        }
        if (!is_null($motor_pic_version) && (mb_strlen($motor_pic_version) < 0)) {
            throw new \InvalidArgumentException('invalid length for $motor_pic_version when calling LockFirmware., must be bigger than or equal to 0.');
        }

        $this->container['motor_pic_version'] = $motor_pic_version;

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


