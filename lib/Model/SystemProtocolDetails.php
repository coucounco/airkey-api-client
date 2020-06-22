<?php
/**
 * SystemProtocolDetails
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
 * SystemProtocolDetails Class Doc Comment
 *
 * @category Class
 * @description Model that describes details of an event logged in the system protocol of an access control system, e.g., what activity was performed on which locking component/medium and what data were changed on a locking component/medium during an update. The details are presented in form of a short description of the event, which is translated to the requested languages (default only \&quot;de-DE\&quot;). The fields provide the actual values for the placeholders in the translation strings (prefixed with an @ symbol). Since the actually used attributes vary between different activities, the returned details usually only contain a subset of the following attributes:&lt;br /&gt;\&quot;aco\&quot;, \&quot;amount\&quot;, \&quot;activated\&quot;, \&quot;area\&quot;, \&quot;authorizations\&quot;, \&quot;capError\&quot;, \&quot;capVersion\&quot;, \&quot;city\&quot;, \&quot;clientId\&quot;, \&quot;code\&quot;, \&quot;comment\&quot;, \&quot;companyName\&quot;, \&quot;costActivation\&quot;, country\&quot;, \&quot;customer\&quot;, \&quot;cylinderNumber\&quot;, \&quot;cylinderType\&quot;, \&quot;deactivationComment\&quot;, \&quot;details\&quot;, \&quot;doorAdditionalInformation\&quot;, \&quot;doorName\&quot;, \&quot;email\&quot;, \&quot;emailNotificationInveral\&quot;, \&quot;endOfValidity\&quot;, \&quot;endOfValidityAfter\&quot;, \&quot;endTime\&quot;, \&quot;fax\&quot;, \&quot;firstname\&quot;, \&quot;isCustom\&quot;, \&quot;isKeyRingLogVisible\&quot;, \&quot;JavaCardAppletVersion\&quot;, \&quot;language\&quot;, \&quot;lastname\&quot;, \&quot;lockingSystemName\&quot;, \&quot;mediumIdentifier\&quot;, \&quot;mediumType\&quot;, \&quot;model\&quot;, \&quot;motorPicVersion\&quot;, \&quot;mPicError\&quot;, \&quot;name\&quot;, \&quot;newEndOfValidity\&quot;, \&quot;newValue\&quot;, \&quot;notesEmailNotification\&quot;, \&quot;number\&quot;, \&quot;oldValue\&quot;, \&quot;operatorName\&quot;, \&quot;packageVersion\&quot;, \&quot;phone\&quot;, \&quot;phoneNumber\&quot;, \&quot;period\&quot;, \&quot;picError\&quot;, \&quot;picVersion\&quot;, \&quot;proxyMediumIdentifier\&quot;, \&quot;reactivationComment\&quot;, \&quot;reason\&quot;, \&quot;reasonForDeactivating\&quot;, \&quot;reasonForReactivating\&quot;, \&quot;requestsPerDay\&quot;, \&quot;startTime\&quot;, \&quot;street\&quot;, \&quot;subcomponent\&quot;, \&quot;title\&quot;, \&quot;translationKey\&quot;, \&quot;tyAfter\&quot;, \&quot;type\&quot;, \&quot;updateEmailNotification\&quot;, \&quot;user\&quot;, \&quot;username\&quot;, \&quot;validFrom\&quot;, \&quot;validTo\&quot;, \&quot;zip\&quot;&lt;br /&gt;For example:&lt;br /&gt; \&quot;details\&quot;: {&lt;br /&gt;&amp;nbsp;&amp;nbsp; \&quot;fields\&quot;: {&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; \&quot;name\&quot;: \&quot;phone 1\&quot;,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; \&quot;mediumType\&quot;: \&quot;MOBILE_PHONE\&quot;, &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; \&quot;details\&quot;: {&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; \&quot;isInMaintenanceMode\&quot;: true &lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; },&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; \&quot;phoneNumber\&quot;: \&quot;+43123456789\&quot;,&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; \&quot;mediumIdentifier\&quot;: \&quot;01A2B3C4D5E6F7G8H\&quot;&lt;br /&gt;&amp;nbsp;&amp;nbsp; },&lt;br /&gt;&amp;nbsp;&amp;nbsp; \&quot;translations\&quot;: {&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; \&quot;de-DE\&quot;: \&quot;@mediumType \\\&quot;@mediumIdentifier\\\&quot;#{ (@name)}#{ @phoneNumber} wurde erfolgreich bearbeitet.\&quot;&lt;br /&gt;&amp;nbsp;&amp;nbsp; }&lt;br /&gt;}
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SystemProtocolDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SystemProtocolDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fields' => '\Swagger\Client\Model\JsonNode',
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
     * @return \Swagger\Client\Model\JsonNode
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param \Swagger\Client\Model\JsonNode $fields Event details value fields using a JSON structure
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


