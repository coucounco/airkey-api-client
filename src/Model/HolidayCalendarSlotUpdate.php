<?php
/**
 * HolidayCalendarSlotUpdate
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
 * HolidayCalendarSlotUpdate Class Doc Comment
 *
 * @category Class
 * @description Model that describes a holiday calendar slot with identifier, version and a defined validity that should be updated in a holiday calendar.
 * @package  Coucounco\Airkey\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HolidayCalendarSlotUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HolidayCalendarSlotUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'version' => 'int',
        'slot_name' => 'string',
        'valid_from' => 'string',
        'valid_to' => 'string',
        'series' => '\Coucounco\Airkey\Swagger\Client\Model\HolidayCalendarSeries',
        'series_sequence_number' => 'int',
        'modify_future_slots' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'version' => 'int64',
        'slot_name' => null,
        'valid_from' => null,
        'valid_to' => null,
        'series' => null,
        'series_sequence_number' => 'int32',
        'modify_future_slots' => null
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
        'slot_name' => 'slotName',
        'valid_from' => 'validFrom',
        'valid_to' => 'validTo',
        'series' => 'series',
        'series_sequence_number' => 'seriesSequenceNumber',
        'modify_future_slots' => 'modifyFutureSlots'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'version' => 'setVersion',
        'slot_name' => 'setSlotName',
        'valid_from' => 'setValidFrom',
        'valid_to' => 'setValidTo',
        'series' => 'setSeries',
        'series_sequence_number' => 'setSeriesSequenceNumber',
        'modify_future_slots' => 'setModifyFutureSlots'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'version' => 'getVersion',
        'slot_name' => 'getSlotName',
        'valid_from' => 'getValidFrom',
        'valid_to' => 'getValidTo',
        'series' => 'getSeries',
        'series_sequence_number' => 'getSeriesSequenceNumber',
        'modify_future_slots' => 'getModifyFutureSlots'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['slot_name'] = isset($data['slot_name']) ? $data['slot_name'] : null;
        $this->container['valid_from'] = isset($data['valid_from']) ? $data['valid_from'] : null;
        $this->container['valid_to'] = isset($data['valid_to']) ? $data['valid_to'] : null;
        $this->container['series'] = isset($data['series']) ? $data['series'] : null;
        $this->container['series_sequence_number'] = isset($data['series_sequence_number']) ? $data['series_sequence_number'] : null;
        $this->container['modify_future_slots'] = isset($data['modify_future_slots']) ? $data['modify_future_slots'] : null;
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
        if ($this->container['slot_name'] === null) {
            $invalidProperties[] = "'slot_name' can't be null";
        }
        if ((mb_strlen($this->container['slot_name']) > 50)) {
            $invalidProperties[] = "invalid value for 'slot_name', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['slot_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'slot_name', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['valid_from'] === null) {
            $invalidProperties[] = "'valid_from' can't be null";
        }
        if ($this->container['valid_to'] === null) {
            $invalidProperties[] = "'valid_to' can't be null";
        }
        if ($this->container['modify_future_slots'] === null) {
            $invalidProperties[] = "'modify_future_slots' can't be null";
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
     * @param int $version Current version number of the holiday calendar slot
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets slot_name
     *
     * @return string
     */
    public function getSlotName()
    {
        return $this->container['slot_name'];
    }

    /**
     * Sets slot_name
     *
     * @param string $slot_name Name of the holiday calendar slot (max. 50 characters)
     *
     * @return $this
     */
    public function setSlotName($slot_name)
    {
        if ((mb_strlen($slot_name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $slot_name when calling HolidayCalendarSlotUpdate., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($slot_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $slot_name when calling HolidayCalendarSlotUpdate., must be bigger than or equal to 0.');
        }

        $this->container['slot_name'] = $slot_name;

        return $this;
    }

    /**
     * Gets valid_from
     *
     * @return string
     */
    public function getValidFrom()
    {
        return $this->container['valid_from'];
    }

    /**
     * Sets valid_from
     *
     * @param string $valid_from Holiday calendar slot start time regardless of the time zone (ISO 8601-format compliant date with time, without time zone: yyyy-mm-ddThh:mm)
     *
     * @return $this
     */
    public function setValidFrom($valid_from)
    {
        $this->container['valid_from'] = $valid_from;

        return $this;
    }

    /**
     * Gets valid_to
     *
     * @return string
     */
    public function getValidTo()
    {
        return $this->container['valid_to'];
    }

    /**
     * Sets valid_to
     *
     * @param string $valid_to Holiday calendar slot end time regardless of the time zone (ISO 8601-format compliant date with time, without time zone: yyyy-mm-ddThh:mm)
     *
     * @return $this
     */
    public function setValidTo($valid_to)
    {
        $this->container['valid_to'] = $valid_to;

        return $this;
    }

    /**
     * Gets series
     *
     * @return \Coucounco\Airkey\Swagger\Client\Model\HolidayCalendarSeries
     */
    public function getSeries()
    {
        return $this->container['series'];
    }

    /**
     * Sets series
     *
     * @param \Coucounco\Airkey\Swagger\Client\Model\HolidayCalendarSeries $series Time series to which this holiday calendar slot is assigned to
     *
     * @return $this
     */
    public function setSeries($series)
    {
        $this->container['series'] = $series;

        return $this;
    }

    /**
     * Gets series_sequence_number
     *
     * @return int
     */
    public function getSeriesSequenceNumber()
    {
        return $this->container['series_sequence_number'];
    }

    /**
     * Sets series_sequence_number
     *
     * @param int $series_sequence_number Sequence number of this holiday calendar slot in the time series
     *
     * @return $this
     */
    public function setSeriesSequenceNumber($series_sequence_number)
    {
        $this->container['series_sequence_number'] = $series_sequence_number;

        return $this;
    }

    /**
     * Gets modify_future_slots
     *
     * @return bool
     */
    public function getModifyFutureSlots()
    {
        return $this->container['modify_future_slots'];
    }

    /**
     * Sets modify_future_slots
     *
     * @param bool $modify_future_slots Updating this holiday calendar slot only or also all future slots in the series
     *
     * @return $this
     */
    public function setModifyFutureSlots($modify_future_slots)
    {
        $this->container['modify_future_slots'] = $modify_future_slots;

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


