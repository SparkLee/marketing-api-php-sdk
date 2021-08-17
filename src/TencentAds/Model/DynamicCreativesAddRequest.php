<?php
/**
 * DynamicCreativesAddRequest
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
 * DynamicCreativesAddRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DynamicCreativesAddRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DynamicCreativesAddRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dynamicCreativeName' => 'string',
        'dynamicCreativeTemplateId' => 'int',
        'dynamicCreativeElements' => '\TencentAds\Model\DynamicCreativeElements',
        'campaignType' => '\TencentAds\Model\CampaignType',
        'promotedObjectType' => '\TencentAds\Model\PromotedObjectType',
        'pageType' => '\TencentAds\Model\DestinationType',
        'automaticSiteEnabled' => 'bool',
        'siteSet' => 'string[]',
        'promotedObjectId' => 'string',
        'pageSpec' => '\TencentAds\Model\DynamicCreativePageSpec',
        'deepLinkUrl' => 'string',
        'impressionTrackingUrl' => 'string',
        'clickTrackingUrl' => 'string',
        'feedsVideoCommentSwitch' => 'bool',
        'unionMarketSwitch' => 'bool',
        'profileId' => 'int',
        'dynamicAdcreativeSpec' => '\TencentAds\Model\DynamicAdcreativeSpecForDc',
        'videoEndPage' => '\TencentAds\Model\VideoEndPageSpec',
        'barrageList' => '\TencentAds\Model\BarrageListCreateStruct[]',
        'dynamicCreativeGroupUsed' => '\TencentAds\Model\DynamicCreativeGroupUsed',
        'appGiftPackCode' => '\TencentAds\Model\AppGiftPackCode',
        'enableBreakthroughSiteset' => 'bool',
        'accountId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dynamicCreativeName' => null,
        'dynamicCreativeTemplateId' => 'int64',
        'dynamicCreativeElements' => null,
        'campaignType' => null,
        'promotedObjectType' => null,
        'pageType' => null,
        'automaticSiteEnabled' => null,
        'siteSet' => null,
        'promotedObjectId' => null,
        'pageSpec' => null,
        'deepLinkUrl' => null,
        'impressionTrackingUrl' => null,
        'clickTrackingUrl' => null,
        'feedsVideoCommentSwitch' => null,
        'unionMarketSwitch' => null,
        'profileId' => 'int64',
        'dynamicAdcreativeSpec' => null,
        'videoEndPage' => null,
        'barrageList' => null,
        'dynamicCreativeGroupUsed' => null,
        'appGiftPackCode' => null,
        'enableBreakthroughSiteset' => null,
        'accountId' => 'int64'
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
        'dynamicCreativeName' => 'dynamic_creative_name',
        'dynamicCreativeTemplateId' => 'dynamic_creative_template_id',
        'dynamicCreativeElements' => 'dynamic_creative_elements',
        'campaignType' => 'campaign_type',
        'promotedObjectType' => 'promoted_object_type',
        'pageType' => 'page_type',
        'automaticSiteEnabled' => 'automatic_site_enabled',
        'siteSet' => 'site_set',
        'promotedObjectId' => 'promoted_object_id',
        'pageSpec' => 'page_spec',
        'deepLinkUrl' => 'deep_link_url',
        'impressionTrackingUrl' => 'impression_tracking_url',
        'clickTrackingUrl' => 'click_tracking_url',
        'feedsVideoCommentSwitch' => 'feeds_video_comment_switch',
        'unionMarketSwitch' => 'union_market_switch',
        'profileId' => 'profile_id',
        'dynamicAdcreativeSpec' => 'dynamic_adcreative_spec',
        'videoEndPage' => 'video_end_page',
        'barrageList' => 'barrage_list',
        'dynamicCreativeGroupUsed' => 'dynamic_creative_group_used',
        'appGiftPackCode' => 'app_gift_pack_code',
        'enableBreakthroughSiteset' => 'enable_breakthrough_siteset',
        'accountId' => 'account_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dynamicCreativeName' => 'setDynamicCreativeName',
        'dynamicCreativeTemplateId' => 'setDynamicCreativeTemplateId',
        'dynamicCreativeElements' => 'setDynamicCreativeElements',
        'campaignType' => 'setCampaignType',
        'promotedObjectType' => 'setPromotedObjectType',
        'pageType' => 'setPageType',
        'automaticSiteEnabled' => 'setAutomaticSiteEnabled',
        'siteSet' => 'setSiteSet',
        'promotedObjectId' => 'setPromotedObjectId',
        'pageSpec' => 'setPageSpec',
        'deepLinkUrl' => 'setDeepLinkUrl',
        'impressionTrackingUrl' => 'setImpressionTrackingUrl',
        'clickTrackingUrl' => 'setClickTrackingUrl',
        'feedsVideoCommentSwitch' => 'setFeedsVideoCommentSwitch',
        'unionMarketSwitch' => 'setUnionMarketSwitch',
        'profileId' => 'setProfileId',
        'dynamicAdcreativeSpec' => 'setDynamicAdcreativeSpec',
        'videoEndPage' => 'setVideoEndPage',
        'barrageList' => 'setBarrageList',
        'dynamicCreativeGroupUsed' => 'setDynamicCreativeGroupUsed',
        'appGiftPackCode' => 'setAppGiftPackCode',
        'enableBreakthroughSiteset' => 'setEnableBreakthroughSiteset',
        'accountId' => 'setAccountId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dynamicCreativeName' => 'getDynamicCreativeName',
        'dynamicCreativeTemplateId' => 'getDynamicCreativeTemplateId',
        'dynamicCreativeElements' => 'getDynamicCreativeElements',
        'campaignType' => 'getCampaignType',
        'promotedObjectType' => 'getPromotedObjectType',
        'pageType' => 'getPageType',
        'automaticSiteEnabled' => 'getAutomaticSiteEnabled',
        'siteSet' => 'getSiteSet',
        'promotedObjectId' => 'getPromotedObjectId',
        'pageSpec' => 'getPageSpec',
        'deepLinkUrl' => 'getDeepLinkUrl',
        'impressionTrackingUrl' => 'getImpressionTrackingUrl',
        'clickTrackingUrl' => 'getClickTrackingUrl',
        'feedsVideoCommentSwitch' => 'getFeedsVideoCommentSwitch',
        'unionMarketSwitch' => 'getUnionMarketSwitch',
        'profileId' => 'getProfileId',
        'dynamicAdcreativeSpec' => 'getDynamicAdcreativeSpec',
        'videoEndPage' => 'getVideoEndPage',
        'barrageList' => 'getBarrageList',
        'dynamicCreativeGroupUsed' => 'getDynamicCreativeGroupUsed',
        'appGiftPackCode' => 'getAppGiftPackCode',
        'enableBreakthroughSiteset' => 'getEnableBreakthroughSiteset',
        'accountId' => 'getAccountId'
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
        $this->container['dynamicCreativeName'] = isset($data['dynamicCreativeName']) ? $data['dynamicCreativeName'] : null;
        $this->container['dynamicCreativeTemplateId'] = isset($data['dynamicCreativeTemplateId']) ? $data['dynamicCreativeTemplateId'] : null;
        $this->container['dynamicCreativeElements'] = isset($data['dynamicCreativeElements']) ? $data['dynamicCreativeElements'] : null;
        $this->container['campaignType'] = isset($data['campaignType']) ? $data['campaignType'] : null;
        $this->container['promotedObjectType'] = isset($data['promotedObjectType']) ? $data['promotedObjectType'] : null;
        $this->container['pageType'] = isset($data['pageType']) ? $data['pageType'] : null;
        $this->container['automaticSiteEnabled'] = isset($data['automaticSiteEnabled']) ? $data['automaticSiteEnabled'] : null;
        $this->container['siteSet'] = isset($data['siteSet']) ? $data['siteSet'] : null;
        $this->container['promotedObjectId'] = isset($data['promotedObjectId']) ? $data['promotedObjectId'] : null;
        $this->container['pageSpec'] = isset($data['pageSpec']) ? $data['pageSpec'] : null;
        $this->container['deepLinkUrl'] = isset($data['deepLinkUrl']) ? $data['deepLinkUrl'] : null;
        $this->container['impressionTrackingUrl'] = isset($data['impressionTrackingUrl']) ? $data['impressionTrackingUrl'] : null;
        $this->container['clickTrackingUrl'] = isset($data['clickTrackingUrl']) ? $data['clickTrackingUrl'] : null;
        $this->container['feedsVideoCommentSwitch'] = isset($data['feedsVideoCommentSwitch']) ? $data['feedsVideoCommentSwitch'] : null;
        $this->container['unionMarketSwitch'] = isset($data['unionMarketSwitch']) ? $data['unionMarketSwitch'] : null;
        $this->container['profileId'] = isset($data['profileId']) ? $data['profileId'] : null;
        $this->container['dynamicAdcreativeSpec'] = isset($data['dynamicAdcreativeSpec']) ? $data['dynamicAdcreativeSpec'] : null;
        $this->container['videoEndPage'] = isset($data['videoEndPage']) ? $data['videoEndPage'] : null;
        $this->container['barrageList'] = isset($data['barrageList']) ? $data['barrageList'] : null;
        $this->container['dynamicCreativeGroupUsed'] = isset($data['dynamicCreativeGroupUsed']) ? $data['dynamicCreativeGroupUsed'] : null;
        $this->container['appGiftPackCode'] = isset($data['appGiftPackCode']) ? $data['appGiftPackCode'] : null;
        $this->container['enableBreakthroughSiteset'] = isset($data['enableBreakthroughSiteset']) ? $data['enableBreakthroughSiteset'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
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
     * Gets dynamicCreativeName
     *
     * @return string|mixed
     */
    public function getDynamicCreativeName()
    {
        return $this->container['dynamicCreativeName'];
    }

    /**
     * Sets dynamicCreativeName
     *
     * @param string|mixed $dynamicCreativeName dynamicCreativeName
     *
     * @return $this
     */
    public function setDynamicCreativeName($dynamicCreativeName)
    {
        $this->container['dynamicCreativeName'] = $dynamicCreativeName;

        return $this;
    }

    /**
     * Gets dynamicCreativeTemplateId
     *
     * @return int|mixed
     */
    public function getDynamicCreativeTemplateId()
    {
        return $this->container['dynamicCreativeTemplateId'];
    }

    /**
     * Sets dynamicCreativeTemplateId
     *
     * @param int|mixed $dynamicCreativeTemplateId dynamicCreativeTemplateId
     *
     * @return $this
     */
    public function setDynamicCreativeTemplateId($dynamicCreativeTemplateId)
    {
        $this->container['dynamicCreativeTemplateId'] = $dynamicCreativeTemplateId;

        return $this;
    }

    /**
     * Gets dynamicCreativeElements
     *
     * @return \TencentAds\Model\DynamicCreativeElements|mixed
     */
    public function getDynamicCreativeElements()
    {
        return $this->container['dynamicCreativeElements'];
    }

    /**
     * Sets dynamicCreativeElements
     *
     * @param \TencentAds\Model\DynamicCreativeElements|mixed $dynamicCreativeElements dynamicCreativeElements
     *
     * @return $this
     */
    public function setDynamicCreativeElements($dynamicCreativeElements)
    {
        $this->container['dynamicCreativeElements'] = $dynamicCreativeElements;

        return $this;
    }

    /**
     * Gets campaignType
     *
     * @return \TencentAds\Model\CampaignType|mixed
     */
    public function getCampaignType()
    {
        return $this->container['campaignType'];
    }

    /**
     * Sets campaignType
     *
     * @param \TencentAds\Model\CampaignType|mixed $campaignType campaignType
     *
     * @return $this
     */
    public function setCampaignType($campaignType)
    {
        $this->container['campaignType'] = $campaignType;

        return $this;
    }

    /**
     * Gets promotedObjectType
     *
     * @return \TencentAds\Model\PromotedObjectType|mixed
     */
    public function getPromotedObjectType()
    {
        return $this->container['promotedObjectType'];
    }

    /**
     * Sets promotedObjectType
     *
     * @param \TencentAds\Model\PromotedObjectType|mixed $promotedObjectType promotedObjectType
     *
     * @return $this
     */
    public function setPromotedObjectType($promotedObjectType)
    {
        $this->container['promotedObjectType'] = $promotedObjectType;

        return $this;
    }

    /**
     * Gets pageType
     *
     * @return \TencentAds\Model\DestinationType|mixed
     */
    public function getPageType()
    {
        return $this->container['pageType'];
    }

    /**
     * Sets pageType
     *
     * @param \TencentAds\Model\DestinationType|mixed $pageType pageType
     *
     * @return $this
     */
    public function setPageType($pageType)
    {
        $this->container['pageType'] = $pageType;

        return $this;
    }

    /**
     * Gets automaticSiteEnabled
     *
     * @return bool|mixed
     */
    public function getAutomaticSiteEnabled()
    {
        return $this->container['automaticSiteEnabled'];
    }

    /**
     * Sets automaticSiteEnabled
     *
     * @param bool|mixed $automaticSiteEnabled automaticSiteEnabled
     *
     * @return $this
     */
    public function setAutomaticSiteEnabled($automaticSiteEnabled)
    {
        $this->container['automaticSiteEnabled'] = $automaticSiteEnabled;

        return $this;
    }

    /**
     * Gets siteSet
     *
     * @return string[]|mixed
     */
    public function getSiteSet()
    {
        return $this->container['siteSet'];
    }

    /**
     * Sets siteSet
     *
     * @param string[]|mixed $siteSet siteSet
     *
     * @return $this
     */
    public function setSiteSet($siteSet)
    {
        $this->container['siteSet'] = $siteSet;

        return $this;
    }

    /**
     * Gets promotedObjectId
     *
     * @return string|mixed
     */
    public function getPromotedObjectId()
    {
        return $this->container['promotedObjectId'];
    }

    /**
     * Sets promotedObjectId
     *
     * @param string|mixed $promotedObjectId promotedObjectId
     *
     * @return $this
     */
    public function setPromotedObjectId($promotedObjectId)
    {
        $this->container['promotedObjectId'] = $promotedObjectId;

        return $this;
    }

    /**
     * Gets pageSpec
     *
     * @return \TencentAds\Model\DynamicCreativePageSpec|mixed
     */
    public function getPageSpec()
    {
        return $this->container['pageSpec'];
    }

    /**
     * Sets pageSpec
     *
     * @param \TencentAds\Model\DynamicCreativePageSpec|mixed $pageSpec pageSpec
     *
     * @return $this
     */
    public function setPageSpec($pageSpec)
    {
        $this->container['pageSpec'] = $pageSpec;

        return $this;
    }

    /**
     * Gets deepLinkUrl
     *
     * @return string|mixed
     */
    public function getDeepLinkUrl()
    {
        return $this->container['deepLinkUrl'];
    }

    /**
     * Sets deepLinkUrl
     *
     * @param string|mixed $deepLinkUrl deepLinkUrl
     *
     * @return $this
     */
    public function setDeepLinkUrl($deepLinkUrl)
    {
        $this->container['deepLinkUrl'] = $deepLinkUrl;

        return $this;
    }

    /**
     * Gets impressionTrackingUrl
     *
     * @return string|mixed
     */
    public function getImpressionTrackingUrl()
    {
        return $this->container['impressionTrackingUrl'];
    }

    /**
     * Sets impressionTrackingUrl
     *
     * @param string|mixed $impressionTrackingUrl impressionTrackingUrl
     *
     * @return $this
     */
    public function setImpressionTrackingUrl($impressionTrackingUrl)
    {
        $this->container['impressionTrackingUrl'] = $impressionTrackingUrl;

        return $this;
    }

    /**
     * Gets clickTrackingUrl
     *
     * @return string|mixed
     */
    public function getClickTrackingUrl()
    {
        return $this->container['clickTrackingUrl'];
    }

    /**
     * Sets clickTrackingUrl
     *
     * @param string|mixed $clickTrackingUrl clickTrackingUrl
     *
     * @return $this
     */
    public function setClickTrackingUrl($clickTrackingUrl)
    {
        $this->container['clickTrackingUrl'] = $clickTrackingUrl;

        return $this;
    }

    /**
     * Gets feedsVideoCommentSwitch
     *
     * @return bool|mixed
     */
    public function getFeedsVideoCommentSwitch()
    {
        return $this->container['feedsVideoCommentSwitch'];
    }

    /**
     * Sets feedsVideoCommentSwitch
     *
     * @param bool|mixed $feedsVideoCommentSwitch feedsVideoCommentSwitch
     *
     * @return $this
     */
    public function setFeedsVideoCommentSwitch($feedsVideoCommentSwitch)
    {
        $this->container['feedsVideoCommentSwitch'] = $feedsVideoCommentSwitch;

        return $this;
    }

    /**
     * Gets unionMarketSwitch
     *
     * @return bool|mixed
     */
    public function getUnionMarketSwitch()
    {
        return $this->container['unionMarketSwitch'];
    }

    /**
     * Sets unionMarketSwitch
     *
     * @param bool|mixed $unionMarketSwitch unionMarketSwitch
     *
     * @return $this
     */
    public function setUnionMarketSwitch($unionMarketSwitch)
    {
        $this->container['unionMarketSwitch'] = $unionMarketSwitch;

        return $this;
    }

    /**
     * Gets profileId
     *
     * @return int|mixed
     */
    public function getProfileId()
    {
        return $this->container['profileId'];
    }

    /**
     * Sets profileId
     *
     * @param int|mixed $profileId profileId
     *
     * @return $this
     */
    public function setProfileId($profileId)
    {
        $this->container['profileId'] = $profileId;

        return $this;
    }

    /**
     * Gets dynamicAdcreativeSpec
     *
     * @return \TencentAds\Model\DynamicAdcreativeSpecForDc|mixed
     */
    public function getDynamicAdcreativeSpec()
    {
        return $this->container['dynamicAdcreativeSpec'];
    }

    /**
     * Sets dynamicAdcreativeSpec
     *
     * @param \TencentAds\Model\DynamicAdcreativeSpecForDc|mixed $dynamicAdcreativeSpec dynamicAdcreativeSpec
     *
     * @return $this
     */
    public function setDynamicAdcreativeSpec($dynamicAdcreativeSpec)
    {
        $this->container['dynamicAdcreativeSpec'] = $dynamicAdcreativeSpec;

        return $this;
    }

    /**
     * Gets videoEndPage
     *
     * @return \TencentAds\Model\VideoEndPageSpec|mixed
     */
    public function getVideoEndPage()
    {
        return $this->container['videoEndPage'];
    }

    /**
     * Sets videoEndPage
     *
     * @param \TencentAds\Model\VideoEndPageSpec|mixed $videoEndPage videoEndPage
     *
     * @return $this
     */
    public function setVideoEndPage($videoEndPage)
    {
        $this->container['videoEndPage'] = $videoEndPage;

        return $this;
    }

    /**
     * Gets barrageList
     *
     * @return \TencentAds\Model\BarrageListCreateStruct[]|mixed
     */
    public function getBarrageList()
    {
        return $this->container['barrageList'];
    }

    /**
     * Sets barrageList
     *
     * @param \TencentAds\Model\BarrageListCreateStruct[]|mixed $barrageList barrageList
     *
     * @return $this
     */
    public function setBarrageList($barrageList)
    {
        $this->container['barrageList'] = $barrageList;

        return $this;
    }

    /**
     * Gets dynamicCreativeGroupUsed
     *
     * @return \TencentAds\Model\DynamicCreativeGroupUsed|mixed
     */
    public function getDynamicCreativeGroupUsed()
    {
        return $this->container['dynamicCreativeGroupUsed'];
    }

    /**
     * Sets dynamicCreativeGroupUsed
     *
     * @param \TencentAds\Model\DynamicCreativeGroupUsed|mixed $dynamicCreativeGroupUsed dynamicCreativeGroupUsed
     *
     * @return $this
     */
    public function setDynamicCreativeGroupUsed($dynamicCreativeGroupUsed)
    {
        $this->container['dynamicCreativeGroupUsed'] = $dynamicCreativeGroupUsed;

        return $this;
    }

    /**
     * Gets appGiftPackCode
     *
     * @return \TencentAds\Model\AppGiftPackCode|mixed
     */
    public function getAppGiftPackCode()
    {
        return $this->container['appGiftPackCode'];
    }

    /**
     * Sets appGiftPackCode
     *
     * @param \TencentAds\Model\AppGiftPackCode|mixed $appGiftPackCode appGiftPackCode
     *
     * @return $this
     */
    public function setAppGiftPackCode($appGiftPackCode)
    {
        $this->container['appGiftPackCode'] = $appGiftPackCode;

        return $this;
    }

    /**
     * Gets enableBreakthroughSiteset
     *
     * @return bool|mixed
     */
    public function getEnableBreakthroughSiteset()
    {
        return $this->container['enableBreakthroughSiteset'];
    }

    /**
     * Sets enableBreakthroughSiteset
     *
     * @param bool|mixed $enableBreakthroughSiteset enableBreakthroughSiteset
     *
     * @return $this
     */
    public function setEnableBreakthroughSiteset($enableBreakthroughSiteset)
    {
        $this->container['enableBreakthroughSiteset'] = $enableBreakthroughSiteset;

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


