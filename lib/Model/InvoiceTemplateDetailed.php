<?php
/**
 * InvoiceTemplateDetailed
 *
 * PHP version 5
 *
 * @category Class
 * @package  Delta/Voip
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

namespace Delta/Voip\Model;

use \ArrayAccess;
use \Delta/Voip\ObjectSerializer;

/**
 * InvoiceTemplateDetailed Class Doc Comment
 *
 * @category Class
 * @package  Delta/Voip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoiceTemplateDetailed implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvoiceTemplate-detailed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'description' => 'string',
        'template' => 'string',
        'template_header' => 'string',
        'template_footer' => 'string',
        'id' => 'int',
        'global' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'description' => null,
        'template' => null,
        'template_header' => null,
        'template_footer' => null,
        'id' => null,
        'global' => null
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
        'name' => 'name',
        'description' => 'description',
        'template' => 'template',
        'template_header' => 'templateHeader',
        'template_footer' => 'templateFooter',
        'id' => 'id',
        'global' => 'global'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'template' => 'setTemplate',
        'template_header' => 'setTemplateHeader',
        'template_footer' => 'setTemplateFooter',
        'id' => 'setId',
        'global' => 'setGlobal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'template' => 'getTemplate',
        'template_header' => 'getTemplateHeader',
        'template_footer' => 'getTemplateFooter',
        'id' => 'getId',
        'global' => 'getGlobal'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['template_header'] = isset($data['template_header']) ? $data['template_header'] : null;
        $this->container['template_footer'] = isset($data['template_footer']) ? $data['template_footer'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['global'] = isset($data['global']) ? $data['global'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 55)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 55.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 300)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 300.";
        }

        if ($this->container['template'] === null) {
            $invalidProperties[] = "'template' can't be null";
        }
        if ((mb_strlen($this->container['template']) > 65535)) {
            $invalidProperties[] = "invalid value for 'template', the character length must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['template_header']) && (mb_strlen($this->container['template_header']) > 65535)) {
            $invalidProperties[] = "invalid value for 'template_header', the character length must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['template_footer']) && (mb_strlen($this->container['template_footer']) > 65535)) {
            $invalidProperties[] = "invalid value for 'template_footer', the character length must be smaller than or equal to 65535.";
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
        if ((mb_strlen($name) > 55)) {
            throw new \InvalidArgumentException('invalid length for $name when calling InvoiceTemplateDetailed., must be smaller than or equal to 55.');
        }

        $this->container['name'] = $name;

        return $this;
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
        if (!is_null($description) && (mb_strlen($description) > 300)) {
            throw new \InvalidArgumentException('invalid length for $description when calling InvoiceTemplateDetailed., must be smaller than or equal to 300.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets template
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param string $template 
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        if ((mb_strlen($template) > 65535)) {
            throw new \InvalidArgumentException('invalid length for $template when calling InvoiceTemplateDetailed., must be smaller than or equal to 65535.');
        }

        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets template_header
     *
     * @return string
     */
    public function getTemplateHeader()
    {
        return $this->container['template_header'];
    }

    /**
     * Sets template_header
     *
     * @param string $template_header 
     *
     * @return $this
     */
    public function setTemplateHeader($template_header)
    {
        if (!is_null($template_header) && (mb_strlen($template_header) > 65535)) {
            throw new \InvalidArgumentException('invalid length for $template_header when calling InvoiceTemplateDetailed., must be smaller than or equal to 65535.');
        }

        $this->container['template_header'] = $template_header;

        return $this;
    }

    /**
     * Gets template_footer
     *
     * @return string
     */
    public function getTemplateFooter()
    {
        return $this->container['template_footer'];
    }

    /**
     * Sets template_footer
     *
     * @param string $template_footer 
     *
     * @return $this
     */
    public function setTemplateFooter($template_footer)
    {
        if (!is_null($template_footer) && (mb_strlen($template_footer) > 65535)) {
            throw new \InvalidArgumentException('invalid length for $template_footer when calling InvoiceTemplateDetailed., must be smaller than or equal to 65535.');
        }

        $this->container['template_footer'] = $template_footer;

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
     * Gets global
     *
     * @return bool
     */
    public function getGlobal()
    {
        return $this->container['global'];
    }

    /**
     * Sets global
     *
     * @param bool $global Global Special Number
     *
     * @return $this
     */
    public function setGlobal($global)
    {
        $this->container['global'] = $global;

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


