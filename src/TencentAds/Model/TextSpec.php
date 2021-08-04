<?php
/**
 * TextSpec
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
 * TextSpec Class Doc Comment
 *
 * @category Class
 * @description 基础文本组件元素
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TextSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'text_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'text' => 'string',
        'paddingTop' => 'int',
        'paddingBottom' => 'int',
        'fontSize' => 'int',
        'fontColor' => 'string',
        'textAlignment' => 'int',
        'fontStyle' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'text' => null,
        'paddingTop' => 'int64',
        'paddingBottom' => 'int64',
        'fontSize' => 'int64',
        'fontColor' => null,
        'textAlignment' => 'int64',
        'fontStyle' => 'int64'
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
        'text' => 'text',
        'paddingTop' => 'padding_top',
        'paddingBottom' => 'padding_bottom',
        'fontSize' => 'font_size',
        'fontColor' => 'font_color',
        'textAlignment' => 'text_alignment',
        'fontStyle' => 'font_style'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text' => 'setText',
        'paddingTop' => 'setPaddingTop',
        'paddingBottom' => 'setPaddingBottom',
        'fontSize' => 'setFontSize',
        'fontColor' => 'setFontColor',
        'textAlignment' => 'setTextAlignment',
        'fontStyle' => 'setFontStyle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text' => 'getText',
        'paddingTop' => 'getPaddingTop',
        'paddingBottom' => 'getPaddingBottom',
        'fontSize' => 'getFontSize',
        'fontColor' => 'getFontColor',
        'textAlignment' => 'getTextAlignment',
        'fontStyle' => 'getFontStyle'
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
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['paddingTop'] = isset($data['paddingTop']) ? $data['paddingTop'] : null;
        $this->container['paddingBottom'] = isset($data['paddingBottom']) ? $data['paddingBottom'] : null;
        $this->container['fontSize'] = isset($data['fontSize']) ? $data['fontSize'] : null;
        $this->container['fontColor'] = isset($data['fontColor']) ? $data['fontColor'] : null;
        $this->container['textAlignment'] = isset($data['textAlignment']) ? $data['textAlignment'] : null;
        $this->container['fontStyle'] = isset($data['fontStyle']) ? $data['fontStyle'] : null;
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
     * Gets text
     *
     * @return string|mixed
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets paddingTop
     *
     * @return int|mixed
     */
    public function getPaddingTop()
    {
        return $this->container['paddingTop'];
    }

    /**
     * Sets paddingTop
     *
     * @param int $paddingTop paddingTop
     *
     * @return $this
     */
    public function setPaddingTop($paddingTop)
    {
        $this->container['paddingTop'] = $paddingTop;

        return $this;
    }

    /**
     * Gets paddingBottom
     *
     * @return int|mixed
     */
    public function getPaddingBottom()
    {
        return $this->container['paddingBottom'];
    }

    /**
     * Sets paddingBottom
     *
     * @param int $paddingBottom paddingBottom
     *
     * @return $this
     */
    public function setPaddingBottom($paddingBottom)
    {
        $this->container['paddingBottom'] = $paddingBottom;

        return $this;
    }

    /**
     * Gets fontSize
     *
     * @return int|mixed
     */
    public function getFontSize()
    {
        return $this->container['fontSize'];
    }

    /**
     * Sets fontSize
     *
     * @param int $fontSize fontSize
     *
     * @return $this
     */
    public function setFontSize($fontSize)
    {
        $this->container['fontSize'] = $fontSize;

        return $this;
    }

    /**
     * Gets fontColor
     *
     * @return string|mixed
     */
    public function getFontColor()
    {
        return $this->container['fontColor'];
    }

    /**
     * Sets fontColor
     *
     * @param string $fontColor fontColor
     *
     * @return $this
     */
    public function setFontColor($fontColor)
    {
        $this->container['fontColor'] = $fontColor;

        return $this;
    }

    /**
     * Gets textAlignment
     *
     * @return int|mixed
     */
    public function getTextAlignment()
    {
        return $this->container['textAlignment'];
    }

    /**
     * Sets textAlignment
     *
     * @param int $textAlignment textAlignment
     *
     * @return $this
     */
    public function setTextAlignment($textAlignment)
    {
        $this->container['textAlignment'] = $textAlignment;

        return $this;
    }

    /**
     * Gets fontStyle
     *
     * @return int|mixed
     */
    public function getFontStyle()
    {
        return $this->container['fontStyle'];
    }

    /**
     * Sets fontStyle
     *
     * @param int $fontStyle fontStyle
     *
     * @return $this
     */
    public function setFontStyle($fontStyle)
    {
        $this->container['fontStyle'] = $fontStyle;

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


