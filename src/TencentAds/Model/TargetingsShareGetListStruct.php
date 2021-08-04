<?php
/**
 * TargetingsShareGetListStruct
 *
 * PHP version 5
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketing API
 *
 * Marketing API
 *
 * OpenAPI spec version: 1.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TencentAds\Model;

use \ArrayAccess;
use \TencentAds\ObjectSerializer;

/**
 * TargetingsShareGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TargetingsShareGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TargetingsShareGetListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'targetingId' => 'int',
        'shareToAccountId' => 'int',
        'shareToTargetingId' => 'int',
        'sharedTime' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'targetingId' => 'int64',
        'shareToAccountId' => 'int64',
        'shareToTargetingId' => 'int64',
        'sharedTime' => 'int64'
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
        'targetingId' => 'targeting_id',
        'shareToAccountId' => 'share_to_account_id',
        'shareToTargetingId' => 'share_to_targeting_id',
        'sharedTime' => 'shared_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'targetingId' => 'setTargetingId',
        'shareToAccountId' => 'setShareToAccountId',
        'shareToTargetingId' => 'setShareToTargetingId',
        'sharedTime' => 'setSharedTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'targetingId' => 'getTargetingId',
        'shareToAccountId' => 'getShareToAccountId',
        'shareToTargetingId' => 'getShareToTargetingId',
        'sharedTime' => 'getSharedTime'
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
        $this->container['targetingId'] = isset($data['targetingId']) ? $data['targetingId'] : null;
        $this->container['shareToAccountId'] = isset($data['shareToAccountId']) ? $data['shareToAccountId'] : null;
        $this->container['shareToTargetingId'] = isset($data['shareToTargetingId']) ? $data['shareToTargetingId'] : null;
        $this->container['sharedTime'] = isset($data['sharedTime']) ? $data['sharedTime'] : null;
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
     * Gets targetingId
     *
     * @return int|mixed
     */
    public function getTargetingId()
    {
        return $this->container['targetingId'];
    }

    /**
     * Sets targetingId
     *
     * @param int $targetingId targetingId
     *
     * @return $this
     */
    public function setTargetingId($targetingId)
    {
        $this->container['targetingId'] = $targetingId;

        return $this;
    }

    /**
     * Gets shareToAccountId
     *
     * @return int|mixed
     */
    public function getShareToAccountId()
    {
        return $this->container['shareToAccountId'];
    }

    /**
     * Sets shareToAccountId
     *
     * @param int $shareToAccountId shareToAccountId
     *
     * @return $this
     */
    public function setShareToAccountId($shareToAccountId)
    {
        $this->container['shareToAccountId'] = $shareToAccountId;

        return $this;
    }

    /**
     * Gets shareToTargetingId
     *
     * @return int|mixed
     */
    public function getShareToTargetingId()
    {
        return $this->container['shareToTargetingId'];
    }

    /**
     * Sets shareToTargetingId
     *
     * @param int $shareToTargetingId shareToTargetingId
     *
     * @return $this
     */
    public function setShareToTargetingId($shareToTargetingId)
    {
        $this->container['shareToTargetingId'] = $shareToTargetingId;

        return $this;
    }

    /**
     * Gets sharedTime
     *
     * @return int|mixed
     */
    public function getSharedTime()
    {
        return $this->container['sharedTime'];
    }

    /**
     * Sets sharedTime
     *
     * @param int $sharedTime sharedTime
     *
     * @return $this
     */
    public function setSharedTime($sharedTime)
    {
        $this->container['sharedTime'] = $sharedTime;

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


