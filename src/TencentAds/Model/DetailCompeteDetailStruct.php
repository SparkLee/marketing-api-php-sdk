<?php
/**
 * DetailCompeteDetailStruct
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
 * DetailCompeteDetailStruct Class Doc Comment
 *
 * @category Class
 * @description 诊断详情-竞争力明细
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DetailCompeteDetailStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'detail_compete_detail_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'competeAttribution' => '\TencentAds\Model\CompeteAttributionStruct[]',
        'competeBudgetDetails' => '\TencentAds\Model\CompeteBudgetDetailsStruct',
        'competeBidDetails' => '\TencentAds\Model\CompeteBidDetailsStruct',
        'competeUserAcceptance' => '\TencentAds\Model\CompeteUserAcceptanceStruct',
        'competePctrTrends' => '\TencentAds\Model\CompetePctrTrendsStruct',
        'competePcvrTrends' => '\TencentAds\Model\CompetePcvrTrendsStruct',
        'competeWinAdgroup' => '\TencentAds\Model\CompeteWinAdgroupStruct',
        'competeSurroundings' => '\TencentAds\Model\CompeteSurroundingsStruct'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'competeAttribution' => null,
        'competeBudgetDetails' => null,
        'competeBidDetails' => null,
        'competeUserAcceptance' => null,
        'competePctrTrends' => null,
        'competePcvrTrends' => null,
        'competeWinAdgroup' => null,
        'competeSurroundings' => null
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
        'competeAttribution' => 'compete_attribution',
        'competeBudgetDetails' => 'compete_budget_details',
        'competeBidDetails' => 'compete_bid_details',
        'competeUserAcceptance' => 'compete_user_acceptance',
        'competePctrTrends' => 'compete_pctr_trends',
        'competePcvrTrends' => 'compete_pcvr_trends',
        'competeWinAdgroup' => 'compete_win_adgroup',
        'competeSurroundings' => 'compete_surroundings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'competeAttribution' => 'setCompeteAttribution',
        'competeBudgetDetails' => 'setCompeteBudgetDetails',
        'competeBidDetails' => 'setCompeteBidDetails',
        'competeUserAcceptance' => 'setCompeteUserAcceptance',
        'competePctrTrends' => 'setCompetePctrTrends',
        'competePcvrTrends' => 'setCompetePcvrTrends',
        'competeWinAdgroup' => 'setCompeteWinAdgroup',
        'competeSurroundings' => 'setCompeteSurroundings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'competeAttribution' => 'getCompeteAttribution',
        'competeBudgetDetails' => 'getCompeteBudgetDetails',
        'competeBidDetails' => 'getCompeteBidDetails',
        'competeUserAcceptance' => 'getCompeteUserAcceptance',
        'competePctrTrends' => 'getCompetePctrTrends',
        'competePcvrTrends' => 'getCompetePcvrTrends',
        'competeWinAdgroup' => 'getCompeteWinAdgroup',
        'competeSurroundings' => 'getCompeteSurroundings'
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
        $this->container['competeAttribution'] = isset($data['competeAttribution']) ? $data['competeAttribution'] : null;
        $this->container['competeBudgetDetails'] = isset($data['competeBudgetDetails']) ? $data['competeBudgetDetails'] : null;
        $this->container['competeBidDetails'] = isset($data['competeBidDetails']) ? $data['competeBidDetails'] : null;
        $this->container['competeUserAcceptance'] = isset($data['competeUserAcceptance']) ? $data['competeUserAcceptance'] : null;
        $this->container['competePctrTrends'] = isset($data['competePctrTrends']) ? $data['competePctrTrends'] : null;
        $this->container['competePcvrTrends'] = isset($data['competePcvrTrends']) ? $data['competePcvrTrends'] : null;
        $this->container['competeWinAdgroup'] = isset($data['competeWinAdgroup']) ? $data['competeWinAdgroup'] : null;
        $this->container['competeSurroundings'] = isset($data['competeSurroundings']) ? $data['competeSurroundings'] : null;
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
     * Gets competeAttribution
     *
     * @return \TencentAds\Model\CompeteAttributionStruct[]|mixed
     */
    public function getCompeteAttribution()
    {
        return $this->container['competeAttribution'];
    }

    /**
     * Sets competeAttribution
     *
     * @param \TencentAds\Model\CompeteAttributionStruct[] $competeAttribution competeAttribution
     *
     * @return $this
     */
    public function setCompeteAttribution($competeAttribution)
    {
        $this->container['competeAttribution'] = $competeAttribution;

        return $this;
    }

    /**
     * Gets competeBudgetDetails
     *
     * @return \TencentAds\Model\CompeteBudgetDetailsStruct|mixed
     */
    public function getCompeteBudgetDetails()
    {
        return $this->container['competeBudgetDetails'];
    }

    /**
     * Sets competeBudgetDetails
     *
     * @param \TencentAds\Model\CompeteBudgetDetailsStruct $competeBudgetDetails competeBudgetDetails
     *
     * @return $this
     */
    public function setCompeteBudgetDetails($competeBudgetDetails)
    {
        $this->container['competeBudgetDetails'] = $competeBudgetDetails;

        return $this;
    }

    /**
     * Gets competeBidDetails
     *
     * @return \TencentAds\Model\CompeteBidDetailsStruct|mixed
     */
    public function getCompeteBidDetails()
    {
        return $this->container['competeBidDetails'];
    }

    /**
     * Sets competeBidDetails
     *
     * @param \TencentAds\Model\CompeteBidDetailsStruct $competeBidDetails competeBidDetails
     *
     * @return $this
     */
    public function setCompeteBidDetails($competeBidDetails)
    {
        $this->container['competeBidDetails'] = $competeBidDetails;

        return $this;
    }

    /**
     * Gets competeUserAcceptance
     *
     * @return \TencentAds\Model\CompeteUserAcceptanceStruct|mixed
     */
    public function getCompeteUserAcceptance()
    {
        return $this->container['competeUserAcceptance'];
    }

    /**
     * Sets competeUserAcceptance
     *
     * @param \TencentAds\Model\CompeteUserAcceptanceStruct $competeUserAcceptance competeUserAcceptance
     *
     * @return $this
     */
    public function setCompeteUserAcceptance($competeUserAcceptance)
    {
        $this->container['competeUserAcceptance'] = $competeUserAcceptance;

        return $this;
    }

    /**
     * Gets competePctrTrends
     *
     * @return \TencentAds\Model\CompetePctrTrendsStruct|mixed
     */
    public function getCompetePctrTrends()
    {
        return $this->container['competePctrTrends'];
    }

    /**
     * Sets competePctrTrends
     *
     * @param \TencentAds\Model\CompetePctrTrendsStruct $competePctrTrends competePctrTrends
     *
     * @return $this
     */
    public function setCompetePctrTrends($competePctrTrends)
    {
        $this->container['competePctrTrends'] = $competePctrTrends;

        return $this;
    }

    /**
     * Gets competePcvrTrends
     *
     * @return \TencentAds\Model\CompetePcvrTrendsStruct|mixed
     */
    public function getCompetePcvrTrends()
    {
        return $this->container['competePcvrTrends'];
    }

    /**
     * Sets competePcvrTrends
     *
     * @param \TencentAds\Model\CompetePcvrTrendsStruct $competePcvrTrends competePcvrTrends
     *
     * @return $this
     */
    public function setCompetePcvrTrends($competePcvrTrends)
    {
        $this->container['competePcvrTrends'] = $competePcvrTrends;

        return $this;
    }

    /**
     * Gets competeWinAdgroup
     *
     * @return \TencentAds\Model\CompeteWinAdgroupStruct|mixed
     */
    public function getCompeteWinAdgroup()
    {
        return $this->container['competeWinAdgroup'];
    }

    /**
     * Sets competeWinAdgroup
     *
     * @param \TencentAds\Model\CompeteWinAdgroupStruct $competeWinAdgroup competeWinAdgroup
     *
     * @return $this
     */
    public function setCompeteWinAdgroup($competeWinAdgroup)
    {
        $this->container['competeWinAdgroup'] = $competeWinAdgroup;

        return $this;
    }

    /**
     * Gets competeSurroundings
     *
     * @return \TencentAds\Model\CompeteSurroundingsStruct|mixed
     */
    public function getCompeteSurroundings()
    {
        return $this->container['competeSurroundings'];
    }

    /**
     * Sets competeSurroundings
     *
     * @param \TencentAds\Model\CompeteSurroundingsStruct $competeSurroundings competeSurroundings
     *
     * @return $this
     */
    public function setCompeteSurroundings($competeSurroundings)
    {
        $this->container['competeSurroundings'] = $competeSurroundings;

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


