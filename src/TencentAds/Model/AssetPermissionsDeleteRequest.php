<?php
/**
 * AssetPermissionsDeleteRequest
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
 * AssetPermissionsDeleteRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AssetPermissionsDeleteRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AssetPermissionsDeleteRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'licensingAccountId' => 'int',
        'assetType' => '\TencentAds\Model\AssetType',
        'assetPermissionGrantType' => '\TencentAds\Model\AssetPermissionGrantType',
        'assetId' => 'int',
        'licensingIdType' => '\TencentAds\Model\AssetAccountType',
        'pathId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'licensingAccountId' => 'int64',
        'assetType' => null,
        'assetPermissionGrantType' => null,
        'assetId' => 'int64',
        'licensingIdType' => null,
        'pathId' => 'int64'
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
        'licensingAccountId' => 'licensing_account_id',
        'assetType' => 'asset_type',
        'assetPermissionGrantType' => 'asset_permission_grant_type',
        'assetId' => 'asset_id',
        'licensingIdType' => 'licensing_id_type',
        'pathId' => 'path_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'licensingAccountId' => 'setLicensingAccountId',
        'assetType' => 'setAssetType',
        'assetPermissionGrantType' => 'setAssetPermissionGrantType',
        'assetId' => 'setAssetId',
        'licensingIdType' => 'setLicensingIdType',
        'pathId' => 'setPathId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'licensingAccountId' => 'getLicensingAccountId',
        'assetType' => 'getAssetType',
        'assetPermissionGrantType' => 'getAssetPermissionGrantType',
        'assetId' => 'getAssetId',
        'licensingIdType' => 'getLicensingIdType',
        'pathId' => 'getPathId'
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
        $this->container['licensingAccountId'] = isset($data['licensingAccountId']) ? $data['licensingAccountId'] : null;
        $this->container['assetType'] = isset($data['assetType']) ? $data['assetType'] : null;
        $this->container['assetPermissionGrantType'] = isset($data['assetPermissionGrantType']) ? $data['assetPermissionGrantType'] : null;
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['licensingIdType'] = isset($data['licensingIdType']) ? $data['licensingIdType'] : null;
        $this->container['pathId'] = isset($data['pathId']) ? $data['pathId'] : null;
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
     * @return int|mixed
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
     * Gets licensingAccountId
     *
     * @return int|mixed
     */
    public function getLicensingAccountId()
    {
        return $this->container['licensingAccountId'];
    }

    /**
     * Sets licensingAccountId
     *
     * @param int $licensingAccountId licensingAccountId
     *
     * @return $this
     */
    public function setLicensingAccountId($licensingAccountId)
    {
        $this->container['licensingAccountId'] = $licensingAccountId;

        return $this;
    }

    /**
     * Gets assetType
     *
     * @return \TencentAds\Model\AssetType|mixed
     */
    public function getAssetType()
    {
        return $this->container['assetType'];
    }

    /**
     * Sets assetType
     *
     * @param \TencentAds\Model\AssetType $assetType assetType
     *
     * @return $this
     */
    public function setAssetType($assetType)
    {
        $this->container['assetType'] = $assetType;

        return $this;
    }

    /**
     * Gets assetPermissionGrantType
     *
     * @return \TencentAds\Model\AssetPermissionGrantType|mixed
     */
    public function getAssetPermissionGrantType()
    {
        return $this->container['assetPermissionGrantType'];
    }

    /**
     * Sets assetPermissionGrantType
     *
     * @param \TencentAds\Model\AssetPermissionGrantType $assetPermissionGrantType assetPermissionGrantType
     *
     * @return $this
     */
    public function setAssetPermissionGrantType($assetPermissionGrantType)
    {
        $this->container['assetPermissionGrantType'] = $assetPermissionGrantType;

        return $this;
    }

    /**
     * Gets assetId
     *
     * @return int|mixed
     */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
     * Sets assetId
     *
     * @param int $assetId assetId
     *
     * @return $this
     */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;

        return $this;
    }

    /**
     * Gets licensingIdType
     *
     * @return \TencentAds\Model\AssetAccountType|mixed
     */
    public function getLicensingIdType()
    {
        return $this->container['licensingIdType'];
    }

    /**
     * Sets licensingIdType
     *
     * @param \TencentAds\Model\AssetAccountType $licensingIdType licensingIdType
     *
     * @return $this
     */
    public function setLicensingIdType($licensingIdType)
    {
        $this->container['licensingIdType'] = $licensingIdType;

        return $this;
    }

    /**
     * Gets pathId
     *
     * @return int|mixed
     */
    public function getPathId()
    {
        return $this->container['pathId'];
    }

    /**
     * Sets pathId
     *
     * @param int $pathId pathId
     *
     * @return $this
     */
    public function setPathId($pathId)
    {
        $this->container['pathId'] = $pathId;

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


