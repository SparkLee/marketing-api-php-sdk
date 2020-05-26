<?php
/**
 * DynamicAdImagesAddRequest
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
 * DynamicAdImagesAddRequest Class Doc Comment
 *
 * @category Class
 * @description DynamicAdImagesAddRequest
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DynamicAdImagesAddRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DynamicAdImagesAddRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'productCatalogId' => 'int',
        'productMode' => '\TencentAds\Model\DynamicAdImagesProductMode',
        'productSource' => 'string',
        'dynamicAdTemplateSize' => '\TencentAds\Model\DynamicAdImagesDynamicAdTemplateSize',
        'dynamicAdTemplateId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'productCatalogId' => 'int64',
        'productMode' => null,
        'productSource' => null,
        'dynamicAdTemplateSize' => null,
        'dynamicAdTemplateId' => 'int64'
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
        'accountId' => 'account_id',
        'productCatalogId' => 'product_catalog_id',
        'productMode' => 'product_mode',
        'productSource' => 'product_source',
        'dynamicAdTemplateSize' => 'dynamic_ad_template_size',
        'dynamicAdTemplateId' => 'dynamic_ad_template_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'productCatalogId' => 'setProductCatalogId',
        'productMode' => 'setProductMode',
        'productSource' => 'setProductSource',
        'dynamicAdTemplateSize' => 'setDynamicAdTemplateSize',
        'dynamicAdTemplateId' => 'setDynamicAdTemplateId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'productCatalogId' => 'getProductCatalogId',
        'productMode' => 'getProductMode',
        'productSource' => 'getProductSource',
        'dynamicAdTemplateSize' => 'getDynamicAdTemplateSize',
        'dynamicAdTemplateId' => 'getDynamicAdTemplateId'
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
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['productCatalogId'] = isset($data['productCatalogId']) ? $data['productCatalogId'] : null;
        $this->container['productMode'] = isset($data['productMode']) ? $data['productMode'] : null;
        $this->container['productSource'] = isset($data['productSource']) ? $data['productSource'] : null;
        $this->container['dynamicAdTemplateSize'] = isset($data['dynamicAdTemplateSize']) ? $data['dynamicAdTemplateSize'] : null;
        $this->container['dynamicAdTemplateId'] = isset($data['dynamicAdTemplateId']) ? $data['dynamicAdTemplateId'] : null;
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
     * Gets accountId
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param int $accountId accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets productCatalogId
     *
     * @return int
     */
    public function getProductCatalogId()
    {
        return $this->container['productCatalogId'];
    }

    /**
     * Sets productCatalogId
     *
     * @param int $productCatalogId productCatalogId
     *
     * @return $this
     */
    public function setProductCatalogId($productCatalogId)
    {
        $this->container['productCatalogId'] = $productCatalogId;

        return $this;
    }

    /**
     * Gets productMode
     *
     * @return \TencentAds\Model\DynamicAdImagesProductMode
     */
    public function getProductMode()
    {
        return $this->container['productMode'];
    }

    /**
     * Sets productMode
     *
     * @param \TencentAds\Model\DynamicAdImagesProductMode $productMode productMode
     *
     * @return $this
     */
    public function setProductMode($productMode)
    {
        $this->container['productMode'] = $productMode;

        return $this;
    }

    /**
     * Gets productSource
     *
     * @return string
     */
    public function getProductSource()
    {
        return $this->container['productSource'];
    }

    /**
     * Sets productSource
     *
     * @param string $productSource productSource
     *
     * @return $this
     */
    public function setProductSource($productSource)
    {
        $this->container['productSource'] = $productSource;

        return $this;
    }

    /**
     * Gets dynamicAdTemplateSize
     *
     * @return \TencentAds\Model\DynamicAdImagesDynamicAdTemplateSize
     */
    public function getDynamicAdTemplateSize()
    {
        return $this->container['dynamicAdTemplateSize'];
    }

    /**
     * Sets dynamicAdTemplateSize
     *
     * @param \TencentAds\Model\DynamicAdImagesDynamicAdTemplateSize $dynamicAdTemplateSize dynamicAdTemplateSize
     *
     * @return $this
     */
    public function setDynamicAdTemplateSize($dynamicAdTemplateSize)
    {
        $this->container['dynamicAdTemplateSize'] = $dynamicAdTemplateSize;

        return $this;
    }

    /**
     * Gets dynamicAdTemplateId
     *
     * @return int
     */
    public function getDynamicAdTemplateId()
    {
        return $this->container['dynamicAdTemplateId'];
    }

    /**
     * Sets dynamicAdTemplateId
     *
     * @param int $dynamicAdTemplateId dynamicAdTemplateId
     *
     * @return $this
     */
    public function setDynamicAdTemplateId($dynamicAdTemplateId)
    {
        $this->container['dynamicAdTemplateId'] = $dynamicAdTemplateId;

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


