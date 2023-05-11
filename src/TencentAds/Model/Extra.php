<?php
/**
 * Extra
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
 * Extra Class Doc Comment
 *
 * @category Class
 * @description 模板扩展信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Extra implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'extra';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'imageTemplateId' => 'int',
        'imageTemplateIntroUrl' => 'int',
        'desc' => 'string',
        'floatingZoneName' => 'string',
        'floatingZoneDesc' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'imageTemplateId' => 'int64',
        'imageTemplateIntroUrl' => 'int64',
        'desc' => null,
        'floatingZoneName' => null,
        'floatingZoneDesc' => null
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
        'imageTemplateId' => 'image_template_id',
        'imageTemplateIntroUrl' => 'image_template_intro_url',
        'desc' => 'desc',
        'floatingZoneName' => 'floating_zone_name',
        'floatingZoneDesc' => 'floating_zone_desc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'imageTemplateId' => 'setImageTemplateId',
        'imageTemplateIntroUrl' => 'setImageTemplateIntroUrl',
        'desc' => 'setDesc',
        'floatingZoneName' => 'setFloatingZoneName',
        'floatingZoneDesc' => 'setFloatingZoneDesc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'imageTemplateId' => 'getImageTemplateId',
        'imageTemplateIntroUrl' => 'getImageTemplateIntroUrl',
        'desc' => 'getDesc',
        'floatingZoneName' => 'getFloatingZoneName',
        'floatingZoneDesc' => 'getFloatingZoneDesc'
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
        $this->container['imageTemplateId'] = isset($data['imageTemplateId']) ? $data['imageTemplateId'] : null;
        $this->container['imageTemplateIntroUrl'] = isset($data['imageTemplateIntroUrl']) ? $data['imageTemplateIntroUrl'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['floatingZoneName'] = isset($data['floatingZoneName']) ? $data['floatingZoneName'] : null;
        $this->container['floatingZoneDesc'] = isset($data['floatingZoneDesc']) ? $data['floatingZoneDesc'] : null;
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
     * Gets imageTemplateId
     *
     * @return int|mixed
     */
    public function getImageTemplateId()
    {
        return $this->container['imageTemplateId'];
    }

    /**
     * Sets imageTemplateId
     *
     * @param int|mixed $imageTemplateId imageTemplateId
     *
     * @return $this
     */
    public function setImageTemplateId($imageTemplateId)
    {
        $this->container['imageTemplateId'] = $imageTemplateId;

        return $this;
    }

    /**
     * Gets imageTemplateIntroUrl
     *
     * @return int|mixed
     */
    public function getImageTemplateIntroUrl()
    {
        return $this->container['imageTemplateIntroUrl'];
    }

    /**
     * Sets imageTemplateIntroUrl
     *
     * @param int|mixed $imageTemplateIntroUrl imageTemplateIntroUrl
     *
     * @return $this
     */
    public function setImageTemplateIntroUrl($imageTemplateIntroUrl)
    {
        $this->container['imageTemplateIntroUrl'] = $imageTemplateIntroUrl;

        return $this;
    }

    /**
     * Gets desc
     *
     * @return string|mixed
     */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
     * Sets desc
     *
     * @param string|mixed $desc desc
     *
     * @return $this
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

        return $this;
    }

    /**
     * Gets floatingZoneName
     *
     * @return string|mixed
     */
    public function getFloatingZoneName()
    {
        return $this->container['floatingZoneName'];
    }

    /**
     * Sets floatingZoneName
     *
     * @param string|mixed $floatingZoneName floatingZoneName
     *
     * @return $this
     */
    public function setFloatingZoneName($floatingZoneName)
    {
        $this->container['floatingZoneName'] = $floatingZoneName;

        return $this;
    }

    /**
     * Gets floatingZoneDesc
     *
     * @return string|mixed
     */
    public function getFloatingZoneDesc()
    {
        return $this->container['floatingZoneDesc'];
    }

    /**
     * Sets floatingZoneDesc
     *
     * @param string|mixed $floatingZoneDesc floatingZoneDesc
     *
     * @return $this
     */
    public function setFloatingZoneDesc($floatingZoneDesc)
    {
        $this->container['floatingZoneDesc'] = $floatingZoneDesc;

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


