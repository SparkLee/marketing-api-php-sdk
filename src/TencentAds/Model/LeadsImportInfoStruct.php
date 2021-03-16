<?php
/**
 * LeadsImportInfoStruct
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
 * LeadsImportInfoStruct Class Doc Comment
 *
 * @category Class
 * @description 导入的线索信息结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LeadsImportInfoStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'leads_import_info_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'outerLeadsId' => 'string',
        'leadsType' => '\TencentAds\Model\LeadCluesLeadsType',
        'leadsUserId' => 'string',
        'leadsUserType' => '\TencentAds\Model\LeadsUserType',
        'leadsUserWechatAppid' => 'string',
        'leadsTel' => 'string',
        'leadsQq' => 'int',
        'leadsWechat' => 'string',
        'leadsName' => 'string',
        'leadsGender' => '\TencentAds\Model\LeadCluesGenderType',
        'leadsEmail' => 'string',
        'leadsArea' => 'string',
        'bundle' => 'string',
        'clickId' => 'string',
        'outerLeadsConvertType' => 'string',
        'outerLeadsIneffectReason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'outerLeadsId' => null,
        'leadsType' => null,
        'leadsUserId' => null,
        'leadsUserType' => null,
        'leadsUserWechatAppid' => null,
        'leadsTel' => null,
        'leadsQq' => 'int64',
        'leadsWechat' => null,
        'leadsName' => null,
        'leadsGender' => null,
        'leadsEmail' => null,
        'leadsArea' => null,
        'bundle' => null,
        'clickId' => null,
        'outerLeadsConvertType' => null,
        'outerLeadsIneffectReason' => null
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
        'outerLeadsId' => 'outer_leads_id',
        'leadsType' => 'leads_type',
        'leadsUserId' => 'leads_user_id',
        'leadsUserType' => 'leads_user_type',
        'leadsUserWechatAppid' => 'leads_user_wechat_appid',
        'leadsTel' => 'leads_tel',
        'leadsQq' => 'leads_qq',
        'leadsWechat' => 'leads_wechat',
        'leadsName' => 'leads_name',
        'leadsGender' => 'leads_gender',
        'leadsEmail' => 'leads_email',
        'leadsArea' => 'leads_area',
        'bundle' => 'bundle',
        'clickId' => 'click_id',
        'outerLeadsConvertType' => 'outer_leads_convert_type',
        'outerLeadsIneffectReason' => 'outer_leads_ineffect_reason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'outerLeadsId' => 'setOuterLeadsId',
        'leadsType' => 'setLeadsType',
        'leadsUserId' => 'setLeadsUserId',
        'leadsUserType' => 'setLeadsUserType',
        'leadsUserWechatAppid' => 'setLeadsUserWechatAppid',
        'leadsTel' => 'setLeadsTel',
        'leadsQq' => 'setLeadsQq',
        'leadsWechat' => 'setLeadsWechat',
        'leadsName' => 'setLeadsName',
        'leadsGender' => 'setLeadsGender',
        'leadsEmail' => 'setLeadsEmail',
        'leadsArea' => 'setLeadsArea',
        'bundle' => 'setBundle',
        'clickId' => 'setClickId',
        'outerLeadsConvertType' => 'setOuterLeadsConvertType',
        'outerLeadsIneffectReason' => 'setOuterLeadsIneffectReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'outerLeadsId' => 'getOuterLeadsId',
        'leadsType' => 'getLeadsType',
        'leadsUserId' => 'getLeadsUserId',
        'leadsUserType' => 'getLeadsUserType',
        'leadsUserWechatAppid' => 'getLeadsUserWechatAppid',
        'leadsTel' => 'getLeadsTel',
        'leadsQq' => 'getLeadsQq',
        'leadsWechat' => 'getLeadsWechat',
        'leadsName' => 'getLeadsName',
        'leadsGender' => 'getLeadsGender',
        'leadsEmail' => 'getLeadsEmail',
        'leadsArea' => 'getLeadsArea',
        'bundle' => 'getBundle',
        'clickId' => 'getClickId',
        'outerLeadsConvertType' => 'getOuterLeadsConvertType',
        'outerLeadsIneffectReason' => 'getOuterLeadsIneffectReason'
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
        $this->container['outerLeadsId'] = isset($data['outerLeadsId']) ? $data['outerLeadsId'] : null;
        $this->container['leadsType'] = isset($data['leadsType']) ? $data['leadsType'] : null;
        $this->container['leadsUserId'] = isset($data['leadsUserId']) ? $data['leadsUserId'] : null;
        $this->container['leadsUserType'] = isset($data['leadsUserType']) ? $data['leadsUserType'] : null;
        $this->container['leadsUserWechatAppid'] = isset($data['leadsUserWechatAppid']) ? $data['leadsUserWechatAppid'] : null;
        $this->container['leadsTel'] = isset($data['leadsTel']) ? $data['leadsTel'] : null;
        $this->container['leadsQq'] = isset($data['leadsQq']) ? $data['leadsQq'] : null;
        $this->container['leadsWechat'] = isset($data['leadsWechat']) ? $data['leadsWechat'] : null;
        $this->container['leadsName'] = isset($data['leadsName']) ? $data['leadsName'] : null;
        $this->container['leadsGender'] = isset($data['leadsGender']) ? $data['leadsGender'] : null;
        $this->container['leadsEmail'] = isset($data['leadsEmail']) ? $data['leadsEmail'] : null;
        $this->container['leadsArea'] = isset($data['leadsArea']) ? $data['leadsArea'] : null;
        $this->container['bundle'] = isset($data['bundle']) ? $data['bundle'] : null;
        $this->container['clickId'] = isset($data['clickId']) ? $data['clickId'] : null;
        $this->container['outerLeadsConvertType'] = isset($data['outerLeadsConvertType']) ? $data['outerLeadsConvertType'] : null;
        $this->container['outerLeadsIneffectReason'] = isset($data['outerLeadsIneffectReason']) ? $data['outerLeadsIneffectReason'] : null;
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
     * Gets outerLeadsId
     *
     * @return string
     */
    public function getOuterLeadsId()
    {
        return $this->container['outerLeadsId'];
    }

    /**
     * Sets outerLeadsId
     *
     * @param string $outerLeadsId outerLeadsId
     *
     * @return $this
     */
    public function setOuterLeadsId($outerLeadsId)
    {
        $this->container['outerLeadsId'] = $outerLeadsId;

        return $this;
    }

    /**
     * Gets leadsType
     *
     * @return \TencentAds\Model\LeadCluesLeadsType
     */
    public function getLeadsType()
    {
        return $this->container['leadsType'];
    }

    /**
     * Sets leadsType
     *
     * @param \TencentAds\Model\LeadCluesLeadsType $leadsType leadsType
     *
     * @return $this
     */
    public function setLeadsType($leadsType)
    {
        $this->container['leadsType'] = $leadsType;

        return $this;
    }

    /**
     * Gets leadsUserId
     *
     * @return string
     */
    public function getLeadsUserId()
    {
        return $this->container['leadsUserId'];
    }

    /**
     * Sets leadsUserId
     *
     * @param string $leadsUserId leadsUserId
     *
     * @return $this
     */
    public function setLeadsUserId($leadsUserId)
    {
        $this->container['leadsUserId'] = $leadsUserId;

        return $this;
    }

    /**
     * Gets leadsUserType
     *
     * @return \TencentAds\Model\LeadsUserType
     */
    public function getLeadsUserType()
    {
        return $this->container['leadsUserType'];
    }

    /**
     * Sets leadsUserType
     *
     * @param \TencentAds\Model\LeadsUserType $leadsUserType leadsUserType
     *
     * @return $this
     */
    public function setLeadsUserType($leadsUserType)
    {
        $this->container['leadsUserType'] = $leadsUserType;

        return $this;
    }

    /**
     * Gets leadsUserWechatAppid
     *
     * @return string
     */
    public function getLeadsUserWechatAppid()
    {
        return $this->container['leadsUserWechatAppid'];
    }

    /**
     * Sets leadsUserWechatAppid
     *
     * @param string $leadsUserWechatAppid leadsUserWechatAppid
     *
     * @return $this
     */
    public function setLeadsUserWechatAppid($leadsUserWechatAppid)
    {
        $this->container['leadsUserWechatAppid'] = $leadsUserWechatAppid;

        return $this;
    }

    /**
     * Gets leadsTel
     *
     * @return string
     */
    public function getLeadsTel()
    {
        return $this->container['leadsTel'];
    }

    /**
     * Sets leadsTel
     *
     * @param string $leadsTel leadsTel
     *
     * @return $this
     */
    public function setLeadsTel($leadsTel)
    {
        $this->container['leadsTel'] = $leadsTel;

        return $this;
    }

    /**
     * Gets leadsQq
     *
     * @return int
     */
    public function getLeadsQq()
    {
        return $this->container['leadsQq'];
    }

    /**
     * Sets leadsQq
     *
     * @param int $leadsQq leadsQq
     *
     * @return $this
     */
    public function setLeadsQq($leadsQq)
    {
        $this->container['leadsQq'] = $leadsQq;

        return $this;
    }

    /**
     * Gets leadsWechat
     *
     * @return string
     */
    public function getLeadsWechat()
    {
        return $this->container['leadsWechat'];
    }

    /**
     * Sets leadsWechat
     *
     * @param string $leadsWechat leadsWechat
     *
     * @return $this
     */
    public function setLeadsWechat($leadsWechat)
    {
        $this->container['leadsWechat'] = $leadsWechat;

        return $this;
    }

    /**
     * Gets leadsName
     *
     * @return string
     */
    public function getLeadsName()
    {
        return $this->container['leadsName'];
    }

    /**
     * Sets leadsName
     *
     * @param string $leadsName leadsName
     *
     * @return $this
     */
    public function setLeadsName($leadsName)
    {
        $this->container['leadsName'] = $leadsName;

        return $this;
    }

    /**
     * Gets leadsGender
     *
     * @return \TencentAds\Model\LeadCluesGenderType
     */
    public function getLeadsGender()
    {
        return $this->container['leadsGender'];
    }

    /**
     * Sets leadsGender
     *
     * @param \TencentAds\Model\LeadCluesGenderType $leadsGender leadsGender
     *
     * @return $this
     */
    public function setLeadsGender($leadsGender)
    {
        $this->container['leadsGender'] = $leadsGender;

        return $this;
    }

    /**
     * Gets leadsEmail
     *
     * @return string
     */
    public function getLeadsEmail()
    {
        return $this->container['leadsEmail'];
    }

    /**
     * Sets leadsEmail
     *
     * @param string $leadsEmail leadsEmail
     *
     * @return $this
     */
    public function setLeadsEmail($leadsEmail)
    {
        $this->container['leadsEmail'] = $leadsEmail;

        return $this;
    }

    /**
     * Gets leadsArea
     *
     * @return string
     */
    public function getLeadsArea()
    {
        return $this->container['leadsArea'];
    }

    /**
     * Sets leadsArea
     *
     * @param string $leadsArea leadsArea
     *
     * @return $this
     */
    public function setLeadsArea($leadsArea)
    {
        $this->container['leadsArea'] = $leadsArea;

        return $this;
    }

    /**
     * Gets bundle
     *
     * @return string
     */
    public function getBundle()
    {
        return $this->container['bundle'];
    }

    /**
     * Sets bundle
     *
     * @param string $bundle bundle
     *
     * @return $this
     */
    public function setBundle($bundle)
    {
        $this->container['bundle'] = $bundle;

        return $this;
    }

    /**
     * Gets clickId
     *
     * @return string
     */
    public function getClickId()
    {
        return $this->container['clickId'];
    }

    /**
     * Sets clickId
     *
     * @param string $clickId clickId
     *
     * @return $this
     */
    public function setClickId($clickId)
    {
        $this->container['clickId'] = $clickId;

        return $this;
    }

    /**
     * Gets outerLeadsConvertType
     *
     * @return string
     */
    public function getOuterLeadsConvertType()
    {
        return $this->container['outerLeadsConvertType'];
    }

    /**
     * Sets outerLeadsConvertType
     *
     * @param string $outerLeadsConvertType outerLeadsConvertType
     *
     * @return $this
     */
    public function setOuterLeadsConvertType($outerLeadsConvertType)
    {
        $this->container['outerLeadsConvertType'] = $outerLeadsConvertType;

        return $this;
    }

    /**
     * Gets outerLeadsIneffectReason
     *
     * @return string
     */
    public function getOuterLeadsIneffectReason()
    {
        return $this->container['outerLeadsIneffectReason'];
    }

    /**
     * Sets outerLeadsIneffectReason
     *
     * @param string $outerLeadsIneffectReason outerLeadsIneffectReason
     *
     * @return $this
     */
    public function setOuterLeadsIneffectReason($outerLeadsIneffectReason)
    {
        $this->container['outerLeadsIneffectReason'] = $outerLeadsIneffectReason;

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


