<?php
/**
 * QualificationSpec
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
 * QualificationSpec Class Doc Comment
 *
 * @category Class
 * @description 资质信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QualificationSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'qualification_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'industrySpec' => '\TencentAds\Model\IndustryQualificationsSpec',
        'adSpec' => '\TencentAds\Model\AdQualificationsSpec',
        'additionalIndustrySpec' => '\TencentAds\Model\AdditionalIndustryQualificationsSpec',
        'industryWechatSpec' => '\TencentAds\Model\WechatIndustryQualificationsSpec',
        'adWechatSpec' => '\TencentAds\Model\WechatAdQualificationsSpec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'industrySpec' => null,
        'adSpec' => null,
        'additionalIndustrySpec' => null,
        'industryWechatSpec' => null,
        'adWechatSpec' => null
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
        'industrySpec' => 'industry_spec',
        'adSpec' => 'ad_spec',
        'additionalIndustrySpec' => 'additional_industry_spec',
        'industryWechatSpec' => 'industry_wechat_spec',
        'adWechatSpec' => 'ad_wechat_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'industrySpec' => 'setIndustrySpec',
        'adSpec' => 'setAdSpec',
        'additionalIndustrySpec' => 'setAdditionalIndustrySpec',
        'industryWechatSpec' => 'setIndustryWechatSpec',
        'adWechatSpec' => 'setAdWechatSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'industrySpec' => 'getIndustrySpec',
        'adSpec' => 'getAdSpec',
        'additionalIndustrySpec' => 'getAdditionalIndustrySpec',
        'industryWechatSpec' => 'getIndustryWechatSpec',
        'adWechatSpec' => 'getAdWechatSpec'
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
        $this->container['industrySpec'] = isset($data['industrySpec']) ? $data['industrySpec'] : null;
        $this->container['adSpec'] = isset($data['adSpec']) ? $data['adSpec'] : null;
        $this->container['additionalIndustrySpec'] = isset($data['additionalIndustrySpec']) ? $data['additionalIndustrySpec'] : null;
        $this->container['industryWechatSpec'] = isset($data['industryWechatSpec']) ? $data['industryWechatSpec'] : null;
        $this->container['adWechatSpec'] = isset($data['adWechatSpec']) ? $data['adWechatSpec'] : null;
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
     * Gets industrySpec
     *
     * @return \TencentAds\Model\IndustryQualificationsSpec|mixed
     */
    public function getIndustrySpec()
    {
        return $this->container['industrySpec'];
    }

    /**
     * Sets industrySpec
     *
     * @param \TencentAds\Model\IndustryQualificationsSpec $industrySpec industrySpec
     *
     * @return $this
     */
    public function setIndustrySpec($industrySpec)
    {
        $this->container['industrySpec'] = $industrySpec;

        return $this;
    }

    /**
     * Gets adSpec
     *
     * @return \TencentAds\Model\AdQualificationsSpec|mixed
     */
    public function getAdSpec()
    {
        return $this->container['adSpec'];
    }

    /**
     * Sets adSpec
     *
     * @param \TencentAds\Model\AdQualificationsSpec $adSpec adSpec
     *
     * @return $this
     */
    public function setAdSpec($adSpec)
    {
        $this->container['adSpec'] = $adSpec;

        return $this;
    }

    /**
     * Gets additionalIndustrySpec
     *
     * @return \TencentAds\Model\AdditionalIndustryQualificationsSpec|mixed
     */
    public function getAdditionalIndustrySpec()
    {
        return $this->container['additionalIndustrySpec'];
    }

    /**
     * Sets additionalIndustrySpec
     *
     * @param \TencentAds\Model\AdditionalIndustryQualificationsSpec $additionalIndustrySpec additionalIndustrySpec
     *
     * @return $this
     */
    public function setAdditionalIndustrySpec($additionalIndustrySpec)
    {
        $this->container['additionalIndustrySpec'] = $additionalIndustrySpec;

        return $this;
    }

    /**
     * Gets industryWechatSpec
     *
     * @return \TencentAds\Model\WechatIndustryQualificationsSpec|mixed
     */
    public function getIndustryWechatSpec()
    {
        return $this->container['industryWechatSpec'];
    }

    /**
     * Sets industryWechatSpec
     *
     * @param \TencentAds\Model\WechatIndustryQualificationsSpec $industryWechatSpec industryWechatSpec
     *
     * @return $this
     */
    public function setIndustryWechatSpec($industryWechatSpec)
    {
        $this->container['industryWechatSpec'] = $industryWechatSpec;

        return $this;
    }

    /**
     * Gets adWechatSpec
     *
     * @return \TencentAds\Model\WechatAdQualificationsSpec|mixed
     */
    public function getAdWechatSpec()
    {
        return $this->container['adWechatSpec'];
    }

    /**
     * Sets adWechatSpec
     *
     * @param \TencentAds\Model\WechatAdQualificationsSpec $adWechatSpec adWechatSpec
     *
     * @return $this
     */
    public function setAdWechatSpec($adWechatSpec)
    {
        $this->container['adWechatSpec'] = $adWechatSpec;

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


