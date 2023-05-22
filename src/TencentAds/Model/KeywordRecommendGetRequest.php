<?php
/**
 * KeywordRecommendGetRequest
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
 * KeywordRecommendGetRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KeywordRecommendGetRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'KeywordRecommendGetRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'siteSets' => 'string[]',
        'recommendCategory' => '\TencentAds\Model\RecommendCategory',
        'accountId' => 'int',
        'systemIndustryId' => 'int',
        'queryWord' => 'string[]',
        'businessPointId' => 'string',
        'adgroupId' => 'int',
        'campaignId' => 'int',
        'includeWord' => 'string[]',
        'excludeWord' => 'string[]',
        'filterAdWord' => 'bool',
        'filterAccountWord' => 'bool',
        'recommendReasons' => 'string[]',
        'province' => 'int[]',
        'city' => 'int[]',
        'orderBy' => '\TencentAds\Model\OrderByStructInfo[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'siteSets' => null,
        'recommendCategory' => null,
        'accountId' => 'int64',
        'systemIndustryId' => 'int64',
        'queryWord' => null,
        'businessPointId' => null,
        'adgroupId' => 'int64',
        'campaignId' => 'int64',
        'includeWord' => null,
        'excludeWord' => null,
        'filterAdWord' => null,
        'filterAccountWord' => null,
        'recommendReasons' => null,
        'province' => 'int64',
        'city' => 'int64',
        'orderBy' => null
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
        'siteSets' => 'site_sets',
        'recommendCategory' => 'recommend_category',
        'accountId' => 'account_id',
        'systemIndustryId' => 'system_industry_id',
        'queryWord' => 'query_word',
        'businessPointId' => 'business_point_id',
        'adgroupId' => 'adgroup_id',
        'campaignId' => 'campaign_id',
        'includeWord' => 'include_word',
        'excludeWord' => 'exclude_word',
        'filterAdWord' => 'filter_ad_word',
        'filterAccountWord' => 'filter_account_word',
        'recommendReasons' => 'recommend_reasons',
        'province' => 'province',
        'city' => 'city',
        'orderBy' => 'order_by'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'siteSets' => 'setSiteSets',
        'recommendCategory' => 'setRecommendCategory',
        'accountId' => 'setAccountId',
        'systemIndustryId' => 'setSystemIndustryId',
        'queryWord' => 'setQueryWord',
        'businessPointId' => 'setBusinessPointId',
        'adgroupId' => 'setAdgroupId',
        'campaignId' => 'setCampaignId',
        'includeWord' => 'setIncludeWord',
        'excludeWord' => 'setExcludeWord',
        'filterAdWord' => 'setFilterAdWord',
        'filterAccountWord' => 'setFilterAccountWord',
        'recommendReasons' => 'setRecommendReasons',
        'province' => 'setProvince',
        'city' => 'setCity',
        'orderBy' => 'setOrderBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'siteSets' => 'getSiteSets',
        'recommendCategory' => 'getRecommendCategory',
        'accountId' => 'getAccountId',
        'systemIndustryId' => 'getSystemIndustryId',
        'queryWord' => 'getQueryWord',
        'businessPointId' => 'getBusinessPointId',
        'adgroupId' => 'getAdgroupId',
        'campaignId' => 'getCampaignId',
        'includeWord' => 'getIncludeWord',
        'excludeWord' => 'getExcludeWord',
        'filterAdWord' => 'getFilterAdWord',
        'filterAccountWord' => 'getFilterAccountWord',
        'recommendReasons' => 'getRecommendReasons',
        'province' => 'getProvince',
        'city' => 'getCity',
        'orderBy' => 'getOrderBy'
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
        $this->container['siteSets'] = isset($data['siteSets']) ? $data['siteSets'] : null;
        $this->container['recommendCategory'] = isset($data['recommendCategory']) ? $data['recommendCategory'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['systemIndustryId'] = isset($data['systemIndustryId']) ? $data['systemIndustryId'] : null;
        $this->container['queryWord'] = isset($data['queryWord']) ? $data['queryWord'] : null;
        $this->container['businessPointId'] = isset($data['businessPointId']) ? $data['businessPointId'] : null;
        $this->container['adgroupId'] = isset($data['adgroupId']) ? $data['adgroupId'] : null;
        $this->container['campaignId'] = isset($data['campaignId']) ? $data['campaignId'] : null;
        $this->container['includeWord'] = isset($data['includeWord']) ? $data['includeWord'] : null;
        $this->container['excludeWord'] = isset($data['excludeWord']) ? $data['excludeWord'] : null;
        $this->container['filterAdWord'] = isset($data['filterAdWord']) ? $data['filterAdWord'] : null;
        $this->container['filterAccountWord'] = isset($data['filterAccountWord']) ? $data['filterAccountWord'] : null;
        $this->container['recommendReasons'] = isset($data['recommendReasons']) ? $data['recommendReasons'] : null;
        $this->container['province'] = isset($data['province']) ? $data['province'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
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
     * Gets siteSets
     *
     * @return string[]|mixed
     */
    public function getSiteSets()
    {
        return $this->container['siteSets'];
    }

    /**
     * Sets siteSets
     *
     * @param string[]|mixed $siteSets siteSets
     *
     * @return $this
     */
    public function setSiteSets($siteSets)
    {
        $this->container['siteSets'] = $siteSets;

        return $this;
    }

    /**
     * Gets recommendCategory
     *
     * @return \TencentAds\Model\RecommendCategory|mixed
     */
    public function getRecommendCategory()
    {
        return $this->container['recommendCategory'];
    }

    /**
     * Sets recommendCategory
     *
     * @param \TencentAds\Model\RecommendCategory|mixed $recommendCategory recommendCategory
     *
     * @return $this
     */
    public function setRecommendCategory($recommendCategory)
    {
        $this->container['recommendCategory'] = $recommendCategory;

        return $this;
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
     * Gets systemIndustryId
     *
     * @return int|mixed
     */
    public function getSystemIndustryId()
    {
        return $this->container['systemIndustryId'];
    }

    /**
     * Sets systemIndustryId
     *
     * @param int|mixed $systemIndustryId systemIndustryId
     *
     * @return $this
     */
    public function setSystemIndustryId($systemIndustryId)
    {
        $this->container['systemIndustryId'] = $systemIndustryId;

        return $this;
    }

    /**
     * Gets queryWord
     *
     * @return string[]|mixed
     */
    public function getQueryWord()
    {
        return $this->container['queryWord'];
    }

    /**
     * Sets queryWord
     *
     * @param string[]|mixed $queryWord queryWord
     *
     * @return $this
     */
    public function setQueryWord($queryWord)
    {
        $this->container['queryWord'] = $queryWord;

        return $this;
    }

    /**
     * Gets businessPointId
     *
     * @return string|mixed
     */
    public function getBusinessPointId()
    {
        return $this->container['businessPointId'];
    }

    /**
     * Sets businessPointId
     *
     * @param string|mixed $businessPointId businessPointId
     *
     * @return $this
     */
    public function setBusinessPointId($businessPointId)
    {
        $this->container['businessPointId'] = $businessPointId;

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
     * Gets campaignId
     *
     * @return int|mixed
     */
    public function getCampaignId()
    {
        return $this->container['campaignId'];
    }

    /**
     * Sets campaignId
     *
     * @param int|mixed $campaignId campaignId
     *
     * @return $this
     */
    public function setCampaignId($campaignId)
    {
        $this->container['campaignId'] = $campaignId;

        return $this;
    }

    /**
     * Gets includeWord
     *
     * @return string[]|mixed
     */
    public function getIncludeWord()
    {
        return $this->container['includeWord'];
    }

    /**
     * Sets includeWord
     *
     * @param string[]|mixed $includeWord includeWord
     *
     * @return $this
     */
    public function setIncludeWord($includeWord)
    {
        $this->container['includeWord'] = $includeWord;

        return $this;
    }

    /**
     * Gets excludeWord
     *
     * @return string[]|mixed
     */
    public function getExcludeWord()
    {
        return $this->container['excludeWord'];
    }

    /**
     * Sets excludeWord
     *
     * @param string[]|mixed $excludeWord excludeWord
     *
     * @return $this
     */
    public function setExcludeWord($excludeWord)
    {
        $this->container['excludeWord'] = $excludeWord;

        return $this;
    }

    /**
     * Gets filterAdWord
     *
     * @return bool|mixed
     */
    public function getFilterAdWord()
    {
        return $this->container['filterAdWord'];
    }

    /**
     * Sets filterAdWord
     *
     * @param bool|mixed $filterAdWord filterAdWord
     *
     * @return $this
     */
    public function setFilterAdWord($filterAdWord)
    {
        $this->container['filterAdWord'] = $filterAdWord;

        return $this;
    }

    /**
     * Gets filterAccountWord
     *
     * @return bool|mixed
     */
    public function getFilterAccountWord()
    {
        return $this->container['filterAccountWord'];
    }

    /**
     * Sets filterAccountWord
     *
     * @param bool|mixed $filterAccountWord filterAccountWord
     *
     * @return $this
     */
    public function setFilterAccountWord($filterAccountWord)
    {
        $this->container['filterAccountWord'] = $filterAccountWord;

        return $this;
    }

    /**
     * Gets recommendReasons
     *
     * @return string[]|mixed
     */
    public function getRecommendReasons()
    {
        return $this->container['recommendReasons'];
    }

    /**
     * Sets recommendReasons
     *
     * @param string[]|mixed $recommendReasons recommendReasons
     *
     * @return $this
     */
    public function setRecommendReasons($recommendReasons)
    {
        $this->container['recommendReasons'] = $recommendReasons;

        return $this;
    }

    /**
     * Gets province
     *
     * @return int[]|mixed
     */
    public function getProvince()
    {
        return $this->container['province'];
    }

    /**
     * Sets province
     *
     * @param int[]|mixed $province province
     *
     * @return $this
     */
    public function setProvince($province)
    {
        $this->container['province'] = $province;

        return $this;
    }

    /**
     * Gets city
     *
     * @return int[]|mixed
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param int[]|mixed $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets orderBy
     *
     * @return \TencentAds\Model\OrderByStructInfo[]|mixed
     */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
     * Sets orderBy
     *
     * @param \TencentAds\Model\OrderByStructInfo[]|mixed $orderBy orderBy
     *
     * @return $this
     */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;

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


