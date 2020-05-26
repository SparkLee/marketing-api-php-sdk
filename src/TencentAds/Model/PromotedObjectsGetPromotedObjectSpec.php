<?php
/**
 * PromotedObjectsGetPromotedObjectSpec
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
 * PromotedObjectsGetPromotedObjectSpec Class Doc Comment
 *
 * @category Class
 * @description 推广目标详细信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PromotedObjectsGetPromotedObjectSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'promoted_objects_get_promoted_object_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'jdItem' => '\TencentAds\Model\PromotedObjectsGetEcInfo',
        'jdShop' => '\TencentAds\Model\PromotedObjectsGetEcInfo',
        'appIosSpec' => '\TencentAds\Model\PromotedObjectsGetAppIosSpec',
        'appAndroidSpec' => '\TencentAds\Model\PromotedObjectsGetAppAndroidSpec',
        'appAndroidUnionSpec' => '\TencentAds\Model\PromotedObjectsGetAppAndroidUnionSpec',
        'appAndroidMyappSpec' => '\TencentAds\Model\PromotedObjectsGetAppAndroidMyappSpec',
        'dianpingShop' => '\TencentAds\Model\PromotedObjectProductTypeDianpingShop',
        'qqBrowserMiniProgram' => '\TencentAds\Model\PromotedObjectsGetQqBrowserMiniProgram',
        'localAdsSpec' => '\TencentAds\Model\PromotedObjectsGetLocalAdsSpec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'jdItem' => null,
        'jdShop' => null,
        'appIosSpec' => null,
        'appAndroidSpec' => null,
        'appAndroidUnionSpec' => null,
        'appAndroidMyappSpec' => null,
        'dianpingShop' => null,
        'qqBrowserMiniProgram' => null,
        'localAdsSpec' => null
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
        'jdItem' => 'jd_item',
        'jdShop' => 'jd_shop',
        'appIosSpec' => 'app_ios_spec',
        'appAndroidSpec' => 'app_android_spec',
        'appAndroidUnionSpec' => 'app_android_union_spec',
        'appAndroidMyappSpec' => 'app_android_myapp_spec',
        'dianpingShop' => 'dianping_shop',
        'qqBrowserMiniProgram' => 'qq_browser_mini_program',
        'localAdsSpec' => 'local_ads_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'jdItem' => 'setJdItem',
        'jdShop' => 'setJdShop',
        'appIosSpec' => 'setAppIosSpec',
        'appAndroidSpec' => 'setAppAndroidSpec',
        'appAndroidUnionSpec' => 'setAppAndroidUnionSpec',
        'appAndroidMyappSpec' => 'setAppAndroidMyappSpec',
        'dianpingShop' => 'setDianpingShop',
        'qqBrowserMiniProgram' => 'setQqBrowserMiniProgram',
        'localAdsSpec' => 'setLocalAdsSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'jdItem' => 'getJdItem',
        'jdShop' => 'getJdShop',
        'appIosSpec' => 'getAppIosSpec',
        'appAndroidSpec' => 'getAppAndroidSpec',
        'appAndroidUnionSpec' => 'getAppAndroidUnionSpec',
        'appAndroidMyappSpec' => 'getAppAndroidMyappSpec',
        'dianpingShop' => 'getDianpingShop',
        'qqBrowserMiniProgram' => 'getQqBrowserMiniProgram',
        'localAdsSpec' => 'getLocalAdsSpec'
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
        $this->container['jdItem'] = isset($data['jdItem']) ? $data['jdItem'] : null;
        $this->container['jdShop'] = isset($data['jdShop']) ? $data['jdShop'] : null;
        $this->container['appIosSpec'] = isset($data['appIosSpec']) ? $data['appIosSpec'] : null;
        $this->container['appAndroidSpec'] = isset($data['appAndroidSpec']) ? $data['appAndroidSpec'] : null;
        $this->container['appAndroidUnionSpec'] = isset($data['appAndroidUnionSpec']) ? $data['appAndroidUnionSpec'] : null;
        $this->container['appAndroidMyappSpec'] = isset($data['appAndroidMyappSpec']) ? $data['appAndroidMyappSpec'] : null;
        $this->container['dianpingShop'] = isset($data['dianpingShop']) ? $data['dianpingShop'] : null;
        $this->container['qqBrowserMiniProgram'] = isset($data['qqBrowserMiniProgram']) ? $data['qqBrowserMiniProgram'] : null;
        $this->container['localAdsSpec'] = isset($data['localAdsSpec']) ? $data['localAdsSpec'] : null;
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
     * Gets jdItem
     *
     * @return \TencentAds\Model\PromotedObjectsGetEcInfo
     */
    public function getJdItem()
    {
        return $this->container['jdItem'];
    }

    /**
     * Sets jdItem
     *
     * @param \TencentAds\Model\PromotedObjectsGetEcInfo $jdItem jdItem
     *
     * @return $this
     */
    public function setJdItem($jdItem)
    {
        $this->container['jdItem'] = $jdItem;

        return $this;
    }

    /**
     * Gets jdShop
     *
     * @return \TencentAds\Model\PromotedObjectsGetEcInfo
     */
    public function getJdShop()
    {
        return $this->container['jdShop'];
    }

    /**
     * Sets jdShop
     *
     * @param \TencentAds\Model\PromotedObjectsGetEcInfo $jdShop jdShop
     *
     * @return $this
     */
    public function setJdShop($jdShop)
    {
        $this->container['jdShop'] = $jdShop;

        return $this;
    }

    /**
     * Gets appIosSpec
     *
     * @return \TencentAds\Model\PromotedObjectsGetAppIosSpec
     */
    public function getAppIosSpec()
    {
        return $this->container['appIosSpec'];
    }

    /**
     * Sets appIosSpec
     *
     * @param \TencentAds\Model\PromotedObjectsGetAppIosSpec $appIosSpec appIosSpec
     *
     * @return $this
     */
    public function setAppIosSpec($appIosSpec)
    {
        $this->container['appIosSpec'] = $appIosSpec;

        return $this;
    }

    /**
     * Gets appAndroidSpec
     *
     * @return \TencentAds\Model\PromotedObjectsGetAppAndroidSpec
     */
    public function getAppAndroidSpec()
    {
        return $this->container['appAndroidSpec'];
    }

    /**
     * Sets appAndroidSpec
     *
     * @param \TencentAds\Model\PromotedObjectsGetAppAndroidSpec $appAndroidSpec appAndroidSpec
     *
     * @return $this
     */
    public function setAppAndroidSpec($appAndroidSpec)
    {
        $this->container['appAndroidSpec'] = $appAndroidSpec;

        return $this;
    }

    /**
     * Gets appAndroidUnionSpec
     *
     * @return \TencentAds\Model\PromotedObjectsGetAppAndroidUnionSpec
     */
    public function getAppAndroidUnionSpec()
    {
        return $this->container['appAndroidUnionSpec'];
    }

    /**
     * Sets appAndroidUnionSpec
     *
     * @param \TencentAds\Model\PromotedObjectsGetAppAndroidUnionSpec $appAndroidUnionSpec appAndroidUnionSpec
     *
     * @return $this
     */
    public function setAppAndroidUnionSpec($appAndroidUnionSpec)
    {
        $this->container['appAndroidUnionSpec'] = $appAndroidUnionSpec;

        return $this;
    }

    /**
     * Gets appAndroidMyappSpec
     *
     * @return \TencentAds\Model\PromotedObjectsGetAppAndroidMyappSpec
     */
    public function getAppAndroidMyappSpec()
    {
        return $this->container['appAndroidMyappSpec'];
    }

    /**
     * Sets appAndroidMyappSpec
     *
     * @param \TencentAds\Model\PromotedObjectsGetAppAndroidMyappSpec $appAndroidMyappSpec appAndroidMyappSpec
     *
     * @return $this
     */
    public function setAppAndroidMyappSpec($appAndroidMyappSpec)
    {
        $this->container['appAndroidMyappSpec'] = $appAndroidMyappSpec;

        return $this;
    }

    /**
     * Gets dianpingShop
     *
     * @return \TencentAds\Model\PromotedObjectProductTypeDianpingShop
     */
    public function getDianpingShop()
    {
        return $this->container['dianpingShop'];
    }

    /**
     * Sets dianpingShop
     *
     * @param \TencentAds\Model\PromotedObjectProductTypeDianpingShop $dianpingShop dianpingShop
     *
     * @return $this
     */
    public function setDianpingShop($dianpingShop)
    {
        $this->container['dianpingShop'] = $dianpingShop;

        return $this;
    }

    /**
     * Gets qqBrowserMiniProgram
     *
     * @return \TencentAds\Model\PromotedObjectsGetQqBrowserMiniProgram
     */
    public function getQqBrowserMiniProgram()
    {
        return $this->container['qqBrowserMiniProgram'];
    }

    /**
     * Sets qqBrowserMiniProgram
     *
     * @param \TencentAds\Model\PromotedObjectsGetQqBrowserMiniProgram $qqBrowserMiniProgram qqBrowserMiniProgram
     *
     * @return $this
     */
    public function setQqBrowserMiniProgram($qqBrowserMiniProgram)
    {
        $this->container['qqBrowserMiniProgram'] = $qqBrowserMiniProgram;

        return $this;
    }

    /**
     * Gets localAdsSpec
     *
     * @return \TencentAds\Model\PromotedObjectsGetLocalAdsSpec
     */
    public function getLocalAdsSpec()
    {
        return $this->container['localAdsSpec'];
    }

    /**
     * Sets localAdsSpec
     *
     * @param \TencentAds\Model\PromotedObjectsGetLocalAdsSpec $localAdsSpec localAdsSpec
     *
     * @return $this
     */
    public function setLocalAdsSpec($localAdsSpec)
    {
        $this->container['localAdsSpec'] = $localAdsSpec;

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


