<?php
/**
 * ElementButtonRead
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
 * ElementButtonRead Class Doc Comment
 *
 * @category Class
 * @description 按钮组件元素
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ElementButtonRead implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'element_button_read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'title' => 'string',
        'url' => 'string',
        'linkSpec' => '\TencentAds\Model\ElementButtonLinkSpec',
        'appIosSpec' => '\TencentAds\Model\AppIosSpec',
        'appAndroidSpec' => '\TencentAds\Model\AppAndroidSpec',
        'miniProgramSpec' => '\TencentAds\Model\MiniProgramSpec',
        'miniGameProgramSpec' => '\TencentAds\Model\MiniGameProgramSpec',
        'fengyeSpec' => '\TencentAds\Model\FengyeSpec',
        'cardSpec' => '\TencentAds\Model\CardSpec',
        'followSpec' => '\TencentAds\Model\FollowSpec',
        'serviceSpec' => '\TencentAds\Model\ServiceSpec',
        'wecomSpec' => '\TencentAds\Model\WecomSpec',
        'useIcon' => 'int',
        'telSpec' => '\TencentAds\Model\TelSpec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'title' => null,
        'url' => null,
        'linkSpec' => null,
        'appIosSpec' => null,
        'appAndroidSpec' => null,
        'miniProgramSpec' => null,
        'miniGameProgramSpec' => null,
        'fengyeSpec' => null,
        'cardSpec' => null,
        'followSpec' => null,
        'serviceSpec' => null,
        'wecomSpec' => null,
        'useIcon' => 'int64',
        'telSpec' => null
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
        'linkSpec' => 'link_spec',
        'appIosSpec' => 'app_ios_spec',
        'appAndroidSpec' => 'app_android_spec',
        'miniProgramSpec' => 'mini_program_spec',
        'miniGameProgramSpec' => 'mini_game_program_spec',
        'fengyeSpec' => 'fengye_spec',
        'cardSpec' => 'card_spec',
        'followSpec' => 'follow_spec',
        'serviceSpec' => 'service_spec',
        'wecomSpec' => 'wecom_spec',
        'useIcon' => 'use_icon',
        'telSpec' => 'tel_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'url' => 'setUrl',
        'linkSpec' => 'setLinkSpec',
        'appIosSpec' => 'setAppIosSpec',
        'appAndroidSpec' => 'setAppAndroidSpec',
        'miniProgramSpec' => 'setMiniProgramSpec',
        'miniGameProgramSpec' => 'setMiniGameProgramSpec',
        'fengyeSpec' => 'setFengyeSpec',
        'cardSpec' => 'setCardSpec',
        'followSpec' => 'setFollowSpec',
        'serviceSpec' => 'setServiceSpec',
        'wecomSpec' => 'setWecomSpec',
        'useIcon' => 'setUseIcon',
        'telSpec' => 'setTelSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'url' => 'getUrl',
        'linkSpec' => 'getLinkSpec',
        'appIosSpec' => 'getAppIosSpec',
        'appAndroidSpec' => 'getAppAndroidSpec',
        'miniProgramSpec' => 'getMiniProgramSpec',
        'miniGameProgramSpec' => 'getMiniGameProgramSpec',
        'fengyeSpec' => 'getFengyeSpec',
        'cardSpec' => 'getCardSpec',
        'followSpec' => 'getFollowSpec',
        'serviceSpec' => 'getServiceSpec',
        'wecomSpec' => 'getWecomSpec',
        'useIcon' => 'getUseIcon',
        'telSpec' => 'getTelSpec'
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
        $this->container['linkSpec'] = isset($data['linkSpec']) ? $data['linkSpec'] : null;
        $this->container['appIosSpec'] = isset($data['appIosSpec']) ? $data['appIosSpec'] : null;
        $this->container['appAndroidSpec'] = isset($data['appAndroidSpec']) ? $data['appAndroidSpec'] : null;
        $this->container['miniProgramSpec'] = isset($data['miniProgramSpec']) ? $data['miniProgramSpec'] : null;
        $this->container['miniGameProgramSpec'] = isset($data['miniGameProgramSpec']) ? $data['miniGameProgramSpec'] : null;
        $this->container['fengyeSpec'] = isset($data['fengyeSpec']) ? $data['fengyeSpec'] : null;
        $this->container['cardSpec'] = isset($data['cardSpec']) ? $data['cardSpec'] : null;
        $this->container['followSpec'] = isset($data['followSpec']) ? $data['followSpec'] : null;
        $this->container['serviceSpec'] = isset($data['serviceSpec']) ? $data['serviceSpec'] : null;
        $this->container['wecomSpec'] = isset($data['wecomSpec']) ? $data['wecomSpec'] : null;
        $this->container['useIcon'] = isset($data['useIcon']) ? $data['useIcon'] : null;
        $this->container['telSpec'] = isset($data['telSpec']) ? $data['telSpec'] : null;
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
     * Gets linkSpec
     *
     * @return \TencentAds\Model\ElementButtonLinkSpec|mixed
     */
    public function getLinkSpec()
    {
        return $this->container['linkSpec'];
    }

    /**
     * Sets linkSpec
     *
     * @param \TencentAds\Model\ElementButtonLinkSpec|mixed $linkSpec linkSpec
     *
     * @return $this
     */
    public function setLinkSpec($linkSpec)
    {
        $this->container['linkSpec'] = $linkSpec;

        return $this;
    }

    /**
     * Gets appIosSpec
     *
     * @return \TencentAds\Model\AppIosSpec|mixed
     */
    public function getAppIosSpec()
    {
        return $this->container['appIosSpec'];
    }

    /**
     * Sets appIosSpec
     *
     * @param \TencentAds\Model\AppIosSpec|mixed $appIosSpec appIosSpec
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
     * @return \TencentAds\Model\AppAndroidSpec|mixed
     */
    public function getAppAndroidSpec()
    {
        return $this->container['appAndroidSpec'];
    }

    /**
     * Sets appAndroidSpec
     *
     * @param \TencentAds\Model\AppAndroidSpec|mixed $appAndroidSpec appAndroidSpec
     *
     * @return $this
     */
    public function setAppAndroidSpec($appAndroidSpec)
    {
        $this->container['appAndroidSpec'] = $appAndroidSpec;

        return $this;
    }

    /**
     * Gets miniProgramSpec
     *
     * @return \TencentAds\Model\MiniProgramSpec|mixed
     */
    public function getMiniProgramSpec()
    {
        return $this->container['miniProgramSpec'];
    }

    /**
     * Sets miniProgramSpec
     *
     * @param \TencentAds\Model\MiniProgramSpec|mixed $miniProgramSpec miniProgramSpec
     *
     * @return $this
     */
    public function setMiniProgramSpec($miniProgramSpec)
    {
        $this->container['miniProgramSpec'] = $miniProgramSpec;

        return $this;
    }

    /**
     * Gets miniGameProgramSpec
     *
     * @return \TencentAds\Model\MiniGameProgramSpec|mixed
     */
    public function getMiniGameProgramSpec()
    {
        return $this->container['miniGameProgramSpec'];
    }

    /**
     * Sets miniGameProgramSpec
     *
     * @param \TencentAds\Model\MiniGameProgramSpec|mixed $miniGameProgramSpec miniGameProgramSpec
     *
     * @return $this
     */
    public function setMiniGameProgramSpec($miniGameProgramSpec)
    {
        $this->container['miniGameProgramSpec'] = $miniGameProgramSpec;

        return $this;
    }

    /**
     * Gets fengyeSpec
     *
     * @return \TencentAds\Model\FengyeSpec|mixed
     */
    public function getFengyeSpec()
    {
        return $this->container['fengyeSpec'];
    }

    /**
     * Sets fengyeSpec
     *
     * @param \TencentAds\Model\FengyeSpec|mixed $fengyeSpec fengyeSpec
     *
     * @return $this
     */
    public function setFengyeSpec($fengyeSpec)
    {
        $this->container['fengyeSpec'] = $fengyeSpec;

        return $this;
    }

    /**
     * Gets cardSpec
     *
     * @return \TencentAds\Model\CardSpec|mixed
     */
    public function getCardSpec()
    {
        return $this->container['cardSpec'];
    }

    /**
     * Sets cardSpec
     *
     * @param \TencentAds\Model\CardSpec|mixed $cardSpec cardSpec
     *
     * @return $this
     */
    public function setCardSpec($cardSpec)
    {
        $this->container['cardSpec'] = $cardSpec;

        return $this;
    }

    /**
     * Gets followSpec
     *
     * @return \TencentAds\Model\FollowSpec|mixed
     */
    public function getFollowSpec()
    {
        return $this->container['followSpec'];
    }

    /**
     * Sets followSpec
     *
     * @param \TencentAds\Model\FollowSpec|mixed $followSpec followSpec
     *
     * @return $this
     */
    public function setFollowSpec($followSpec)
    {
        $this->container['followSpec'] = $followSpec;

        return $this;
    }

    /**
     * Gets serviceSpec
     *
     * @return \TencentAds\Model\ServiceSpec|mixed
     */
    public function getServiceSpec()
    {
        return $this->container['serviceSpec'];
    }

    /**
     * Sets serviceSpec
     *
     * @param \TencentAds\Model\ServiceSpec|mixed $serviceSpec serviceSpec
     *
     * @return $this
     */
    public function setServiceSpec($serviceSpec)
    {
        $this->container['serviceSpec'] = $serviceSpec;

        return $this;
    }

    /**
     * Gets wecomSpec
     *
     * @return \TencentAds\Model\WecomSpec|mixed
     */
    public function getWecomSpec()
    {
        return $this->container['wecomSpec'];
    }

    /**
     * Sets wecomSpec
     *
     * @param \TencentAds\Model\WecomSpec|mixed $wecomSpec wecomSpec
     *
     * @return $this
     */
    public function setWecomSpec($wecomSpec)
    {
        $this->container['wecomSpec'] = $wecomSpec;

        return $this;
    }

    /**
     * Gets useIcon
     *
     * @return int|mixed
     */
    public function getUseIcon()
    {
        return $this->container['useIcon'];
    }

    /**
     * Sets useIcon
     *
     * @param int|mixed $useIcon useIcon
     *
     * @return $this
     */
    public function setUseIcon($useIcon)
    {
        $this->container['useIcon'] = $useIcon;

        return $this;
    }

    /**
     * Gets telSpec
     *
     * @return \TencentAds\Model\TelSpec|mixed
     */
    public function getTelSpec()
    {
        return $this->container['telSpec'];
    }

    /**
     * Sets telSpec
     *
     * @param \TencentAds\Model\TelSpec|mixed $telSpec telSpec
     *
     * @return $this
     */
    public function setTelSpec($telSpec)
    {
        $this->container['telSpec'] = $telSpec;

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


