<?php
/**
 * ElementButtonLinkSpec
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
 * ElementButtonLinkSpec Class Doc Comment
 *
 * @category Class
 * @description 外链信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ElementButtonLinkSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'element_button_link_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'title' => 'string',
        'url' => 'string',
        'deepLinkAndroidSpec' => '\TencentAds\Model\DeepLinkAppAndroidSpec',
        'deepLinkIosSpec' => '\TencentAds\Model\DeepLinkAppIosSpec',
        'miniProgramSpec' => '\TencentAds\Model\SimplifyMiniProgramSpec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'title' => null,
        'url' => null,
        'deepLinkAndroidSpec' => null,
        'deepLinkIosSpec' => null,
        'miniProgramSpec' => null
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
        'title' => 'title',
        'url' => 'url',
        'deepLinkAndroidSpec' => 'deep_link_android_spec',
        'deepLinkIosSpec' => 'deep_link_ios_spec',
        'miniProgramSpec' => 'mini_program_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'url' => 'setUrl',
        'deepLinkAndroidSpec' => 'setDeepLinkAndroidSpec',
        'deepLinkIosSpec' => 'setDeepLinkIosSpec',
        'miniProgramSpec' => 'setMiniProgramSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'url' => 'getUrl',
        'deepLinkAndroidSpec' => 'getDeepLinkAndroidSpec',
        'deepLinkIosSpec' => 'getDeepLinkIosSpec',
        'miniProgramSpec' => 'getMiniProgramSpec'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['deepLinkAndroidSpec'] = isset($data['deepLinkAndroidSpec']) ? $data['deepLinkAndroidSpec'] : null;
        $this->container['deepLinkIosSpec'] = isset($data['deepLinkIosSpec']) ? $data['deepLinkIosSpec'] : null;
        $this->container['miniProgramSpec'] = isset($data['miniProgramSpec']) ? $data['miniProgramSpec'] : null;
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
     * Gets title
     *
     * @return string|mixed
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|mixed $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|mixed
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|mixed $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets deepLinkAndroidSpec
     *
     * @return \TencentAds\Model\DeepLinkAppAndroidSpec|mixed
     */
    public function getDeepLinkAndroidSpec()
    {
        return $this->container['deepLinkAndroidSpec'];
    }

    /**
     * Sets deepLinkAndroidSpec
     *
     * @param \TencentAds\Model\DeepLinkAppAndroidSpec|mixed $deepLinkAndroidSpec deepLinkAndroidSpec
     *
     * @return $this
     */
    public function setDeepLinkAndroidSpec($deepLinkAndroidSpec)
    {
        $this->container['deepLinkAndroidSpec'] = $deepLinkAndroidSpec;

        return $this;
    }

    /**
     * Gets deepLinkIosSpec
     *
     * @return \TencentAds\Model\DeepLinkAppIosSpec|mixed
     */
    public function getDeepLinkIosSpec()
    {
        return $this->container['deepLinkIosSpec'];
    }

    /**
     * Sets deepLinkIosSpec
     *
     * @param \TencentAds\Model\DeepLinkAppIosSpec|mixed $deepLinkIosSpec deepLinkIosSpec
     *
     * @return $this
     */
    public function setDeepLinkIosSpec($deepLinkIosSpec)
    {
        $this->container['deepLinkIosSpec'] = $deepLinkIosSpec;

        return $this;
    }

    /**
     * Gets miniProgramSpec
     *
     * @return \TencentAds\Model\SimplifyMiniProgramSpec|mixed
     */
    public function getMiniProgramSpec()
    {
        return $this->container['miniProgramSpec'];
    }

    /**
     * Sets miniProgramSpec
     *
     * @param \TencentAds\Model\SimplifyMiniProgramSpec|mixed $miniProgramSpec miniProgramSpec
     *
     * @return $this
     */
    public function setMiniProgramSpec($miniProgramSpec)
    {
        $this->container['miniProgramSpec'] = $miniProgramSpec;

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


