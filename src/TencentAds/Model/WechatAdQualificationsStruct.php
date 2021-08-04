<?php
/**
 * WechatAdQualificationsStruct
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
 * WechatAdQualificationsStruct Class Doc Comment
 *
 * @category Class
 * @description 微信广告资质信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WechatAdQualificationsStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'wechat_ad_qualifications_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'qualificationId' => 'int',
        'qualificationName' => 'string',
        'imageUrl' => 'string',
        'expiredDate' => 'string',
        'qualificationStatus' => '\TencentAds\Model\QualificationStatus',
        'rejectMessage' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'qualificationId' => 'int64',
        'qualificationName' => null,
        'imageUrl' => null,
        'expiredDate' => null,
        'qualificationStatus' => null,
        'rejectMessage' => null
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
        'qualificationId' => 'qualification_id',
        'qualificationName' => 'qualification_name',
        'imageUrl' => 'image_url',
        'expiredDate' => 'expired_date',
        'qualificationStatus' => 'qualification_status',
        'rejectMessage' => 'reject_message'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'qualificationId' => 'setQualificationId',
        'qualificationName' => 'setQualificationName',
        'imageUrl' => 'setImageUrl',
        'expiredDate' => 'setExpiredDate',
        'qualificationStatus' => 'setQualificationStatus',
        'rejectMessage' => 'setRejectMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'qualificationId' => 'getQualificationId',
        'qualificationName' => 'getQualificationName',
        'imageUrl' => 'getImageUrl',
        'expiredDate' => 'getExpiredDate',
        'qualificationStatus' => 'getQualificationStatus',
        'rejectMessage' => 'getRejectMessage'
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
        $this->container['qualificationId'] = isset($data['qualificationId']) ? $data['qualificationId'] : null;
        $this->container['qualificationName'] = isset($data['qualificationName']) ? $data['qualificationName'] : null;
        $this->container['imageUrl'] = isset($data['imageUrl']) ? $data['imageUrl'] : null;
        $this->container['expiredDate'] = isset($data['expiredDate']) ? $data['expiredDate'] : null;
        $this->container['qualificationStatus'] = isset($data['qualificationStatus']) ? $data['qualificationStatus'] : null;
        $this->container['rejectMessage'] = isset($data['rejectMessage']) ? $data['rejectMessage'] : null;
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
     * Gets qualificationId
     *
     * @return int|mixed
     */
    public function getQualificationId()
    {
        return $this->container['qualificationId'];
    }

    /**
     * Sets qualificationId
     *
     * @param int $qualificationId qualificationId
     *
     * @return $this
     */
    public function setQualificationId($qualificationId)
    {
        $this->container['qualificationId'] = $qualificationId;

        return $this;
    }

    /**
     * Gets qualificationName
     *
     * @return string|mixed
     */
    public function getQualificationName()
    {
        return $this->container['qualificationName'];
    }

    /**
     * Sets qualificationName
     *
     * @param string $qualificationName qualificationName
     *
     * @return $this
     */
    public function setQualificationName($qualificationName)
    {
        $this->container['qualificationName'] = $qualificationName;

        return $this;
    }

    /**
     * Gets imageUrl
     *
     * @return string|mixed
     */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
     * Sets imageUrl
     *
     * @param string $imageUrl imageUrl
     *
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {
        $this->container['imageUrl'] = $imageUrl;

        return $this;
    }

    /**
     * Gets expiredDate
     *
     * @return string|mixed
     */
    public function getExpiredDate()
    {
        return $this->container['expiredDate'];
    }

    /**
     * Sets expiredDate
     *
     * @param string $expiredDate expiredDate
     *
     * @return $this
     */
    public function setExpiredDate($expiredDate)
    {
        $this->container['expiredDate'] = $expiredDate;

        return $this;
    }

    /**
     * Gets qualificationStatus
     *
     * @return \TencentAds\Model\QualificationStatus|mixed
     */
    public function getQualificationStatus()
    {
        return $this->container['qualificationStatus'];
    }

    /**
     * Sets qualificationStatus
     *
     * @param \TencentAds\Model\QualificationStatus $qualificationStatus qualificationStatus
     *
     * @return $this
     */
    public function setQualificationStatus($qualificationStatus)
    {
        $this->container['qualificationStatus'] = $qualificationStatus;

        return $this;
    }

    /**
     * Gets rejectMessage
     *
     * @return string|mixed
     */
    public function getRejectMessage()
    {
        return $this->container['rejectMessage'];
    }

    /**
     * Sets rejectMessage
     *
     * @param string $rejectMessage rejectMessage
     *
     * @return $this
     */
    public function setRejectMessage($rejectMessage)
    {
        $this->container['rejectMessage'] = $rejectMessage;

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


