<?php
/**
 * AuthorizationChange
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
 * Swagger Codegen version: 2.4.14
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
 * AuthorizationChange Class Doc Comment
 *
 * @category Class
 * @description Model that describes two lists of medium authorizations: one list with authorizations to be created in the access control system, the other list with authorizations to be updated.
 * @package  Coucounco\Airkey\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthorizationChange implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuthorizationChange';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'authorization_create_list' => '\Coucounco\Airkey\Swagger\Client\Model\AuthorizationCreate[]',
        'authorization_update_list' => '\Coucounco\Airkey\Swagger\Client\Model\Authorization[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'authorization_create_list' => null,
        'authorization_update_list' => null
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
        'authorization_create_list' => 'authorizationCreateList',
        'authorization_update_list' => 'authorizationUpdateList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authorization_create_list' => 'setAuthorizationCreateList',
        'authorization_update_list' => 'setAuthorizationUpdateList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authorization_create_list' => 'getAuthorizationCreateList',
        'authorization_update_list' => 'getAuthorizationUpdateList'
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
        $this->container['authorization_create_list'] = isset($data['authorization_create_list']) ? $data['authorization_create_list'] : null;
        $this->container['authorization_update_list'] = isset($data['authorization_update_list']) ? $data['authorization_update_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['authorization_create_list'] === null) {
            $invalidProperties[] = "'authorization_create_list' can't be null";
        }
        if ($this->container['authorization_update_list'] === null) {
            $invalidProperties[] = "'authorization_update_list' can't be null";
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
     * Gets authorization_create_list
     *
     * @return \Coucounco\Airkey\Swagger\Client\Model\AuthorizationCreate[]
     */
    public function getAuthorizationCreateList()
    {
        return $this->container['authorization_create_list'];
    }

    /**
     * Sets authorization_create_list
     *
     * @param \Coucounco\Airkey\Swagger\Client\Model\AuthorizationCreate[] $authorization_create_list List of medium authorizations to be created for the provided locks/areas
     *
     * @return $this
     */
    public function setAuthorizationCreateList($authorization_create_list)
    {
        $this->container['authorization_create_list'] = $authorization_create_list;

        return $this;
    }

    /**
     * Gets authorization_update_list
     *
     * @return \Coucounco\Airkey\Swagger\Client\Model\Authorization[]
     */
    public function getAuthorizationUpdateList()
    {
        return $this->container['authorization_update_list'];
    }

    /**
     * Sets authorization_update_list
     *
     * @param \Coucounco\Airkey\Swagger\Client\Model\Authorization[] $authorization_update_list List of medium authorizations to be updated
     *
     * @return $this
     */
    public function setAuthorizationUpdateList($authorization_update_list)
    {
        $this->container['authorization_update_list'] = $authorization_update_list;

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

