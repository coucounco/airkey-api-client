<?php
/**
 * SendAKeyMailRequest
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
 * SendAKeyMailRequest Class Doc Comment
 *
 * @category Class
 * @description Model that describes a send-a-key via mail request.
 * @package  Coucounco\Airkey\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SendAKeyMailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SendAKeyMailRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'phone' => '\Coucounco\Airkey\Swagger\Client\Model\SendAKeyPhone',
        'person' => '\Coucounco\Airkey\Swagger\Client\Model\PersonCreateMail',
        'authorization' => '\Coucounco\Airkey\Swagger\Client\Model\FixedMediumSimpleAuthorizationCreate',
        'mail_text' => 'string',
        'mail_subject' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'phone' => null,
        'person' => null,
        'authorization' => null,
        'mail_text' => null,
        'mail_subject' => null
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
        'phone' => 'phone',
        'person' => 'person',
        'authorization' => 'authorization',
        'mail_text' => 'mailText',
        'mail_subject' => 'mailSubject'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'phone' => 'setPhone',
        'person' => 'setPerson',
        'authorization' => 'setAuthorization',
        'mail_text' => 'setMailText',
        'mail_subject' => 'setMailSubject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'phone' => 'getPhone',
        'person' => 'getPerson',
        'authorization' => 'getAuthorization',
        'mail_text' => 'getMailText',
        'mail_subject' => 'getMailSubject'
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
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['person'] = isset($data['person']) ? $data['person'] : null;
        $this->container['authorization'] = isset($data['authorization']) ? $data['authorization'] : null;
        $this->container['mail_text'] = isset($data['mail_text']) ? $data['mail_text'] : null;
        $this->container['mail_subject'] = isset($data['mail_subject']) ? $data['mail_subject'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['phone'] === null) {
            $invalidProperties[] = "'phone' can't be null";
        }
        if ($this->container['person'] === null) {
            $invalidProperties[] = "'person' can't be null";
        }
        if (!is_null($this->container['mail_text']) && (mb_strlen($this->container['mail_text']) > 2048)) {
            $invalidProperties[] = "invalid value for 'mail_text', the character length must be smaller than or equal to 2048.";
        }

        if (!is_null($this->container['mail_text']) && (mb_strlen($this->container['mail_text']) < 0)) {
            $invalidProperties[] = "invalid value for 'mail_text', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['mail_subject']) && (mb_strlen($this->container['mail_subject']) > 100)) {
            $invalidProperties[] = "invalid value for 'mail_subject', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['mail_subject']) && (mb_strlen($this->container['mail_subject']) < 0)) {
            $invalidProperties[] = "invalid value for 'mail_subject', the character length must be bigger than or equal to 0.";
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
     * Gets phone
     *
     * @return \Coucounco\Airkey\Swagger\Client\Model\SendAKeyPhone
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param \Coucounco\Airkey\Swagger\Client\Model\SendAKeyPhone $phone Phone to create / use
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets person
     *
     * @return \Coucounco\Airkey\Swagger\Client\Model\PersonCreateMail
     */
    public function getPerson()
    {
        return $this->container['person'];
    }

    /**
     * Sets person
     *
     * @param \Coucounco\Airkey\Swagger\Client\Model\PersonCreateMail $person Person to create / use (the search filter criteria of a person use: 'firstName', 'lastName', and 'secondaryIdentification')
     *
     * @return $this
     */
    public function setPerson($person)
    {
        $this->container['person'] = $person;

        return $this;
    }

    /**
     * Gets authorization
     *
     * @return \Coucounco\Airkey\Swagger\Client\Model\FixedMediumSimpleAuthorizationCreate
     */
    public function getAuthorization()
    {
        return $this->container['authorization'];
    }

    /**
     * Sets authorization
     *
     * @param \Coucounco\Airkey\Swagger\Client\Model\FixedMediumSimpleAuthorizationCreate $authorization Authorization to create / use
     *
     * @return $this
     */
    public function setAuthorization($authorization)
    {
        $this->container['authorization'] = $authorization;

        return $this;
    }

    /**
     * Gets mail_text
     *
     * @return string
     */
    public function getMailText()
    {
        return $this->container['mail_text'];
    }

    /**
     * Sets mail_text
     *
     * @param string $mail_text Mail text. Default text will be used if not set.
     *
     * @return $this
     */
    public function setMailText($mail_text)
    {
        if (!is_null($mail_text) && (mb_strlen($mail_text) > 2048)) {
            throw new \InvalidArgumentException('invalid length for $mail_text when calling SendAKeyMailRequest., must be smaller than or equal to 2048.');
        }
        if (!is_null($mail_text) && (mb_strlen($mail_text) < 0)) {
            throw new \InvalidArgumentException('invalid length for $mail_text when calling SendAKeyMailRequest., must be bigger than or equal to 0.');
        }

        $this->container['mail_text'] = $mail_text;

        return $this;
    }

    /**
     * Gets mail_subject
     *
     * @return string
     */
    public function getMailSubject()
    {
        return $this->container['mail_subject'];
    }

    /**
     * Sets mail_subject
     *
     * @param string $mail_subject Mail subject. Default subject will be used if not set.
     *
     * @return $this
     */
    public function setMailSubject($mail_subject)
    {
        if (!is_null($mail_subject) && (mb_strlen($mail_subject) > 100)) {
            throw new \InvalidArgumentException('invalid length for $mail_subject when calling SendAKeyMailRequest., must be smaller than or equal to 100.');
        }
        if (!is_null($mail_subject) && (mb_strlen($mail_subject) < 0)) {
            throw new \InvalidArgumentException('invalid length for $mail_subject when calling SendAKeyMailRequest., must be bigger than or equal to 0.');
        }

        $this->container['mail_subject'] = $mail_subject;

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


