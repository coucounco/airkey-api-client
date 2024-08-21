<?php
/**
 * LockProtocolDetails
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
 * LockProtocolDetails Class Doc Comment
 *
 * @category Class
 * @description Model that describes details of an event logged in the protocol associated with a lock defined in the access control system, e.g., what data were changed on a locking component/medium during an update. The details are presented in form of a short description of the event, which is translated to the requested languages (default only \&quot;de-DE\&quot;). The fields provide the actual values for most of the placeholders in the translation strings (prefixed with an @ symbol). The actual value for the \&quot;@cylinderNumber\&quot; placeholder is the \&quot;lockIdentifier\&quot; which is sent as part of the \&quot;SimpleLock\&quot; model. Since the actually used attributes vary between different events, the returned details usually only contain a subset of the following attributes:&lt;br /&gt;\&quot;areaCylinderAssignmentsSyncSuccessful\&quot;, \&quot;authKeysSyncSuccessful\&quot;, \&quot;batteryStatus\&quot;, \&quot;blacklistSyncSuccessful\&quot;, \&quot;capError\&quot;, \&quot;capVersion\&quot;, \&quot;comment\&quot;, \&quot;cylinderClockInvalid\&quot;, \&quot;cylinderNumber\&quot;, \&quot;cylinderSharing\&quot;, \&quot;cylinderType\&quot;, \&quot;errorCode\&quot;, \&quot;factoryStateAuthKeyRemoved\&quot;, \&quot;factoryStateAuthKeyStored\&quot;, \&quot;from\&quot;, \&quot;holidayCalendarSyncSuccessful\&quot;, \&quot;logSyncSuccessful\&quot;, \&quot;mediumIdentifier\&quot;, \&quot;motorPicVersion\&quot;, \&quot;mPicError\&quot;, \&quot;name\&quot;, \&quot;newCylinderNumber\&quot;, \&quot;number\&quot;, \&quot;oldCylinderNumber\&quot;, \&quot;operatorName\&quot;, \&quot;permanentOpeningSettingsSyncSuccessful\&quot;, \&quot;phone\&quot;, \&quot;phoneNumber\&quot;, \&quot;picError\&quot;, \&quot;picVersion\&quot;, \&quot;proxyMediumIdentifier\&quot;, \&quot;reason\&quot;, \&quot;success\&quot;, \&quot;targetMediumIdentifier\&quot;, \&quot;timeDeltaInSeconds\&quot;, \&quot;timeReconstructedAfterPowerFailure\&quot;, \&quot;timeSynchronized\&quot;, \&quot;to\&quot;, \&quot;unblockingDurationSyncSuccessful\&quot;, \&quot;username\&quot;, \&quot;whitelistSyncSuccessful\&quot;&lt;br /&gt;A returned \&quot;proxyMediumIdentifier\&quot; shows that a phone was used as device for executing this event and it provides this phone&#39;s identifier.&lt;br /&gt;For example:&lt;br /&gt; \&quot;details\&quot;: {&lt;br /&gt;&amp;nbsp;&amp;nbsp; \&quot;fields\&quot;: {&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; \&quot;batteryStatus\&quot;: 100,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; \&quot;timeSynchronized\&quot;: {&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; \&quot;timeDeltaInSeconds\&quot;: 8,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; \&quot;success\&quot;: true&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; }&lt;br /&gt;&amp;nbsp;&amp;nbsp; },&lt;br /&gt;&amp;nbsp;&amp;nbsp; \&quot;translations\&quot;: {&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; \&quot;de-DE\&quot;: Schließkomponente aktualisiert: Uhrzeit aktualisiert (Zeitdifferenz: @timeDeltaInSeconds), Batterie: @batteryStatus).\&quot;&lt;br /&gt;&amp;nbsp;&amp;nbsp; }&lt;br /&gt;}
 * @package  Coucounco\Airkey\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LockProtocolDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LockProtocolDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fields' => 'object',
        'translations' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fields' => null,
        'translations' => null
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
        'fields' => 'fields',
        'translations' => 'translations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fields' => 'setFields',
        'translations' => 'setTranslations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fields' => 'getFields',
        'translations' => 'getTranslations'
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
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['translations'] = isset($data['translations']) ? $data['translations'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets fields
     *
     * @return object
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param object $fields Event details value fields
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets translations
     *
     * @return map[string,string]
     */
    public function getTranslations()
    {
        return $this->container['translations'];
    }

    /**
     * Sets translations
     *
     * @param map[string,string] $translations Event details translations comprising all requested languages (default only \"de-DE\")
     *
     * @return $this
     */
    public function setTranslations($translations)
    {
        $this->container['translations'] = $translations;

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


