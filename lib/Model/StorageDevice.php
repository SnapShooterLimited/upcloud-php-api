<?php
/**
 * StorageDevice
 *
 * PHP version 5
 *
 * @category Class
 * @package  Upcloud\ApiClient
 */

/**
 * Upcloud api
 *
 * The UpCloud API consists of operations used to control resources on UpCloud. The API is a web service interface. HTTPS is used to connect to the API. The API follows the principles of a RESTful web service wherever possible. The base URL for all API operations is  https://api.upcloud.com/. All API operations require authentication.
 *
 * OpenAPI spec version: 1.2.0
 * 
 */


namespace Upcloud\ApiClient\Model;

use \ArrayAccess;

/**
 * StorageDevice Class Doc Comment
 *
 * @category    Class
 * @package     Upcloud\ApiClient
 */
class StorageDevice implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Storage device';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'title' => 'string',
        'size' => 'float',
        'tier' => 'string',
        'action' => 'string',
        'address' => 'string',
        'part_of_plan' => 'string',
        'storage' => 'string',
        'storage_size' => 'float',
        'storage_title' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'title' => null,
        'size' => null,
        'tier' => null,
        'action' => null,
        'address' => null,
        'part_of_plan' => null,
        'storage' => null,
        'storage_size' => null,
        'storage_title' => null,
        'type' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'title' => 'title',
        'size' => 'size',
        'tier' => 'tier',
        'action' => 'action',
        'address' => 'address',
        'part_of_plan' => 'part_of_plan',
        'storage' => 'storage',
        'storage_size' => 'storage_size',
        'storage_title' => 'storage_title',
        'type' => 'type'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'size' => 'setSize',
        'tier' => 'setTier',
        'action' => 'setAction',
        'address' => 'setAddress',
        'part_of_plan' => 'setPartOfPlan',
        'storage' => 'setStorage',
        'storage_size' => 'setStorageSize',
        'storage_title' => 'setStorageTitle',
        'type' => 'setType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'size' => 'getSize',
        'tier' => 'getTier',
        'action' => 'getAction',
        'address' => 'getAddress',
        'part_of_plan' => 'getPartOfPlan',
        'storage' => 'getStorage',
        'storage_size' => 'getStorageSize',
        'storage_title' => 'getStorageTitle',
        'type' => 'getType'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const PART_OF_PLAN_YES = 'yes';
    const PART_OF_PLAN_NO = 'no';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPartOfPlanAllowableValues()
    {
        return [
            self::PART_OF_PLAN_YES,
            self::PART_OF_PLAN_NO,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['tier'] = isset($data['tier']) ? $data['tier'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['part_of_plan'] = isset($data['part_of_plan']) ? $data['part_of_plan'] : null;
        $this->container['storage'] = isset($data['storage']) ? $data['storage'] : null;
        $this->container['storage_size'] = isset($data['storage_size']) ? $data['storage_size'] : null;
        $this->container['storage_title'] = isset($data['storage_title']) ? $data['storage_title'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getPartOfPlanAllowableValues();
        if (!in_array($this->container['part_of_plan'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'part_of_plan', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = $this->getPartOfPlanAllowableValues();
        if (!in_array($this->container['part_of_plan'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets size
     * @return float
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     * @param float $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets tier
     * @return string
     */
    public function getTier()
    {
        return $this->container['tier'];
    }

    /**
     * Sets tier
     * @param string $tier
     * @return $this
     */
    public function setTier($tier)
    {
        $this->container['tier'] = $tier;

        return $this;
    }

    /**
     * Gets action
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     * @param string $action
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets address
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets part_of_plan
     * @return string
     */
    public function getPartOfPlan()
    {
        return $this->container['part_of_plan'];
    }

    /**
     * Sets part_of_plan
     * @param string $part_of_plan
     * @return $this
     */
    public function setPartOfPlan($part_of_plan)
    {
        $allowed_values = $this->getPartOfPlanAllowableValues();
        if (!is_null($part_of_plan) && !in_array($part_of_plan, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'part_of_plan', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['part_of_plan'] = $part_of_plan;

        return $this;
    }

    /**
     * Gets storage
     * @return string
     */
    public function getStorage()
    {
        return $this->container['storage'];
    }

    /**
     * Sets storage
     * @param string $storage
     * @return $this
     */
    public function setStorage($storage)
    {
        $this->container['storage'] = $storage;

        return $this;
    }

    /**
     * Gets storage_size
     * @return float
     */
    public function getStorageSize()
    {
        return $this->container['storage_size'];
    }

    /**
     * Sets storage_size
     * @param float $storage_size
     * @return $this
     */
    public function setStorageSize($storage_size)
    {
        $this->container['storage_size'] = $storage_size;

        return $this;
    }

    /**
     * Gets storage_title
     * @return string
     */
    public function getStorageTitle()
    {
        return $this->container['storage_title'];
    }

    /**
     * Sets storage_title
     * @param string $storage_title
     * @return $this
     */
    public function setStorageTitle($storage_title)
    {
        $this->container['storage_title'] = $storage_title;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Upcloud\ApiClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Upcloud\ApiClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


