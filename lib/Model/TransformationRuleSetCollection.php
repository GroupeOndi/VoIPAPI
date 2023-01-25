<?php
/**
 * TransformationRuleSetCollection
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
 * TransformationRuleSetCollection Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransformationRuleSetCollection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransformationRuleSet-collection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
        'international_code' => 'string',
        'trunk_prefix' => 'string',
        'area_code' => 'string',
        'national_len' => 'int',
        'id' => 'int',
        'name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'international_code' => null,
        'trunk_prefix' => null,
        'area_code' => null,
        'national_len' => null,
        'id' => null,
        'name' => null
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
        'description' => 'description',
        'international_code' => 'internationalCode',
        'trunk_prefix' => 'trunkPrefix',
        'area_code' => 'areaCode',
        'national_len' => 'nationalLen',
        'id' => 'id',
        'name' => 'name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'international_code' => 'setInternationalCode',
        'trunk_prefix' => 'setTrunkPrefix',
        'area_code' => 'setAreaCode',
        'national_len' => 'setNationalLen',
        'id' => 'setId',
        'name' => 'setName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'international_code' => 'getInternationalCode',
        'trunk_prefix' => 'getTrunkPrefix',
        'area_code' => 'getAreaCode',
        'national_len' => 'getNationalLen',
        'id' => 'getId',
        'name' => 'getName'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['international_code'] = isset($data['international_code']) ? $data['international_code'] : '00';
        $this->container['trunk_prefix'] = isset($data['trunk_prefix']) ? $data['trunk_prefix'] : '';
        $this->container['area_code'] = isset($data['area_code']) ? $data['area_code'] : '';
        $this->container['national_len'] = isset($data['national_len']) ? $data['national_len'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 250)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['international_code']) && (mb_strlen($this->container['international_code']) > 10)) {
            $invalidProperties[] = "invalid value for 'international_code', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['trunk_prefix']) && (mb_strlen($this->container['trunk_prefix']) > 5)) {
            $invalidProperties[] = "invalid value for 'trunk_prefix', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['area_code']) && (mb_strlen($this->container['area_code']) > 5)) {
            $invalidProperties[] = "invalid value for 'area_code', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['national_len']) && ($this->container['national_len'] < 0)) {
            $invalidProperties[] = "invalid value for 'national_len', must be bigger than or equal to 0.";
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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description 
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 250)) {
            throw new \InvalidArgumentException('invalid length for $description when calling TransformationRuleSetCollection., must be smaller than or equal to 250.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets international_code
     *
     * @return string
     */
    public function getInternationalCode()
    {
        return $this->container['international_code'];
    }

    /**
     * Sets international_code
     *
     * @param string $international_code 
     *
     * @return $this
     */
    public function setInternationalCode($international_code)
    {
        if (!is_null($international_code) && (mb_strlen($international_code) > 10)) {
            throw new \InvalidArgumentException('invalid length for $international_code when calling TransformationRuleSetCollection., must be smaller than or equal to 10.');
        }

        $this->container['international_code'] = $international_code;

        return $this;
    }

    /**
     * Gets trunk_prefix
     *
     * @return string
     */
    public function getTrunkPrefix()
    {
        return $this->container['trunk_prefix'];
    }

    /**
     * Sets trunk_prefix
     *
     * @param string $trunk_prefix 
     *
     * @return $this
     */
    public function setTrunkPrefix($trunk_prefix)
    {
        if (!is_null($trunk_prefix) && (mb_strlen($trunk_prefix) > 5)) {
            throw new \InvalidArgumentException('invalid length for $trunk_prefix when calling TransformationRuleSetCollection., must be smaller than or equal to 5.');
        }

        $this->container['trunk_prefix'] = $trunk_prefix;

        return $this;
    }

    /**
     * Gets area_code
     *
     * @return string
     */
    public function getAreaCode()
    {
        return $this->container['area_code'];
    }

    /**
     * Sets area_code
     *
     * @param string $area_code 
     *
     * @return $this
     */
    public function setAreaCode($area_code)
    {
        if (!is_null($area_code) && (mb_strlen($area_code) > 5)) {
            throw new \InvalidArgumentException('invalid length for $area_code when calling TransformationRuleSetCollection., must be smaller than or equal to 5.');
        }

        $this->container['area_code'] = $area_code;

        return $this;
    }

    /**
     * Gets national_len
     *
     * @return int
     */
    public function getNationalLen()
    {
        return $this->container['national_len'];
    }

    /**
     * Sets national_len
     *
     * @param int $national_len 
     *
     * @return $this
     */
    public function setNationalLen($national_len)
    {

        if (!is_null($national_len) && ($national_len < 0)) {
            throw new \InvalidArgumentException('invalid value for $national_len when calling TransformationRuleSetCollection., must be bigger than or equal to 0.');
        }

        $this->container['national_len'] = $national_len;

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
     * @param string $name 
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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


