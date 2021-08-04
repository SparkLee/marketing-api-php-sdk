<?php
/**
 * LocalEstimatedamountGetResponseData
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
 * LocalEstimatedamountGetResponseData Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LocalEstimatedamountGetResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LocalEstimatedamountGetResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'minEstimatedExposure' => 'int',
        'maxEstimatedExposure' => 'int',
        'minEstimatedConv' => 'int',
        'maxEstimatedConv' => 'int',
        'suggestion' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'minEstimatedExposure' => 'int64',
        'maxEstimatedExposure' => 'int64',
        'minEstimatedConv' => 'int64',
        'maxEstimatedConv' => 'int64',
        'suggestion' => null
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
        'minEstimatedExposure' => 'min_estimated_exposure',
        'maxEstimatedExposure' => 'max_estimated_exposure',
        'minEstimatedConv' => 'min_estimated_conv',
        'maxEstimatedConv' => 'max_estimated_conv',
        'suggestion' => 'suggestion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'minEstimatedExposure' => 'setMinEstimatedExposure',
        'maxEstimatedExposure' => 'setMaxEstimatedExposure',
        'minEstimatedConv' => 'setMinEstimatedConv',
        'maxEstimatedConv' => 'setMaxEstimatedConv',
        'suggestion' => 'setSuggestion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'minEstimatedExposure' => 'getMinEstimatedExposure',
        'maxEstimatedExposure' => 'getMaxEstimatedExposure',
        'minEstimatedConv' => 'getMinEstimatedConv',
        'maxEstimatedConv' => 'getMaxEstimatedConv',
        'suggestion' => 'getSuggestion'
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
        $this->container['minEstimatedExposure'] = isset($data['minEstimatedExposure']) ? $data['minEstimatedExposure'] : null;
        $this->container['maxEstimatedExposure'] = isset($data['maxEstimatedExposure']) ? $data['maxEstimatedExposure'] : null;
        $this->container['minEstimatedConv'] = isset($data['minEstimatedConv']) ? $data['minEstimatedConv'] : null;
        $this->container['maxEstimatedConv'] = isset($data['maxEstimatedConv']) ? $data['maxEstimatedConv'] : null;
        $this->container['suggestion'] = isset($data['suggestion']) ? $data['suggestion'] : null;
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
     * Gets minEstimatedExposure
     *
     * @return int|mixed
     */
    public function getMinEstimatedExposure()
    {
        return $this->container['minEstimatedExposure'];
    }

    /**
     * Sets minEstimatedExposure
     *
     * @param int $minEstimatedExposure minEstimatedExposure
     *
     * @return $this
     */
    public function setMinEstimatedExposure($minEstimatedExposure)
    {
        $this->container['minEstimatedExposure'] = $minEstimatedExposure;

        return $this;
    }

    /**
     * Gets maxEstimatedExposure
     *
     * @return int|mixed
     */
    public function getMaxEstimatedExposure()
    {
        return $this->container['maxEstimatedExposure'];
    }

    /**
     * Sets maxEstimatedExposure
     *
     * @param int $maxEstimatedExposure maxEstimatedExposure
     *
     * @return $this
     */
    public function setMaxEstimatedExposure($maxEstimatedExposure)
    {
        $this->container['maxEstimatedExposure'] = $maxEstimatedExposure;

        return $this;
    }

    /**
     * Gets minEstimatedConv
     *
     * @return int|mixed
     */
    public function getMinEstimatedConv()
    {
        return $this->container['minEstimatedConv'];
    }

    /**
     * Sets minEstimatedConv
     *
     * @param int $minEstimatedConv minEstimatedConv
     *
     * @return $this
     */
    public function setMinEstimatedConv($minEstimatedConv)
    {
        $this->container['minEstimatedConv'] = $minEstimatedConv;

        return $this;
    }

    /**
     * Gets maxEstimatedConv
     *
     * @return int|mixed
     */
    public function getMaxEstimatedConv()
    {
        return $this->container['maxEstimatedConv'];
    }

    /**
     * Sets maxEstimatedConv
     *
     * @param int $maxEstimatedConv maxEstimatedConv
     *
     * @return $this
     */
    public function setMaxEstimatedConv($maxEstimatedConv)
    {
        $this->container['maxEstimatedConv'] = $maxEstimatedConv;

        return $this;
    }

    /**
     * Gets suggestion
     *
     * @return string|mixed
     */
    public function getSuggestion()
    {
        return $this->container['suggestion'];
    }

    /**
     * Sets suggestion
     *
     * @param string $suggestion suggestion
     *
     * @return $this
     */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;

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


