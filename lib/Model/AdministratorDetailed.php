<?php
/**
 * AdministratorDetailed
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
 * AdministratorDetailed Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdministratorDetailed implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Administrator-detailed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'username' => 'string',
        'pass' => 'string',
        'email' => 'string',
        'active' => 'bool',
        'restricted' => 'bool',
        'name' => 'string',
        'lastname' => 'string',
        'id' => 'int',
        'company' => '\Swagger\Client\Model\Company',
        'timezone' => '\Swagger\Client\Model\Timezone'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'username' => null,
        'pass' => null,
        'email' => null,
        'active' => null,
        'restricted' => null,
        'name' => null,
        'lastname' => null,
        'id' => null,
        'company' => null,
        'timezone' => null
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
        'username' => 'username',
        'pass' => 'pass',
        'email' => 'email',
        'active' => 'active',
        'restricted' => 'restricted',
        'name' => 'name',
        'lastname' => 'lastname',
        'id' => 'id',
        'company' => 'company',
        'timezone' => 'timezone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'username' => 'setUsername',
        'pass' => 'setPass',
        'email' => 'setEmail',
        'active' => 'setActive',
        'restricted' => 'setRestricted',
        'name' => 'setName',
        'lastname' => 'setLastname',
        'id' => 'setId',
        'company' => 'setCompany',
        'timezone' => 'setTimezone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'username' => 'getUsername',
        'pass' => 'getPass',
        'email' => 'getEmail',
        'active' => 'getActive',
        'restricted' => 'getRestricted',
        'name' => 'getName',
        'lastname' => 'getLastname',
        'id' => 'getId',
        'company' => 'getCompany',
        'timezone' => 'getTimezone'
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
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['pass'] = isset($data['pass']) ? $data['pass'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : '';
        $this->container['active'] = isset($data['active']) ? $data['active'] : false;
        $this->container['restricted'] = isset($data['restricted']) ? $data['restricted'] : false;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
        if ((mb_strlen($this->container['username']) > 65)) {
            $invalidProperties[] = "invalid value for 'username', the character length must be smaller than or equal to 65.";
        }

        if ($this->container['pass'] === null) {
            $invalidProperties[] = "'pass' can't be null";
        }
        if ((mb_strlen($this->container['pass']) > 80)) {
            $invalidProperties[] = "invalid value for 'pass', the character length must be smaller than or equal to 80.";
        }

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ((mb_strlen($this->container['email']) > 100)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
        }
        if ($this->container['restricted'] === null) {
            $invalidProperties[] = "'restricted' can't be null";
        }
        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['lastname']) && (mb_strlen($this->container['lastname']) > 100)) {
            $invalidProperties[] = "invalid value for 'lastname', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['company'] === null) {
            $invalidProperties[] = "'company' can't be null";
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
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username 
     *
     * @return $this
     */
    public function setUsername($username)
    {
        if ((mb_strlen($username) > 65)) {
            throw new \InvalidArgumentException('invalid length for $username when calling AdministratorDetailed., must be smaller than or equal to 65.');
        }

        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets pass
     *
     * @return string
     */
    public function getPass()
    {
        return $this->container['pass'];
    }

    /**
     * Sets pass
     *
     * @param string $pass 
     *
     * @return $this
     */
    public function setPass($pass)
    {
        if ((mb_strlen($pass) > 80)) {
            throw new \InvalidArgumentException('invalid length for $pass when calling AdministratorDetailed., must be smaller than or equal to 80.');
        }

        $this->container['pass'] = $pass;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email 
     *
     * @return $this
     */
    public function setEmail($email)
    {
        if ((mb_strlen($email) > 100)) {
            throw new \InvalidArgumentException('invalid length for $email when calling AdministratorDetailed., must be smaller than or equal to 100.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active 
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets restricted
     *
     * @return bool
     */
    public function getRestricted()
    {
        return $this->container['restricted'];
    }

    /**
     * Sets restricted
     *
     * @param bool $restricted 
     *
     * @return $this
     */
    public function setRestricted($restricted)
    {
        $this->container['restricted'] = $restricted;

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
        if (!is_null($name) && (mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling AdministratorDetailed., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string $lastname 
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        if (!is_null($lastname) && (mb_strlen($lastname) > 100)) {
            throw new \InvalidArgumentException('invalid length for $lastname when calling AdministratorDetailed., must be smaller than or equal to 100.');
        }

        $this->container['lastname'] = $lastname;

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
     * @return \Swagger\Client\Model\Company
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param \Swagger\Client\Model\Company $company company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return \Swagger\Client\Model\Timezone
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param \Swagger\Client\Model\Timezone $timezone timezone
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

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


