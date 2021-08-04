<?php
/**
 * AdvertiserOperatorStruct
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
 * AdvertiserOperatorStruct Class Doc Comment
 *
 * @category Class
 * @description 运营人员结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdvertiserOperatorStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'advertiser_operator_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'operatorId' => 'int',
        'operatorName' => 'string',
        'qq' => 'int',
        'wechatAccountId' => 'string',
        'isMaster' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'operatorId' => 'int64',
        'operatorName' => null,
        'qq' => 'int64',
        'wechatAccountId' => null,
        'isMaster' => null
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
        'operatorId' => 'operator_id',
        'operatorName' => 'operator_name',
        'qq' => 'qq',
        'wechatAccountId' => 'wechat_account_id',
        'isMaster' => 'is_master'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'operatorId' => 'setOperatorId',
        'operatorName' => 'setOperatorName',
        'qq' => 'setQq',
        'wechatAccountId' => 'setWechatAccountId',
        'isMaster' => 'setIsMaster'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'operatorId' => 'getOperatorId',
        'operatorName' => 'getOperatorName',
        'qq' => 'getQq',
        'wechatAccountId' => 'getWechatAccountId',
        'isMaster' => 'getIsMaster'
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
        $this->container['operatorId'] = isset($data['operatorId']) ? $data['operatorId'] : null;
        $this->container['operatorName'] = isset($data['operatorName']) ? $data['operatorName'] : null;
        $this->container['qq'] = isset($data['qq']) ? $data['qq'] : null;
        $this->container['wechatAccountId'] = isset($data['wechatAccountId']) ? $data['wechatAccountId'] : null;
        $this->container['isMaster'] = isset($data['isMaster']) ? $data['isMaster'] : null;
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
     * Gets operatorId
     *
     * @return int|mixed
     */
    public function getOperatorId()
    {
        return $this->container['operatorId'];
    }

    /**
     * Sets operatorId
     *
     * @param int $operatorId operatorId
     *
     * @return $this
     */
    public function setOperatorId($operatorId)
    {
        $this->container['operatorId'] = $operatorId;

        return $this;
    }

    /**
     * Gets operatorName
     *
     * @return string|mixed
     */
    public function getOperatorName()
    {
        return $this->container['operatorName'];
    }

    /**
     * Sets operatorName
     *
     * @param string $operatorName operatorName
     *
     * @return $this
     */
    public function setOperatorName($operatorName)
    {
        $this->container['operatorName'] = $operatorName;

        return $this;
    }

    /**
     * Gets qq
     *
     * @return int|mixed
     */
    public function getQq()
    {
        return $this->container['qq'];
    }

    /**
     * Sets qq
     *
     * @param int $qq qq
     *
     * @return $this
     */
    public function setQq($qq)
    {
        $this->container['qq'] = $qq;

        return $this;
    }

    /**
     * Gets wechatAccountId
     *
     * @return string|mixed
     */
    public function getWechatAccountId()
    {
        return $this->container['wechatAccountId'];
    }

    /**
     * Sets wechatAccountId
     *
     * @param string $wechatAccountId wechatAccountId
     *
     * @return $this
     */
    public function setWechatAccountId($wechatAccountId)
    {
        $this->container['wechatAccountId'] = $wechatAccountId;

        return $this;
    }

    /**
     * Gets isMaster
     *
     * @return bool|mixed
     */
    public function getIsMaster()
    {
        return $this->container['isMaster'];
    }

    /**
     * Sets isMaster
     *
     * @param bool $isMaster isMaster
     *
     * @return $this
     */
    public function setIsMaster($isMaster)
    {
        $this->container['isMaster'] = $isMaster;

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


