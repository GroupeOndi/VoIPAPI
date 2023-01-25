<?php
/**
 * BalanceNotification
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ivoz Provider
 *
 * Brand REST API
 *
 * OpenAPI spec version: 2.17.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.29
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
 * BalanceNotification Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BalanceNotification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BalanceNotification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'to_address' => 'string',
        'threshold' => 'float',
        'last_sent' => '\DateTime',
        'id' => 'int',
        'company' => 'int',
        'notification_template' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'to_address' => null,
        'threshold' => 'float',
        'last_sent' => 'date-time',
        'id' => null,
        'company' => null,
        'notification_template' => null
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
        'to_address' => 'toAddress',
        'threshold' => 'threshold',
        'last_sent' => 'lastSent',
        'id' => 'id',
        'company' => 'company',
        'notification_template' => 'notificationTemplate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'to_address' => 'setToAddress',
        'threshold' => 'setThreshold',
        'last_sent' => 'setLastSent',
        'id' => 'setId',
        'company' => 'setCompany',
        'notification_template' => 'setNotificationTemplate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'to_address' => 'getToAddress',
        'threshold' => 'getThreshold',
        'last_sent' => 'getLastSent',
        'id' => 'getId',
        'company' => 'getCompany',
        'notification_template' => 'getNotificationTemplate'
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
        $this->container['to_address'] = isset($data['to_address']) ? $data['to_address'] : null;
        $this->container['threshold'] = isset($data['threshold']) ? $data['threshold'] : 0.0;
        $this->container['last_sent'] = isset($data['last_sent']) ? $data['last_sent'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['notification_template'] = isset($data['notification_template']) ? $data['notification_template'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['to_address']) && (mb_strlen($this->container['to_address']) > 255)) {
            $invalidProperties[] = "invalid value for 'to_address', the character length must be smaller than or equal to 255.";
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
     * Gets to_address
     *
     * @return string
     */
    public function getToAddress()
    {
        return $this->container['to_address'];
    }

    /**
     * Sets to_address
     *
     * @param string $to_address 
     *
     * @return $this
     */
    public function setToAddress($to_address)
    {
        if (!is_null($to_address) && (mb_strlen($to_address) > 255)) {
            throw new \InvalidArgumentException('invalid length for $to_address when calling BalanceNotification., must be smaller than or equal to 255.');
        }

        $this->container['to_address'] = $to_address;

        return $this;
    }

    /**
     * Gets threshold
     *
     * @return float
     */
    public function getThreshold()
    {
        return $this->container['threshold'];
    }

    /**
     * Sets threshold
     *
     * @param float $threshold 
     *
     * @return $this
     */
    public function setThreshold($threshold)
    {
        $this->container['threshold'] = $threshold;

        return $this;
    }

    /**
     * Gets last_sent
     *
     * @return \DateTime
     */
    public function getLastSent()
    {
        return $this->container['last_sent'];
    }

    /**
     * Sets last_sent
     *
     * @param \DateTime $last_sent 
     *
     * @return $this
     */
    public function setLastSent($last_sent)
    {
        $this->container['last_sent'] = $last_sent;

        return $this;
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
     * @param int $id 
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets company
     *
     * @return int
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param int $company 
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets notification_template
     *
     * @return int
     */
    public function getNotificationTemplate()
    {
        return $this->container['notification_template'];
    }

    /**
     * Sets notification_template
     *
     * @param int $notification_template 
     *
     * @return $this
     */
    public function setNotificationTemplate($notification_template)
    {
        $this->container['notification_template'] = $notification_template;

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


