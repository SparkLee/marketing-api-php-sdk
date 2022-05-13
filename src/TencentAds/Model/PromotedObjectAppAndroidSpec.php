<?php
/**
 * PromotedObjectAppAndroidSpec
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
 * PromotedObjectAppAndroidSpec Class Doc Comment
 *
 * @category Class
 * @description android应用信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PromotedObjectAppAndroidSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'promoted_object_app_android_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'packname' => 'string',
        'version' => 'string',
        'icon' => 'string',
        'averageRating' => 'string',
        'packageSize' => 'string',
        'genres' => 'string[]',
        'packageDownloadUrl' => 'string',
        'channelPackageSpec' => '\TencentAds\Model\ChannelPackageSpecStruct[]',
        'childrenPrivacyProtection' => '\TencentAds\Model\ChildrenPrivacyProtection'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'packname' => null,
        'version' => null,
        'icon' => null,
        'averageRating' => null,
        'packageSize' => null,
        'genres' => null,
        'packageDownloadUrl' => null,
        'channelPackageSpec' => null,
        'childrenPrivacyProtection' => null
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
        'packname' => 'packname',
        'version' => 'version',
        'icon' => 'icon',
        'averageRating' => 'average_rating',
        'packageSize' => 'package_size',
        'genres' => 'genres',
        'packageDownloadUrl' => 'package_download_url',
        'channelPackageSpec' => 'channel_package_spec',
        'childrenPrivacyProtection' => 'children_privacy_protection'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'packname' => 'setPackname',
        'version' => 'setVersion',
        'icon' => 'setIcon',
        'averageRating' => 'setAverageRating',
        'packageSize' => 'setPackageSize',
        'genres' => 'setGenres',
        'packageDownloadUrl' => 'setPackageDownloadUrl',
        'channelPackageSpec' => 'setChannelPackageSpec',
        'childrenPrivacyProtection' => 'setChildrenPrivacyProtection'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'packname' => 'getPackname',
        'version' => 'getVersion',
        'icon' => 'getIcon',
        'averageRating' => 'getAverageRating',
        'packageSize' => 'getPackageSize',
        'genres' => 'getGenres',
        'packageDownloadUrl' => 'getPackageDownloadUrl',
        'channelPackageSpec' => 'getChannelPackageSpec',
        'childrenPrivacyProtection' => 'getChildrenPrivacyProtection'
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
        $this->container['packname'] = isset($data['packname']) ? $data['packname'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['averageRating'] = isset($data['averageRating']) ? $data['averageRating'] : null;
        $this->container['packageSize'] = isset($data['packageSize']) ? $data['packageSize'] : null;
        $this->container['genres'] = isset($data['genres']) ? $data['genres'] : null;
        $this->container['packageDownloadUrl'] = isset($data['packageDownloadUrl']) ? $data['packageDownloadUrl'] : null;
        $this->container['channelPackageSpec'] = isset($data['channelPackageSpec']) ? $data['channelPackageSpec'] : null;
        $this->container['childrenPrivacyProtection'] = isset($data['childrenPrivacyProtection']) ? $data['childrenPrivacyProtection'] : null;
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
     * Gets packname
     *
     * @return string|mixed
     */
    public function getPackname()
    {
        return $this->container['packname'];
    }

    /**
     * Sets packname
     *
     * @param string|mixed $packname packname
     *
     * @return $this
     */
    public function setPackname($packname)
    {
        $this->container['packname'] = $packname;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|mixed
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|mixed $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string|mixed
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string|mixed $icon icon
     *
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets averageRating
     *
     * @return string|mixed
     */
    public function getAverageRating()
    {
        return $this->container['averageRating'];
    }

    /**
     * Sets averageRating
     *
     * @param string|mixed $averageRating averageRating
     *
     * @return $this
     */
    public function setAverageRating($averageRating)
    {
        $this->container['averageRating'] = $averageRating;

        return $this;
    }

    /**
     * Gets packageSize
     *
     * @return string|mixed
     */
    public function getPackageSize()
    {
        return $this->container['packageSize'];
    }

    /**
     * Sets packageSize
     *
     * @param string|mixed $packageSize packageSize
     *
     * @return $this
     */
    public function setPackageSize($packageSize)
    {
        $this->container['packageSize'] = $packageSize;

        return $this;
    }

    /**
     * Gets genres
     *
     * @return string[]|mixed
     */
    public function getGenres()
    {
        return $this->container['genres'];
    }

    /**
     * Sets genres
     *
     * @param string[]|mixed $genres genres
     *
     * @return $this
     */
    public function setGenres($genres)
    {
        $this->container['genres'] = $genres;

        return $this;
    }

    /**
     * Gets packageDownloadUrl
     *
     * @return string|mixed
     */
    public function getPackageDownloadUrl()
    {
        return $this->container['packageDownloadUrl'];
    }

    /**
     * Sets packageDownloadUrl
     *
     * @param string|mixed $packageDownloadUrl packageDownloadUrl
     *
     * @return $this
     */
    public function setPackageDownloadUrl($packageDownloadUrl)
    {
        $this->container['packageDownloadUrl'] = $packageDownloadUrl;

        return $this;
    }

    /**
     * Gets channelPackageSpec
     *
     * @return \TencentAds\Model\ChannelPackageSpecStruct[]|mixed
     */
    public function getChannelPackageSpec()
    {
        return $this->container['channelPackageSpec'];
    }

    /**
     * Sets channelPackageSpec
     *
     * @param \TencentAds\Model\ChannelPackageSpecStruct[]|mixed $channelPackageSpec channelPackageSpec
     *
     * @return $this
     */
    public function setChannelPackageSpec($channelPackageSpec)
    {
        $this->container['channelPackageSpec'] = $channelPackageSpec;

        return $this;
    }

    /**
     * Gets childrenPrivacyProtection
     *
     * @return \TencentAds\Model\ChildrenPrivacyProtection|mixed
     */
    public function getChildrenPrivacyProtection()
    {
        return $this->container['childrenPrivacyProtection'];
    }

    /**
     * Sets childrenPrivacyProtection
     *
     * @param \TencentAds\Model\ChildrenPrivacyProtection|mixed $childrenPrivacyProtection childrenPrivacyProtection
     *
     * @return $this
     */
    public function setChildrenPrivacyProtection($childrenPrivacyProtection)
    {
        $this->container['childrenPrivacyProtection'] = $childrenPrivacyProtection;

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


