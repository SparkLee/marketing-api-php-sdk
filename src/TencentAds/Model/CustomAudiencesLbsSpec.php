<?php
/**
 * CustomAudiencesLbsSpec
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
 * CustomAudiencesLbsSpec Class Doc Comment
 *
 * @category Class
 * @description LBS人群信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomAudiencesLbsSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'custom_audiences_lbs_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lbsType' => '\TencentAds\Model\CustomAudiencesLbsType',
        'crossCityRule' => '\TencentAds\Model\CustomAudiencesCrossCityRule',
        'poiRule' => '\TencentAds\Model\CustomAudiencesPoiRule',
        'customLocationRule' => '\TencentAds\Model\CustomAudiencesCustomLocationRule'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'lbsType' => null,
        'crossCityRule' => null,
        'poiRule' => null,
        'customLocationRule' => null
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
        'lbsType' => 'lbs_type',
        'crossCityRule' => 'cross_city_rule',
        'poiRule' => 'poi_rule',
        'customLocationRule' => 'custom_location_rule'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lbsType' => 'setLbsType',
        'crossCityRule' => 'setCrossCityRule',
        'poiRule' => 'setPoiRule',
        'customLocationRule' => 'setCustomLocationRule'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lbsType' => 'getLbsType',
        'crossCityRule' => 'getCrossCityRule',
        'poiRule' => 'getPoiRule',
        'customLocationRule' => 'getCustomLocationRule'
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
        $this->container['lbsType'] = isset($data['lbsType']) ? $data['lbsType'] : null;
        $this->container['crossCityRule'] = isset($data['crossCityRule']) ? $data['crossCityRule'] : null;
        $this->container['poiRule'] = isset($data['poiRule']) ? $data['poiRule'] : null;
        $this->container['customLocationRule'] = isset($data['customLocationRule']) ? $data['customLocationRule'] : null;
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
     * Gets lbsType
     *
     * @return \TencentAds\Model\CustomAudiencesLbsType
     */
    public function getLbsType()
    {
        return $this->container['lbsType'];
    }

    /**
     * Sets lbsType
     *
     * @param \TencentAds\Model\CustomAudiencesLbsType $lbsType lbsType
     *
     * @return $this
     */
    public function setLbsType($lbsType)
    {
        $this->container['lbsType'] = $lbsType;

        return $this;
    }

    /**
     * Gets crossCityRule
     *
     * @return \TencentAds\Model\CustomAudiencesCrossCityRule
     */
    public function getCrossCityRule()
    {
        return $this->container['crossCityRule'];
    }

    /**
     * Sets crossCityRule
     *
     * @param \TencentAds\Model\CustomAudiencesCrossCityRule $crossCityRule crossCityRule
     *
     * @return $this
     */
    public function setCrossCityRule($crossCityRule)
    {
        $this->container['crossCityRule'] = $crossCityRule;

        return $this;
    }

    /**
     * Gets poiRule
     *
     * @return \TencentAds\Model\CustomAudiencesPoiRule
     */
    public function getPoiRule()
    {
        return $this->container['poiRule'];
    }

    /**
     * Sets poiRule
     *
     * @param \TencentAds\Model\CustomAudiencesPoiRule $poiRule poiRule
     *
     * @return $this
     */
    public function setPoiRule($poiRule)
    {
        $this->container['poiRule'] = $poiRule;

        return $this;
    }

    /**
     * Gets customLocationRule
     *
     * @return \TencentAds\Model\CustomAudiencesCustomLocationRule
     */
    public function getCustomLocationRule()
    {
        return $this->container['customLocationRule'];
    }

    /**
     * Sets customLocationRule
     *
     * @param \TencentAds\Model\CustomAudiencesCustomLocationRule $customLocationRule customLocationRule
     *
     * @return $this
     */
    public function setCustomLocationRule($customLocationRule)
    {
        $this->container['customLocationRule'] = $customLocationRule;

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


