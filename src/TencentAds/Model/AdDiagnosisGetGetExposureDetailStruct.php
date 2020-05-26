<?php
/**
 * AdDiagnosisGetGetExposureDetailStruct
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
 * AdDiagnosisGetGetExposureDetailStruct Class Doc Comment
 *
 * @category Class
 * @description 曝光诊断详情
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdDiagnosisGetGetExposureDetailStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ad_diagnosis_get_get_exposure_detail_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'effectData' => '\TencentAds\Model\AdDiagnosisGetEffectDataStruct',
        'effectDataTrends' => '\TencentAds\Model\AdDiagnosisGetEffectDataTrendsListItem[]',
        'targetingLabelContribution' => '\TencentAds\Model\AdDiagnosisGetTargetingLabelContributionStruct'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'effectData' => null,
        'effectDataTrends' => null,
        'targetingLabelContribution' => null
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
        'effectData' => 'effect_data',
        'effectDataTrends' => 'effect_data_trends',
        'targetingLabelContribution' => 'targeting_label_contribution'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'effectData' => 'setEffectData',
        'effectDataTrends' => 'setEffectDataTrends',
        'targetingLabelContribution' => 'setTargetingLabelContribution'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'effectData' => 'getEffectData',
        'effectDataTrends' => 'getEffectDataTrends',
        'targetingLabelContribution' => 'getTargetingLabelContribution'
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
        $this->container['effectData'] = isset($data['effectData']) ? $data['effectData'] : null;
        $this->container['effectDataTrends'] = isset($data['effectDataTrends']) ? $data['effectDataTrends'] : null;
        $this->container['targetingLabelContribution'] = isset($data['targetingLabelContribution']) ? $data['targetingLabelContribution'] : null;
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
     * Gets effectData
     *
     * @return \TencentAds\Model\AdDiagnosisGetEffectDataStruct
     */
    public function getEffectData()
    {
        return $this->container['effectData'];
    }

    /**
     * Sets effectData
     *
     * @param \TencentAds\Model\AdDiagnosisGetEffectDataStruct $effectData effectData
     *
     * @return $this
     */
    public function setEffectData($effectData)
    {
        $this->container['effectData'] = $effectData;

        return $this;
    }

    /**
     * Gets effectDataTrends
     *
     * @return \TencentAds\Model\AdDiagnosisGetEffectDataTrendsListItem[]
     */
    public function getEffectDataTrends()
    {
        return $this->container['effectDataTrends'];
    }

    /**
     * Sets effectDataTrends
     *
     * @param \TencentAds\Model\AdDiagnosisGetEffectDataTrendsListItem[] $effectDataTrends effectDataTrends
     *
     * @return $this
     */
    public function setEffectDataTrends($effectDataTrends)
    {
        $this->container['effectDataTrends'] = $effectDataTrends;

        return $this;
    }

    /**
     * Gets targetingLabelContribution
     *
     * @return \TencentAds\Model\AdDiagnosisGetTargetingLabelContributionStruct
     */
    public function getTargetingLabelContribution()
    {
        return $this->container['targetingLabelContribution'];
    }

    /**
     * Sets targetingLabelContribution
     *
     * @param \TencentAds\Model\AdDiagnosisGetTargetingLabelContributionStruct $targetingLabelContribution targetingLabelContribution
     *
     * @return $this
     */
    public function setTargetingLabelContribution($targetingLabelContribution)
    {
        $this->container['targetingLabelContribution'] = $targetingLabelContribution;

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


