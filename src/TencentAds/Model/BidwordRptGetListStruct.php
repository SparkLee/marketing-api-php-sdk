<?php
/**
 * BidwordRptGetListStruct
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
 * BidwordRptGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BidwordRptGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BidwordRptGetListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bidwordId' => 'int',
        'bidword' => 'string',
        'statsDate' => 'string',
        'campaignId' => 'int',
        'campaignName' => 'string',
        'adgroupId' => 'int',
        'adgroupName' => 'string',
        'time' => 'string',
        'placementGroupId' => 'int',
        'placementGroupName' => 'string',
        'cpc' => 'string',
        'ctr' => 'string',
        'cost' => 'string',
        'viewCount' => 'string',
        'validClickCount' => 'string',
        'conversionsCount' => 'string',
        'conversionsByClickCount' => 'string',
        'conversionsByDisplayCount' => 'string',
        'conversionsRate' => 'string',
        'conversionsByDisplayRate' => 'string',
        'conversionsByClickRate' => 'string',
        'conversionsCost' => 'string',
        'conversionsByDisplayCost' => 'string',
        'conversionsByClickCost' => 'string',
        'deepConversionsCount' => 'string',
        'deepConversionsRate' => 'string',
        'deepConversionsCost' => 'string',
        'thousandDisplayPrice' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bidwordId' => 'int64',
        'bidword' => null,
        'statsDate' => null,
        'campaignId' => 'int64',
        'campaignName' => null,
        'adgroupId' => 'int64',
        'adgroupName' => null,
        'time' => null,
        'placementGroupId' => 'int64',
        'placementGroupName' => null,
        'cpc' => null,
        'ctr' => null,
        'cost' => null,
        'viewCount' => null,
        'validClickCount' => null,
        'conversionsCount' => null,
        'conversionsByClickCount' => null,
        'conversionsByDisplayCount' => null,
        'conversionsRate' => null,
        'conversionsByDisplayRate' => null,
        'conversionsByClickRate' => null,
        'conversionsCost' => null,
        'conversionsByDisplayCost' => null,
        'conversionsByClickCost' => null,
        'deepConversionsCount' => null,
        'deepConversionsRate' => null,
        'deepConversionsCost' => null,
        'thousandDisplayPrice' => null
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
        'bidwordId' => 'bidword_id',
        'bidword' => 'bidword',
        'statsDate' => 'stats_date',
        'campaignId' => 'campaign_id',
        'campaignName' => 'campaign_name',
        'adgroupId' => 'adgroup_id',
        'adgroupName' => 'adgroup_name',
        'time' => 'time',
        'placementGroupId' => 'placement_group_id',
        'placementGroupName' => 'placement_group_name',
        'cpc' => 'cpc',
        'ctr' => 'ctr',
        'cost' => 'cost',
        'viewCount' => 'view_count',
        'validClickCount' => 'valid_click_count',
        'conversionsCount' => 'conversions_count',
        'conversionsByClickCount' => 'conversions_by_click_count',
        'conversionsByDisplayCount' => 'conversions_by_display_count',
        'conversionsRate' => 'conversions_rate',
        'conversionsByDisplayRate' => 'conversions_by_display_rate',
        'conversionsByClickRate' => 'conversions_by_click_rate',
        'conversionsCost' => 'conversions_cost',
        'conversionsByDisplayCost' => 'conversions_by_display_cost',
        'conversionsByClickCost' => 'conversions_by_click_cost',
        'deepConversionsCount' => 'deep_conversions_count',
        'deepConversionsRate' => 'deep_conversions_rate',
        'deepConversionsCost' => 'deep_conversions_cost',
        'thousandDisplayPrice' => 'thousand_display_price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bidwordId' => 'setBidwordId',
        'bidword' => 'setBidword',
        'statsDate' => 'setStatsDate',
        'campaignId' => 'setCampaignId',
        'campaignName' => 'setCampaignName',
        'adgroupId' => 'setAdgroupId',
        'adgroupName' => 'setAdgroupName',
        'time' => 'setTime',
        'placementGroupId' => 'setPlacementGroupId',
        'placementGroupName' => 'setPlacementGroupName',
        'cpc' => 'setCpc',
        'ctr' => 'setCtr',
        'cost' => 'setCost',
        'viewCount' => 'setViewCount',
        'validClickCount' => 'setValidClickCount',
        'conversionsCount' => 'setConversionsCount',
        'conversionsByClickCount' => 'setConversionsByClickCount',
        'conversionsByDisplayCount' => 'setConversionsByDisplayCount',
        'conversionsRate' => 'setConversionsRate',
        'conversionsByDisplayRate' => 'setConversionsByDisplayRate',
        'conversionsByClickRate' => 'setConversionsByClickRate',
        'conversionsCost' => 'setConversionsCost',
        'conversionsByDisplayCost' => 'setConversionsByDisplayCost',
        'conversionsByClickCost' => 'setConversionsByClickCost',
        'deepConversionsCount' => 'setDeepConversionsCount',
        'deepConversionsRate' => 'setDeepConversionsRate',
        'deepConversionsCost' => 'setDeepConversionsCost',
        'thousandDisplayPrice' => 'setThousandDisplayPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bidwordId' => 'getBidwordId',
        'bidword' => 'getBidword',
        'statsDate' => 'getStatsDate',
        'campaignId' => 'getCampaignId',
        'campaignName' => 'getCampaignName',
        'adgroupId' => 'getAdgroupId',
        'adgroupName' => 'getAdgroupName',
        'time' => 'getTime',
        'placementGroupId' => 'getPlacementGroupId',
        'placementGroupName' => 'getPlacementGroupName',
        'cpc' => 'getCpc',
        'ctr' => 'getCtr',
        'cost' => 'getCost',
        'viewCount' => 'getViewCount',
        'validClickCount' => 'getValidClickCount',
        'conversionsCount' => 'getConversionsCount',
        'conversionsByClickCount' => 'getConversionsByClickCount',
        'conversionsByDisplayCount' => 'getConversionsByDisplayCount',
        'conversionsRate' => 'getConversionsRate',
        'conversionsByDisplayRate' => 'getConversionsByDisplayRate',
        'conversionsByClickRate' => 'getConversionsByClickRate',
        'conversionsCost' => 'getConversionsCost',
        'conversionsByDisplayCost' => 'getConversionsByDisplayCost',
        'conversionsByClickCost' => 'getConversionsByClickCost',
        'deepConversionsCount' => 'getDeepConversionsCount',
        'deepConversionsRate' => 'getDeepConversionsRate',
        'deepConversionsCost' => 'getDeepConversionsCost',
        'thousandDisplayPrice' => 'getThousandDisplayPrice'
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
        $this->container['bidwordId'] = isset($data['bidwordId']) ? $data['bidwordId'] : null;
        $this->container['bidword'] = isset($data['bidword']) ? $data['bidword'] : null;
        $this->container['statsDate'] = isset($data['statsDate']) ? $data['statsDate'] : null;
        $this->container['campaignId'] = isset($data['campaignId']) ? $data['campaignId'] : null;
        $this->container['campaignName'] = isset($data['campaignName']) ? $data['campaignName'] : null;
        $this->container['adgroupId'] = isset($data['adgroupId']) ? $data['adgroupId'] : null;
        $this->container['adgroupName'] = isset($data['adgroupName']) ? $data['adgroupName'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['placementGroupId'] = isset($data['placementGroupId']) ? $data['placementGroupId'] : null;
        $this->container['placementGroupName'] = isset($data['placementGroupName']) ? $data['placementGroupName'] : null;
        $this->container['cpc'] = isset($data['cpc']) ? $data['cpc'] : null;
        $this->container['ctr'] = isset($data['ctr']) ? $data['ctr'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['viewCount'] = isset($data['viewCount']) ? $data['viewCount'] : null;
        $this->container['validClickCount'] = isset($data['validClickCount']) ? $data['validClickCount'] : null;
        $this->container['conversionsCount'] = isset($data['conversionsCount']) ? $data['conversionsCount'] : null;
        $this->container['conversionsByClickCount'] = isset($data['conversionsByClickCount']) ? $data['conversionsByClickCount'] : null;
        $this->container['conversionsByDisplayCount'] = isset($data['conversionsByDisplayCount']) ? $data['conversionsByDisplayCount'] : null;
        $this->container['conversionsRate'] = isset($data['conversionsRate']) ? $data['conversionsRate'] : null;
        $this->container['conversionsByDisplayRate'] = isset($data['conversionsByDisplayRate']) ? $data['conversionsByDisplayRate'] : null;
        $this->container['conversionsByClickRate'] = isset($data['conversionsByClickRate']) ? $data['conversionsByClickRate'] : null;
        $this->container['conversionsCost'] = isset($data['conversionsCost']) ? $data['conversionsCost'] : null;
        $this->container['conversionsByDisplayCost'] = isset($data['conversionsByDisplayCost']) ? $data['conversionsByDisplayCost'] : null;
        $this->container['conversionsByClickCost'] = isset($data['conversionsByClickCost']) ? $data['conversionsByClickCost'] : null;
        $this->container['deepConversionsCount'] = isset($data['deepConversionsCount']) ? $data['deepConversionsCount'] : null;
        $this->container['deepConversionsRate'] = isset($data['deepConversionsRate']) ? $data['deepConversionsRate'] : null;
        $this->container['deepConversionsCost'] = isset($data['deepConversionsCost']) ? $data['deepConversionsCost'] : null;
        $this->container['thousandDisplayPrice'] = isset($data['thousandDisplayPrice']) ? $data['thousandDisplayPrice'] : null;
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
     * Gets bidwordId
     *
     * @return int|mixed
     */
    public function getBidwordId()
    {
        return $this->container['bidwordId'];
    }

    /**
     * Sets bidwordId
     *
     * @param int|mixed $bidwordId bidwordId
     *
     * @return $this
     */
    public function setBidwordId($bidwordId)
    {
        $this->container['bidwordId'] = $bidwordId;

        return $this;
    }

    /**
     * Gets bidword
     *
     * @return string|mixed
     */
    public function getBidword()
    {
        return $this->container['bidword'];
    }

    /**
     * Sets bidword
     *
     * @param string|mixed $bidword bidword
     *
     * @return $this
     */
    public function setBidword($bidword)
    {
        $this->container['bidword'] = $bidword;

        return $this;
    }

    /**
     * Gets statsDate
     *
     * @return string|mixed
     */
    public function getStatsDate()
    {
        return $this->container['statsDate'];
    }

    /**
     * Sets statsDate
     *
     * @param string|mixed $statsDate statsDate
     *
     * @return $this
     */
    public function setStatsDate($statsDate)
    {
        $this->container['statsDate'] = $statsDate;

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
     * Gets campaignName
     *
     * @return string|mixed
     */
    public function getCampaignName()
    {
        return $this->container['campaignName'];
    }

    /**
     * Sets campaignName
     *
     * @param string|mixed $campaignName campaignName
     *
     * @return $this
     */
    public function setCampaignName($campaignName)
    {
        $this->container['campaignName'] = $campaignName;

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
     * Gets adgroupName
     *
     * @return string|mixed
     */
    public function getAdgroupName()
    {
        return $this->container['adgroupName'];
    }

    /**
     * Sets adgroupName
     *
     * @param string|mixed $adgroupName adgroupName
     *
     * @return $this
     */
    public function setAdgroupName($adgroupName)
    {
        $this->container['adgroupName'] = $adgroupName;

        return $this;
    }

    /**
     * Gets time
     *
     * @return string|mixed
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param string|mixed $time time
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets placementGroupId
     *
     * @return int|mixed
     */
    public function getPlacementGroupId()
    {
        return $this->container['placementGroupId'];
    }

    /**
     * Sets placementGroupId
     *
     * @param int|mixed $placementGroupId placementGroupId
     *
     * @return $this
     */
    public function setPlacementGroupId($placementGroupId)
    {
        $this->container['placementGroupId'] = $placementGroupId;

        return $this;
    }

    /**
     * Gets placementGroupName
     *
     * @return string|mixed
     */
    public function getPlacementGroupName()
    {
        return $this->container['placementGroupName'];
    }

    /**
     * Sets placementGroupName
     *
     * @param string|mixed $placementGroupName placementGroupName
     *
     * @return $this
     */
    public function setPlacementGroupName($placementGroupName)
    {
        $this->container['placementGroupName'] = $placementGroupName;

        return $this;
    }

    /**
     * Gets cpc
     *
     * @return string|mixed
     */
    public function getCpc()
    {
        return $this->container['cpc'];
    }

    /**
     * Sets cpc
     *
     * @param string|mixed $cpc cpc
     *
     * @return $this
     */
    public function setCpc($cpc)
    {
        $this->container['cpc'] = $cpc;

        return $this;
    }

    /**
     * Gets ctr
     *
     * @return string|mixed
     */
    public function getCtr()
    {
        return $this->container['ctr'];
    }

    /**
     * Sets ctr
     *
     * @param string|mixed $ctr ctr
     *
     * @return $this
     */
    public function setCtr($ctr)
    {
        $this->container['ctr'] = $ctr;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return string|mixed
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param string|mixed $cost cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets viewCount
     *
     * @return string|mixed
     */
    public function getViewCount()
    {
        return $this->container['viewCount'];
    }

    /**
     * Sets viewCount
     *
     * @param string|mixed $viewCount viewCount
     *
     * @return $this
     */
    public function setViewCount($viewCount)
    {
        $this->container['viewCount'] = $viewCount;

        return $this;
    }

    /**
     * Gets validClickCount
     *
     * @return string|mixed
     */
    public function getValidClickCount()
    {
        return $this->container['validClickCount'];
    }

    /**
     * Sets validClickCount
     *
     * @param string|mixed $validClickCount validClickCount
     *
     * @return $this
     */
    public function setValidClickCount($validClickCount)
    {
        $this->container['validClickCount'] = $validClickCount;

        return $this;
    }

    /**
     * Gets conversionsCount
     *
     * @return string|mixed
     */
    public function getConversionsCount()
    {
        return $this->container['conversionsCount'];
    }

    /**
     * Sets conversionsCount
     *
     * @param string|mixed $conversionsCount conversionsCount
     *
     * @return $this
     */
    public function setConversionsCount($conversionsCount)
    {
        $this->container['conversionsCount'] = $conversionsCount;

        return $this;
    }

    /**
     * Gets conversionsByClickCount
     *
     * @return string|mixed
     */
    public function getConversionsByClickCount()
    {
        return $this->container['conversionsByClickCount'];
    }

    /**
     * Sets conversionsByClickCount
     *
     * @param string|mixed $conversionsByClickCount conversionsByClickCount
     *
     * @return $this
     */
    public function setConversionsByClickCount($conversionsByClickCount)
    {
        $this->container['conversionsByClickCount'] = $conversionsByClickCount;

        return $this;
    }

    /**
     * Gets conversionsByDisplayCount
     *
     * @return string|mixed
     */
    public function getConversionsByDisplayCount()
    {
        return $this->container['conversionsByDisplayCount'];
    }

    /**
     * Sets conversionsByDisplayCount
     *
     * @param string|mixed $conversionsByDisplayCount conversionsByDisplayCount
     *
     * @return $this
     */
    public function setConversionsByDisplayCount($conversionsByDisplayCount)
    {
        $this->container['conversionsByDisplayCount'] = $conversionsByDisplayCount;

        return $this;
    }

    /**
     * Gets conversionsRate
     *
     * @return string|mixed
     */
    public function getConversionsRate()
    {
        return $this->container['conversionsRate'];
    }

    /**
     * Sets conversionsRate
     *
     * @param string|mixed $conversionsRate conversionsRate
     *
     * @return $this
     */
    public function setConversionsRate($conversionsRate)
    {
        $this->container['conversionsRate'] = $conversionsRate;

        return $this;
    }

    /**
     * Gets conversionsByDisplayRate
     *
     * @return string|mixed
     */
    public function getConversionsByDisplayRate()
    {
        return $this->container['conversionsByDisplayRate'];
    }

    /**
     * Sets conversionsByDisplayRate
     *
     * @param string|mixed $conversionsByDisplayRate conversionsByDisplayRate
     *
     * @return $this
     */
    public function setConversionsByDisplayRate($conversionsByDisplayRate)
    {
        $this->container['conversionsByDisplayRate'] = $conversionsByDisplayRate;

        return $this;
    }

    /**
     * Gets conversionsByClickRate
     *
     * @return string|mixed
     */
    public function getConversionsByClickRate()
    {
        return $this->container['conversionsByClickRate'];
    }

    /**
     * Sets conversionsByClickRate
     *
     * @param string|mixed $conversionsByClickRate conversionsByClickRate
     *
     * @return $this
     */
    public function setConversionsByClickRate($conversionsByClickRate)
    {
        $this->container['conversionsByClickRate'] = $conversionsByClickRate;

        return $this;
    }

    /**
     * Gets conversionsCost
     *
     * @return string|mixed
     */
    public function getConversionsCost()
    {
        return $this->container['conversionsCost'];
    }

    /**
     * Sets conversionsCost
     *
     * @param string|mixed $conversionsCost conversionsCost
     *
     * @return $this
     */
    public function setConversionsCost($conversionsCost)
    {
        $this->container['conversionsCost'] = $conversionsCost;

        return $this;
    }

    /**
     * Gets conversionsByDisplayCost
     *
     * @return string|mixed
     */
    public function getConversionsByDisplayCost()
    {
        return $this->container['conversionsByDisplayCost'];
    }

    /**
     * Sets conversionsByDisplayCost
     *
     * @param string|mixed $conversionsByDisplayCost conversionsByDisplayCost
     *
     * @return $this
     */
    public function setConversionsByDisplayCost($conversionsByDisplayCost)
    {
        $this->container['conversionsByDisplayCost'] = $conversionsByDisplayCost;

        return $this;
    }

    /**
     * Gets conversionsByClickCost
     *
     * @return string|mixed
     */
    public function getConversionsByClickCost()
    {
        return $this->container['conversionsByClickCost'];
    }

    /**
     * Sets conversionsByClickCost
     *
     * @param string|mixed $conversionsByClickCost conversionsByClickCost
     *
     * @return $this
     */
    public function setConversionsByClickCost($conversionsByClickCost)
    {
        $this->container['conversionsByClickCost'] = $conversionsByClickCost;

        return $this;
    }

    /**
     * Gets deepConversionsCount
     *
     * @return string|mixed
     */
    public function getDeepConversionsCount()
    {
        return $this->container['deepConversionsCount'];
    }

    /**
     * Sets deepConversionsCount
     *
     * @param string|mixed $deepConversionsCount deepConversionsCount
     *
     * @return $this
     */
    public function setDeepConversionsCount($deepConversionsCount)
    {
        $this->container['deepConversionsCount'] = $deepConversionsCount;

        return $this;
    }

    /**
     * Gets deepConversionsRate
     *
     * @return string|mixed
     */
    public function getDeepConversionsRate()
    {
        return $this->container['deepConversionsRate'];
    }

    /**
     * Sets deepConversionsRate
     *
     * @param string|mixed $deepConversionsRate deepConversionsRate
     *
     * @return $this
     */
    public function setDeepConversionsRate($deepConversionsRate)
    {
        $this->container['deepConversionsRate'] = $deepConversionsRate;

        return $this;
    }

    /**
     * Gets deepConversionsCost
     *
     * @return string|mixed
     */
    public function getDeepConversionsCost()
    {
        return $this->container['deepConversionsCost'];
    }

    /**
     * Sets deepConversionsCost
     *
     * @param string|mixed $deepConversionsCost deepConversionsCost
     *
     * @return $this
     */
    public function setDeepConversionsCost($deepConversionsCost)
    {
        $this->container['deepConversionsCost'] = $deepConversionsCost;

        return $this;
    }

    /**
     * Gets thousandDisplayPrice
     *
     * @return string|mixed
     */
    public function getThousandDisplayPrice()
    {
        return $this->container['thousandDisplayPrice'];
    }

    /**
     * Sets thousandDisplayPrice
     *
     * @param string|mixed $thousandDisplayPrice thousandDisplayPrice
     *
     * @return $this
     */
    public function setThousandDisplayPrice($thousandDisplayPrice)
    {
        $this->container['thousandDisplayPrice'] = $thousandDisplayPrice;

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


