<?php
/**
 * ReviewAdAppealGetResponseData
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
 * ReviewAdAppealGetResponseData Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReviewAdAppealGetResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReviewAdAppealGetResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'adgroupId' => 'int',
        'adId' => 'int',
        'appealDemand' => 'string',
        'appealReason' => 'string',
        'historyApprovalAdId' => 'int',
        'appealResult' => 'string',
        'appealStatus' => '\TencentAds\Model\AppealStatus',
        'description' => 'string',
        'imageList' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'adgroupId' => 'int64',
        'adId' => 'int64',
        'appealDemand' => null,
        'appealReason' => null,
        'historyApprovalAdId' => 'int64',
        'appealResult' => null,
        'appealStatus' => null,
        'description' => null,
        'imageList' => null
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
        'adgroupId' => 'adgroup_id',
        'adId' => 'ad_id',
        'appealDemand' => 'appeal_demand',
        'appealReason' => 'appeal_reason',
        'historyApprovalAdId' => 'history_approval_ad_id',
        'appealResult' => 'appeal_result',
        'appealStatus' => 'appeal_status',
        'description' => 'description',
        'imageList' => 'image_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'adgroupId' => 'setAdgroupId',
        'adId' => 'setAdId',
        'appealDemand' => 'setAppealDemand',
        'appealReason' => 'setAppealReason',
        'historyApprovalAdId' => 'setHistoryApprovalAdId',
        'appealResult' => 'setAppealResult',
        'appealStatus' => 'setAppealStatus',
        'description' => 'setDescription',
        'imageList' => 'setImageList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'adgroupId' => 'getAdgroupId',
        'adId' => 'getAdId',
        'appealDemand' => 'getAppealDemand',
        'appealReason' => 'getAppealReason',
        'historyApprovalAdId' => 'getHistoryApprovalAdId',
        'appealResult' => 'getAppealResult',
        'appealStatus' => 'getAppealStatus',
        'description' => 'getDescription',
        'imageList' => 'getImageList'
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
        $this->container['adgroupId'] = isset($data['adgroupId']) ? $data['adgroupId'] : null;
        $this->container['adId'] = isset($data['adId']) ? $data['adId'] : null;
        $this->container['appealDemand'] = isset($data['appealDemand']) ? $data['appealDemand'] : null;
        $this->container['appealReason'] = isset($data['appealReason']) ? $data['appealReason'] : null;
        $this->container['historyApprovalAdId'] = isset($data['historyApprovalAdId']) ? $data['historyApprovalAdId'] : null;
        $this->container['appealResult'] = isset($data['appealResult']) ? $data['appealResult'] : null;
        $this->container['appealStatus'] = isset($data['appealStatus']) ? $data['appealStatus'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['imageList'] = isset($data['imageList']) ? $data['imageList'] : null;
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
     * @param int|mixed $accountId accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets adgroupId
     *
     * @return int|mixed
     */
    public function getAdgroupId()
    {
        return $this->container['adgroupId'];
    }

    /**
     * Sets adgroupId
     *
     * @param int|mixed $adgroupId adgroupId
     *
     * @return $this
     */
    public function setAdgroupId($adgroupId)
    {
        $this->container['adgroupId'] = $adgroupId;

        return $this;
    }

    /**
     * Gets adId
     *
     * @return int|mixed
     */
    public function getAdId()
    {
        return $this->container['adId'];
    }

    /**
     * Sets adId
     *
     * @param int|mixed $adId adId
     *
     * @return $this
     */
    public function setAdId($adId)
    {
        $this->container['adId'] = $adId;

        return $this;
    }

    /**
     * Gets appealDemand
     *
     * @return string|mixed
     */
    public function getAppealDemand()
    {
        return $this->container['appealDemand'];
    }

    /**
     * Sets appealDemand
     *
     * @param string|mixed $appealDemand appealDemand
     *
     * @return $this
     */
    public function setAppealDemand($appealDemand)
    {
        $this->container['appealDemand'] = $appealDemand;

        return $this;
    }

    /**
     * Gets appealReason
     *
     * @return string|mixed
     */
    public function getAppealReason()
    {
        return $this->container['appealReason'];
    }

    /**
     * Sets appealReason
     *
     * @param string|mixed $appealReason appealReason
     *
     * @return $this
     */
    public function setAppealReason($appealReason)
    {
        $this->container['appealReason'] = $appealReason;

        return $this;
    }

    /**
     * Gets historyApprovalAdId
     *
     * @return int|mixed
     */
    public function getHistoryApprovalAdId()
    {
        return $this->container['historyApprovalAdId'];
    }

    /**
     * Sets historyApprovalAdId
     *
     * @param int|mixed $historyApprovalAdId historyApprovalAdId
     *
     * @return $this
     */
    public function setHistoryApprovalAdId($historyApprovalAdId)
    {
        $this->container['historyApprovalAdId'] = $historyApprovalAdId;

        return $this;
    }

    /**
     * Gets appealResult
     *
     * @return string|mixed
     */
    public function getAppealResult()
    {
        return $this->container['appealResult'];
    }

    /**
     * Sets appealResult
     *
     * @param string|mixed $appealResult appealResult
     *
     * @return $this
     */
    public function setAppealResult($appealResult)
    {
        $this->container['appealResult'] = $appealResult;

        return $this;
    }

    /**
     * Gets appealStatus
     *
     * @return \TencentAds\Model\AppealStatus|mixed
     */
    public function getAppealStatus()
    {
        return $this->container['appealStatus'];
    }

    /**
     * Sets appealStatus
     *
     * @param \TencentAds\Model\AppealStatus|mixed $appealStatus appealStatus
     *
     * @return $this
     */
    public function setAppealStatus($appealStatus)
    {
        $this->container['appealStatus'] = $appealStatus;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|mixed
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|mixed $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets imageList
     *
     * @return string[]|mixed
     */
    public function getImageList()
    {
        return $this->container['imageList'];
    }

    /**
     * Sets imageList
     *
     * @param string[]|mixed $imageList imageList
     *
     * @return $this
     */
    public function setImageList($imageList)
    {
        $this->container['imageList'] = $imageList;

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


