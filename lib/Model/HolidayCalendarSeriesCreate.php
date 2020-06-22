<?php
/**
 * HolidayCalendarSeriesCreate
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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
 * Swagger Codegen version: 2.4.14
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * HolidayCalendarSeriesCreate Class Doc Comment
 *
 * @category Class
 * @description Model that describes a repetitive series of holiday calendar slots to be defined in a holiday calendar.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HolidayCalendarSeriesCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HolidayCalendarSeriesCreate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'repetition_type' => 'string',
        'ends_after' => 'int',
        'ends_on' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'repetition_type' => null,
        'ends_after' => 'int32',
        'ends_on' => null
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
        'repetition_type' => 'repetitionType',
        'ends_after' => 'endsAfter',
        'ends_on' => 'endsOn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'repetition_type' => 'setRepetitionType',
        'ends_after' => 'setEndsAfter',
        'ends_on' => 'setEndsOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'repetition_type' => 'getRepetitionType',
        'ends_after' => 'getEndsAfter',
        'ends_on' => 'getEndsOn'
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

    const REPETITION_TYPE_DAILY = 'DAILY';
    const REPETITION_TYPE_WEEKLY = 'WEEKLY';
    const REPETITION_TYPE_MONTHLY = 'MONTHLY';
    const REPETITION_TYPE_MONTHLY_SPECIFIC_WEEK_DAY = 'MONTHLY_SPECIFIC_WEEK_DAY';
    const REPETITION_TYPE_YEARLY = 'YEARLY';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRepetitionTypeAllowableValues()
    {
        return [
            self::REPETITION_TYPE_DAILY,
            self::REPETITION_TYPE_WEEKLY,
            self::REPETITION_TYPE_MONTHLY,
            self::REPETITION_TYPE_MONTHLY_SPECIFIC_WEEK_DAY,
            self::REPETITION_TYPE_YEARLY,
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
        $this->container['repetition_type'] = isset($data['repetition_type']) ? $data['repetition_type'] : null;
        $this->container['ends_after'] = isset($data['ends_after']) ? $data['ends_after'] : null;
        $this->container['ends_on'] = isset($data['ends_on']) ? $data['ends_on'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['repetition_type'] === null) {
            $invalidProperties[] = "'repetition_type' can't be null";
        }
        $allowedValues = $this->getRepetitionTypeAllowableValues();
        if (!is_null($this->container['repetition_type']) && !in_array($this->container['repetition_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'repetition_type', must be one of '%s'",
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
     * Gets repetition_type
     *
     * @return string
     */
    public function getRepetitionType()
    {
        return $this->container['repetition_type'];
    }

    /**
     * Sets repetition_type
     *
     * @param string $repetition_type Type of the repetition
     *
     * @return $this
     */
    public function setRepetitionType($repetition_type)
    {
        $allowedValues = $this->getRepetitionTypeAllowableValues();
        if (!in_array($repetition_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'repetition_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['repetition_type'] = $repetition_type;

        return $this;
    }

    /**
     * Gets ends_after
     *
     * @return int
     */
    public function getEndsAfter()
    {
        return $this->container['ends_after'];
    }

    /**
     * Sets ends_after
     *
     * @param int $ends_after Number of repetitions
     *
     * @return $this
     */
    public function setEndsAfter($ends_after)
    {
        $this->container['ends_after'] = $ends_after;

        return $this;
    }

    /**
     * Gets ends_on
     *
     * @return string
     */
    public function getEndsOn()
    {
        return $this->container['ends_on'];
    }

    /**
     * Sets ends_on
     *
     * @param string $ends_on Day until when the series is valid (ISO 8601-format compliant date without time zone: yyyy-mm-dd)
     *
     * @return $this
     */
    public function setEndsOn($ends_on)
    {
        $this->container['ends_on'] = $ends_on;

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


