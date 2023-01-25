<?php
/**
 * CallCsvReportDetailed
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
 * CallCsvReportDetailed Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CallCsvReportDetailed implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CallCsvReport-detailed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sent_to' => 'string',
        'in_date' => '\DateTime',
        'out_date' => '\DateTime',
        'created_on' => '\DateTime',
        'id' => 'int',
        'csv' => 'string',
        'brand' => '\Swagger\Client\Model\Brand',
        'call_csv_scheduler' => '\Swagger\Client\Model\CallCsvScheduler'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sent_to' => null,
        'in_date' => 'date-time',
        'out_date' => 'date-time',
        'created_on' => 'date-time',
        'id' => null,
        'csv' => null,
        'brand' => null,
        'call_csv_scheduler' => null
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
        'sent_to' => 'sentTo',
        'in_date' => 'inDate',
        'out_date' => 'outDate',
        'created_on' => 'createdOn',
        'id' => 'id',
        'csv' => 'csv',
        'brand' => 'brand',
        'call_csv_scheduler' => 'callCsvScheduler'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sent_to' => 'setSentTo',
        'in_date' => 'setInDate',
        'out_date' => 'setOutDate',
        'created_on' => 'setCreatedOn',
        'id' => 'setId',
        'csv' => 'setCsv',
        'brand' => 'setBrand',
        'call_csv_scheduler' => 'setCallCsvScheduler'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sent_to' => 'getSentTo',
        'in_date' => 'getInDate',
        'out_date' => 'getOutDate',
        'created_on' => 'getCreatedOn',
        'id' => 'getId',
        'csv' => 'getCsv',
        'brand' => 'getBrand',
        'call_csv_scheduler' => 'getCallCsvScheduler'
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
        $this->container['sent_to'] = isset($data['sent_to']) ? $data['sent_to'] : '';
        $this->container['in_date'] = isset($data['in_date']) ? $data['in_date'] : null;
        $this->container['out_date'] = isset($data['out_date']) ? $data['out_date'] : null;
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['csv'] = isset($data['csv']) ? $data['csv'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['call_csv_scheduler'] = isset($data['call_csv_scheduler']) ? $data['call_csv_scheduler'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sent_to'] === null) {
            $invalidProperties[] = "'sent_to' can't be null";
        }
        if ((mb_strlen($this->container['sent_to']) > 250)) {
            $invalidProperties[] = "invalid value for 'sent_to', the character length must be smaller than or equal to 250.";
        }

        if ($this->container['in_date'] === null) {
            $invalidProperties[] = "'in_date' can't be null";
        }
        if ($this->container['out_date'] === null) {
            $invalidProperties[] = "'out_date' can't be null";
        }
        if ($this->container['created_on'] === null) {
            $invalidProperties[] = "'created_on' can't be null";
        }
        if ($this->container['brand'] === null) {
            $invalidProperties[] = "'brand' can't be null";
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
     * Gets sent_to
     *
     * @return string
     */
    public function getSentTo()
    {
        return $this->container['sent_to'];
    }

    /**
     * Sets sent_to
     *
     * @param string $sent_to 
     *
     * @return $this
     */
    public function setSentTo($sent_to)
    {
        if ((mb_strlen($sent_to) > 250)) {
            throw new \InvalidArgumentException('invalid length for $sent_to when calling CallCsvReportDetailed., must be smaller than or equal to 250.');
        }

        $this->container['sent_to'] = $sent_to;

        return $this;
    }

    /**
     * Gets in_date
     *
     * @return \DateTime
     */
    public function getInDate()
    {
        return $this->container['in_date'];
    }

    /**
     * Sets in_date
     *
     * @param \DateTime $in_date 
     *
     * @return $this
     */
    public function setInDate($in_date)
    {
        $this->container['in_date'] = $in_date;

        return $this;
    }

    /**
     * Gets out_date
     *
     * @return \DateTime
     */
    public function getOutDate()
    {
        return $this->container['out_date'];
    }

    /**
     * Sets out_date
     *
     * @param \DateTime $out_date 
     *
     * @return $this
     */
    public function setOutDate($out_date)
    {
        $this->container['out_date'] = $out_date;

        return $this;
    }

    /**
     * Gets created_on
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param \DateTime $created_on 
     *
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

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
     * Gets csv
     *
     * @return string
     */
    public function getCsv()
    {
        return $this->container['csv'];
    }

    /**
     * Sets csv
     *
     * @param string $csv 
     *
     * @return $this
     */
    public function setCsv($csv)
    {
        $this->container['csv'] = $csv;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return \Swagger\Client\Model\Brand
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param \Swagger\Client\Model\Brand $brand brand
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets call_csv_scheduler
     *
     * @return \Swagger\Client\Model\CallCsvScheduler
     */
    public function getCallCsvScheduler()
    {
        return $this->container['call_csv_scheduler'];
    }

    /**
     * Sets call_csv_scheduler
     *
     * @param \Swagger\Client\Model\CallCsvScheduler $call_csv_scheduler call_csv_scheduler
     *
     * @return $this
     */
    public function setCallCsvScheduler($call_csv_scheduler)
    {
        $this->container['call_csv_scheduler'] = $call_csv_scheduler;

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


