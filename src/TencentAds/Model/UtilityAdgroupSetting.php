<?php
/**
 * UtilityAdgroupSetting
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
 * OpenAPI spec version: 1.1
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
 * UtilityAdgroupSetting Class Doc Comment
 *
 * @category Class
 * @description 广告组信息所组成的对象
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UtilityAdgroupSetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'utility_adgroup_setting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'adgroupId' => 'int',
        'adgroupName' => 'string',
        'automaticSiteEnabled' => 'bool',
        'siteSet' => 'string[]',
        'bidType' => '\TencentAds\Model\AdgroupBidType',
        'bidAmount' => 'int',
        'promotedObjectType' => '\TencentAds\Model\UtilityCreateAndUpdatePromotedObjectType',
        'billingEvent' => '\TencentAds\Model\AdgroupBillingEvent',
        'optimizationGoal' => '\TencentAds\Model\AdgroupOptimizationGoal',
        'promotedObjectId' => 'string',
        'timeSeries' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'adgroupId' => 'int64',
        'adgroupName' => null,
        'automaticSiteEnabled' => null,
        'siteSet' => null,
        'bidType' => null,
        'bidAmount' => 'int64',
        'promotedObjectType' => null,
        'billingEvent' => null,
        'optimizationGoal' => null,
        'promotedObjectId' => null,
        'timeSeries' => null
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
        'adgroupId' => 'adgroup_id',
        'adgroupName' => 'adgroup_name',
        'automaticSiteEnabled' => 'automatic_site_enabled',
        'siteSet' => 'site_set',
        'bidType' => 'bid_type',
        'bidAmount' => 'bid_amount',
        'promotedObjectType' => 'promoted_object_type',
        'billingEvent' => 'billing_event',
        'optimizationGoal' => 'optimization_goal',
        'promotedObjectId' => 'promoted_object_id',
        'timeSeries' => 'time_series'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adgroupId' => 'setAdgroupId',
        'adgroupName' => 'setAdgroupName',
        'automaticSiteEnabled' => 'setAutomaticSiteEnabled',
        'siteSet' => 'setSiteSet',
        'bidType' => 'setBidType',
        'bidAmount' => 'setBidAmount',
        'promotedObjectType' => 'setPromotedObjectType',
        'billingEvent' => 'setBillingEvent',
        'optimizationGoal' => 'setOptimizationGoal',
        'promotedObjectId' => 'setPromotedObjectId',
        'timeSeries' => 'setTimeSeries'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adgroupId' => 'getAdgroupId',
        'adgroupName' => 'getAdgroupName',
        'automaticSiteEnabled' => 'getAutomaticSiteEnabled',
        'siteSet' => 'getSiteSet',
        'bidType' => 'getBidType',
        'bidAmount' => 'getBidAmount',
        'promotedObjectType' => 'getPromotedObjectType',
        'billingEvent' => 'getBillingEvent',
        'optimizationGoal' => 'getOptimizationGoal',
        'promotedObjectId' => 'getPromotedObjectId',
        'timeSeries' => 'getTimeSeries'
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
        $this->container['adgroupId'] = isset($data['adgroupId']) ? $data['adgroupId'] : null;
        $this->container['adgroupName'] = isset($data['adgroupName']) ? $data['adgroupName'] : null;
        $this->container['automaticSiteEnabled'] = isset($data['automaticSiteEnabled']) ? $data['automaticSiteEnabled'] : null;
        $this->container['siteSet'] = isset($data['siteSet']) ? $data['siteSet'] : null;
        $this->container['bidType'] = isset($data['bidType']) ? $data['bidType'] : null;
        $this->container['bidAmount'] = isset($data['bidAmount']) ? $data['bidAmount'] : null;
        $this->container['promotedObjectType'] = isset($data['promotedObjectType']) ? $data['promotedObjectType'] : null;
        $this->container['billingEvent'] = isset($data['billingEvent']) ? $data['billingEvent'] : null;
        $this->container['optimizationGoal'] = isset($data['optimizationGoal']) ? $data['optimizationGoal'] : null;
        $this->container['promotedObjectId'] = isset($data['promotedObjectId']) ? $data['promotedObjectId'] : null;
        $this->container['timeSeries'] = isset($data['timeSeries']) ? $data['timeSeries'] : null;
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
     * Gets adgroupId
     *
     * @return int
     */
    public function getAdgroupId()
    {
        return $this->container['adgroupId'];
    }

    /**
     * Sets adgroupId
     *
     * @param int $adgroupId adgroupId
     *
     * @return $this
     */
    public function setAdgroupId($adgroupId)
    {
        $this->container['adgroupId'] = $adgroupId;

        return $this;
    }

    /**
     * Gets adgroupName
     *
     * @return string
     */
    public function getAdgroupName()
    {
        return $this->container['adgroupName'];
    }

    /**
     * Sets adgroupName
     *
     * @param string $adgroupName adgroupName
     *
     * @return $this
     */
    public function setAdgroupName($adgroupName)
    {
        $this->container['adgroupName'] = $adgroupName;

        return $this;
    }

    /**
     * Gets automaticSiteEnabled
     *
     * @return bool
     */
    public function getAutomaticSiteEnabled()
    {
        return $this->container['automaticSiteEnabled'];
    }

    /**
     * Sets automaticSiteEnabled
     *
     * @param bool $automaticSiteEnabled automaticSiteEnabled
     *
     * @return $this
     */
    public function setAutomaticSiteEnabled($automaticSiteEnabled)
    {
        $this->container['automaticSiteEnabled'] = $automaticSiteEnabled;

        return $this;
    }

    /**
     * Gets siteSet
     *
     * @return string[]
     */
    public function getSiteSet()
    {
        return $this->container['siteSet'];
    }

    /**
     * Sets siteSet
     *
     * @param string[] $siteSet siteSet
     *
     * @return $this
     */
    public function setSiteSet($siteSet)
    {
        $this->container['siteSet'] = $siteSet;

        return $this;
    }

    /**
     * Gets bidType
     *
     * @return \TencentAds\Model\AdgroupBidType
     */
    public function getBidType()
    {
        return $this->container['bidType'];
    }

    /**
     * Sets bidType
     *
     * @param \TencentAds\Model\AdgroupBidType $bidType bidType
     *
     * @return $this
     */
    public function setBidType($bidType)
    {
        $this->container['bidType'] = $bidType;

        return $this;
    }

    /**
     * Gets bidAmount
     *
     * @return int
     */
    public function getBidAmount()
    {
        return $this->container['bidAmount'];
    }

    /**
     * Sets bidAmount
     *
     * @param int $bidAmount bidAmount
     *
     * @return $this
     */
    public function setBidAmount($bidAmount)
    {
        $this->container['bidAmount'] = $bidAmount;

        return $this;
    }

    /**
     * Gets promotedObjectType
     *
     * @return \TencentAds\Model\UtilityCreateAndUpdatePromotedObjectType
     */
    public function getPromotedObjectType()
    {
        return $this->container['promotedObjectType'];
    }

    /**
     * Sets promotedObjectType
     *
     * @param \TencentAds\Model\UtilityCreateAndUpdatePromotedObjectType $promotedObjectType promotedObjectType
     *
     * @return $this
     */
    public function setPromotedObjectType($promotedObjectType)
    {
        $this->container['promotedObjectType'] = $promotedObjectType;

        return $this;
    }

    /**
     * Gets billingEvent
     *
     * @return \TencentAds\Model\AdgroupBillingEvent
     */
    public function getBillingEvent()
    {
        return $this->container['billingEvent'];
    }

    /**
     * Sets billingEvent
     *
     * @param \TencentAds\Model\AdgroupBillingEvent $billingEvent billingEvent
     *
     * @return $this
     */
    public function setBillingEvent($billingEvent)
    {
        $this->container['billingEvent'] = $billingEvent;

        return $this;
    }

    /**
     * Gets optimizationGoal
     *
     * @return \TencentAds\Model\AdgroupOptimizationGoal
     */
    public function getOptimizationGoal()
    {
        return $this->container['optimizationGoal'];
    }

    /**
     * Sets optimizationGoal
     *
     * @param \TencentAds\Model\AdgroupOptimizationGoal $optimizationGoal optimizationGoal
     *
     * @return $this
     */
    public function setOptimizationGoal($optimizationGoal)
    {
        $this->container['optimizationGoal'] = $optimizationGoal;

        return $this;
    }

    /**
     * Gets promotedObjectId
     *
     * @return string
     */
    public function getPromotedObjectId()
    {
        return $this->container['promotedObjectId'];
    }

    /**
     * Sets promotedObjectId
     *
     * @param string $promotedObjectId promotedObjectId
     *
     * @return $this
     */
    public function setPromotedObjectId($promotedObjectId)
    {
        $this->container['promotedObjectId'] = $promotedObjectId;

        return $this;
    }

    /**
     * Gets timeSeries
     *
     * @return string
     */
    public function getTimeSeries()
    {
        return $this->container['timeSeries'];
    }

    /**
     * Sets timeSeries
     *
     * @param string $timeSeries timeSeries
     *
     * @return $this
     */
    public function setTimeSeries($timeSeries)
    {
        $this->container['timeSeries'] = $timeSeries;

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


