<?php
/**
 * DetailCreativeDetailStruct
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
 * DetailCreativeDetailStruct Class Doc Comment
 *
 * @category Class
 * @description 诊断详情-定向明细
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DetailCreativeDetailStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'detail_creative_detail_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'isVideo' => 'bool',
        'isWechatMoment' => 'bool',
        'playDuration' => 'string',
        'playProgress' => 'string',
        'ctrLevel' => '\TencentAds\Model\CtrLevelStruct',
        'effectivePlayRate' => '\TencentAds\Model\EffectivePlayRateStruct',
        'noInterestClickRate' => '\TencentAds\Model\NoInterestClickRateStruct'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'isVideo' => null,
        'isWechatMoment' => null,
        'playDuration' => null,
        'playProgress' => null,
        'ctrLevel' => null,
        'effectivePlayRate' => null,
        'noInterestClickRate' => null
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
        'isVideo' => 'is_video',
        'isWechatMoment' => 'is_wechat_moment',
        'playDuration' => 'play_duration',
        'playProgress' => 'play_progress',
        'ctrLevel' => 'ctr_level',
        'effectivePlayRate' => 'effective_play_rate',
        'noInterestClickRate' => 'no_interest_click_rate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'isVideo' => 'setIsVideo',
        'isWechatMoment' => 'setIsWechatMoment',
        'playDuration' => 'setPlayDuration',
        'playProgress' => 'setPlayProgress',
        'ctrLevel' => 'setCtrLevel',
        'effectivePlayRate' => 'setEffectivePlayRate',
        'noInterestClickRate' => 'setNoInterestClickRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'isVideo' => 'getIsVideo',
        'isWechatMoment' => 'getIsWechatMoment',
        'playDuration' => 'getPlayDuration',
        'playProgress' => 'getPlayProgress',
        'ctrLevel' => 'getCtrLevel',
        'effectivePlayRate' => 'getEffectivePlayRate',
        'noInterestClickRate' => 'getNoInterestClickRate'
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
        $this->container['isVideo'] = isset($data['isVideo']) ? $data['isVideo'] : null;
        $this->container['isWechatMoment'] = isset($data['isWechatMoment']) ? $data['isWechatMoment'] : null;
        $this->container['playDuration'] = isset($data['playDuration']) ? $data['playDuration'] : null;
        $this->container['playProgress'] = isset($data['playProgress']) ? $data['playProgress'] : null;
        $this->container['ctrLevel'] = isset($data['ctrLevel']) ? $data['ctrLevel'] : null;
        $this->container['effectivePlayRate'] = isset($data['effectivePlayRate']) ? $data['effectivePlayRate'] : null;
        $this->container['noInterestClickRate'] = isset($data['noInterestClickRate']) ? $data['noInterestClickRate'] : null;
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
     * Gets isVideo
     *
     * @return bool|mixed
     */
    public function getIsVideo()
    {
        return $this->container['isVideo'];
    }

    /**
     * Sets isVideo
     *
     * @param bool $isVideo isVideo
     *
     * @return $this
     */
    public function setIsVideo($isVideo)
    {
        $this->container['isVideo'] = $isVideo;

        return $this;
    }

    /**
     * Gets isWechatMoment
     *
     * @return bool|mixed
     */
    public function getIsWechatMoment()
    {
        return $this->container['isWechatMoment'];
    }

    /**
     * Sets isWechatMoment
     *
     * @param bool $isWechatMoment isWechatMoment
     *
     * @return $this
     */
    public function setIsWechatMoment($isWechatMoment)
    {
        $this->container['isWechatMoment'] = $isWechatMoment;

        return $this;
    }

    /**
     * Gets playDuration
     *
     * @return string|mixed
     */
    public function getPlayDuration()
    {
        return $this->container['playDuration'];
    }

    /**
     * Sets playDuration
     *
     * @param string $playDuration playDuration
     *
     * @return $this
     */
    public function setPlayDuration($playDuration)
    {
        $this->container['playDuration'] = $playDuration;

        return $this;
    }

    /**
     * Gets playProgress
     *
     * @return string|mixed
     */
    public function getPlayProgress()
    {
        return $this->container['playProgress'];
    }

    /**
     * Sets playProgress
     *
     * @param string $playProgress playProgress
     *
     * @return $this
     */
    public function setPlayProgress($playProgress)
    {
        $this->container['playProgress'] = $playProgress;

        return $this;
    }

    /**
     * Gets ctrLevel
     *
     * @return \TencentAds\Model\CtrLevelStruct|mixed
     */
    public function getCtrLevel()
    {
        return $this->container['ctrLevel'];
    }

    /**
     * Sets ctrLevel
     *
     * @param \TencentAds\Model\CtrLevelStruct $ctrLevel ctrLevel
     *
     * @return $this
     */
    public function setCtrLevel($ctrLevel)
    {
        $this->container['ctrLevel'] = $ctrLevel;

        return $this;
    }

    /**
     * Gets effectivePlayRate
     *
     * @return \TencentAds\Model\EffectivePlayRateStruct|mixed
     */
    public function getEffectivePlayRate()
    {
        return $this->container['effectivePlayRate'];
    }

    /**
     * Sets effectivePlayRate
     *
     * @param \TencentAds\Model\EffectivePlayRateStruct $effectivePlayRate effectivePlayRate
     *
     * @return $this
     */
    public function setEffectivePlayRate($effectivePlayRate)
    {
        $this->container['effectivePlayRate'] = $effectivePlayRate;

        return $this;
    }

    /**
     * Gets noInterestClickRate
     *
     * @return \TencentAds\Model\NoInterestClickRateStruct|mixed
     */
    public function getNoInterestClickRate()
    {
        return $this->container['noInterestClickRate'];
    }

    /**
     * Sets noInterestClickRate
     *
     * @param \TencentAds\Model\NoInterestClickRateStruct $noInterestClickRate noInterestClickRate
     *
     * @return $this
     */
    public function setNoInterestClickRate($noInterestClickRate)
    {
        $this->container['noInterestClickRate'] = $noInterestClickRate;

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


