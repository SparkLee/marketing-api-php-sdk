<?php
/**
 * AdcreativesGetListStruct
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
 * AdcreativesGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdcreativesGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'adcreatives_get_list_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'campaignId' => 'int',
        'adcreativeId' => 'int',
        'outerAdcreativeId' => 'int',
        'adcreativeName' => 'string',
        'adcreativeTemplateId' => 'int',
        'adcreativeElements' => '\TencentAds\Model\AdCreativeAdcreativeCreativeElementsReadMp',
        'pageType' => '\TencentAds\Model\AdCreativePageTypeRead',
        'pageSpec' => '\TencentAds\Model\AdCreativePageSpec',
        'qqMiniGameTrackingQueryString' => 'string',
        'deepLinkUrl' => 'string',
        'universalLinkUrl' => 'string',
        'siteSet' => 'string[]',
        'automaticSiteEnabled' => 'bool',
        'promotedObjectType' => '\TencentAds\Model\AdCreativePromotedObjectType',
        'promotedObjectId' => 'string',
        'profileId' => 'int',
        'createdTime' => 'int',
        'lastModifiedTime' => 'int',
        'shareContentSpec' => '\TencentAds\Model\AdCreativeShareContentSpec',
        'dynamicAdcreativeSpec' => '\TencentAds\Model\AdCreativeDynamicAdcreativeSpec',
        'isDeleted' => 'bool',
        'isDynamicCreative' => 'bool',
        'multiShareOptimizationEnabled' => 'bool',
        'creativeExtSpec' => '\TencentAds\Model\AdCreativeCreativeExtSpec',
        'contractCreativeTemplateId' => 'int',
        'prepareData' => '\TencentAds\Model\AdCreativeAdcreativePrepareData',
        'enableContinousPlayback' => 'bool',
        'componentId' => 'int',
        'onlineEnabled' => 'bool',
        'revisedAdcreativeSpec' => '\TencentAds\Model\AdCreativeRevisedAdcreativeSpec',
        'category' => 'int[]',
        'label' => 'string[]',
        'unionMarketSwitch' => 'bool',
        'playablePageMaterialId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'campaignId' => 'int64',
        'adcreativeId' => 'int64',
        'outerAdcreativeId' => 'int64',
        'adcreativeName' => null,
        'adcreativeTemplateId' => 'int64',
        'adcreativeElements' => null,
        'pageType' => null,
        'pageSpec' => null,
        'qqMiniGameTrackingQueryString' => null,
        'deepLinkUrl' => null,
        'universalLinkUrl' => null,
        'siteSet' => null,
        'automaticSiteEnabled' => null,
        'promotedObjectType' => null,
        'promotedObjectId' => null,
        'profileId' => 'int64',
        'createdTime' => 'int64',
        'lastModifiedTime' => 'int64',
        'shareContentSpec' => null,
        'dynamicAdcreativeSpec' => null,
        'isDeleted' => null,
        'isDynamicCreative' => null,
        'multiShareOptimizationEnabled' => null,
        'creativeExtSpec' => null,
        'contractCreativeTemplateId' => 'int64',
        'prepareData' => null,
        'enableContinousPlayback' => null,
        'componentId' => 'int64',
        'onlineEnabled' => null,
        'revisedAdcreativeSpec' => null,
        'category' => 'int64',
        'label' => null,
        'unionMarketSwitch' => null,
        'playablePageMaterialId' => null
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
        'campaignId' => 'campaign_id',
        'adcreativeId' => 'adcreative_id',
        'outerAdcreativeId' => 'outer_adcreative_id',
        'adcreativeName' => 'adcreative_name',
        'adcreativeTemplateId' => 'adcreative_template_id',
        'adcreativeElements' => 'adcreative_elements',
        'pageType' => 'page_type',
        'pageSpec' => 'page_spec',
        'qqMiniGameTrackingQueryString' => 'qq_mini_game_tracking_query_string',
        'deepLinkUrl' => 'deep_link_url',
        'universalLinkUrl' => 'universal_link_url',
        'siteSet' => 'site_set',
        'automaticSiteEnabled' => 'automatic_site_enabled',
        'promotedObjectType' => 'promoted_object_type',
        'promotedObjectId' => 'promoted_object_id',
        'profileId' => 'profile_id',
        'createdTime' => 'created_time',
        'lastModifiedTime' => 'last_modified_time',
        'shareContentSpec' => 'share_content_spec',
        'dynamicAdcreativeSpec' => 'dynamic_adcreative_spec',
        'isDeleted' => 'is_deleted',
        'isDynamicCreative' => 'is_dynamic_creative',
        'multiShareOptimizationEnabled' => 'multi_share_optimization_enabled',
        'creativeExtSpec' => 'creative_ext_spec',
        'contractCreativeTemplateId' => 'contract_creative_template_id',
        'prepareData' => 'prepare_data',
        'enableContinousPlayback' => 'enable_continous_playback',
        'componentId' => 'component_id',
        'onlineEnabled' => 'online_enabled',
        'revisedAdcreativeSpec' => 'revised_adcreative_spec',
        'category' => 'category',
        'label' => 'label',
        'unionMarketSwitch' => 'union_market_switch',
        'playablePageMaterialId' => 'playable_page_material_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campaignId' => 'setCampaignId',
        'adcreativeId' => 'setAdcreativeId',
        'outerAdcreativeId' => 'setOuterAdcreativeId',
        'adcreativeName' => 'setAdcreativeName',
        'adcreativeTemplateId' => 'setAdcreativeTemplateId',
        'adcreativeElements' => 'setAdcreativeElements',
        'pageType' => 'setPageType',
        'pageSpec' => 'setPageSpec',
        'qqMiniGameTrackingQueryString' => 'setQqMiniGameTrackingQueryString',
        'deepLinkUrl' => 'setDeepLinkUrl',
        'universalLinkUrl' => 'setUniversalLinkUrl',
        'siteSet' => 'setSiteSet',
        'automaticSiteEnabled' => 'setAutomaticSiteEnabled',
        'promotedObjectType' => 'setPromotedObjectType',
        'promotedObjectId' => 'setPromotedObjectId',
        'profileId' => 'setProfileId',
        'createdTime' => 'setCreatedTime',
        'lastModifiedTime' => 'setLastModifiedTime',
        'shareContentSpec' => 'setShareContentSpec',
        'dynamicAdcreativeSpec' => 'setDynamicAdcreativeSpec',
        'isDeleted' => 'setIsDeleted',
        'isDynamicCreative' => 'setIsDynamicCreative',
        'multiShareOptimizationEnabled' => 'setMultiShareOptimizationEnabled',
        'creativeExtSpec' => 'setCreativeExtSpec',
        'contractCreativeTemplateId' => 'setContractCreativeTemplateId',
        'prepareData' => 'setPrepareData',
        'enableContinousPlayback' => 'setEnableContinousPlayback',
        'componentId' => 'setComponentId',
        'onlineEnabled' => 'setOnlineEnabled',
        'revisedAdcreativeSpec' => 'setRevisedAdcreativeSpec',
        'category' => 'setCategory',
        'label' => 'setLabel',
        'unionMarketSwitch' => 'setUnionMarketSwitch',
        'playablePageMaterialId' => 'setPlayablePageMaterialId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campaignId' => 'getCampaignId',
        'adcreativeId' => 'getAdcreativeId',
        'outerAdcreativeId' => 'getOuterAdcreativeId',
        'adcreativeName' => 'getAdcreativeName',
        'adcreativeTemplateId' => 'getAdcreativeTemplateId',
        'adcreativeElements' => 'getAdcreativeElements',
        'pageType' => 'getPageType',
        'pageSpec' => 'getPageSpec',
        'qqMiniGameTrackingQueryString' => 'getQqMiniGameTrackingQueryString',
        'deepLinkUrl' => 'getDeepLinkUrl',
        'universalLinkUrl' => 'getUniversalLinkUrl',
        'siteSet' => 'getSiteSet',
        'automaticSiteEnabled' => 'getAutomaticSiteEnabled',
        'promotedObjectType' => 'getPromotedObjectType',
        'promotedObjectId' => 'getPromotedObjectId',
        'profileId' => 'getProfileId',
        'createdTime' => 'getCreatedTime',
        'lastModifiedTime' => 'getLastModifiedTime',
        'shareContentSpec' => 'getShareContentSpec',
        'dynamicAdcreativeSpec' => 'getDynamicAdcreativeSpec',
        'isDeleted' => 'getIsDeleted',
        'isDynamicCreative' => 'getIsDynamicCreative',
        'multiShareOptimizationEnabled' => 'getMultiShareOptimizationEnabled',
        'creativeExtSpec' => 'getCreativeExtSpec',
        'contractCreativeTemplateId' => 'getContractCreativeTemplateId',
        'prepareData' => 'getPrepareData',
        'enableContinousPlayback' => 'getEnableContinousPlayback',
        'componentId' => 'getComponentId',
        'onlineEnabled' => 'getOnlineEnabled',
        'revisedAdcreativeSpec' => 'getRevisedAdcreativeSpec',
        'category' => 'getCategory',
        'label' => 'getLabel',
        'unionMarketSwitch' => 'getUnionMarketSwitch',
        'playablePageMaterialId' => 'getPlayablePageMaterialId'
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
        $this->container['campaignId'] = isset($data['campaignId']) ? $data['campaignId'] : null;
        $this->container['adcreativeId'] = isset($data['adcreativeId']) ? $data['adcreativeId'] : null;
        $this->container['outerAdcreativeId'] = isset($data['outerAdcreativeId']) ? $data['outerAdcreativeId'] : null;
        $this->container['adcreativeName'] = isset($data['adcreativeName']) ? $data['adcreativeName'] : null;
        $this->container['adcreativeTemplateId'] = isset($data['adcreativeTemplateId']) ? $data['adcreativeTemplateId'] : null;
        $this->container['adcreativeElements'] = isset($data['adcreativeElements']) ? $data['adcreativeElements'] : null;
        $this->container['pageType'] = isset($data['pageType']) ? $data['pageType'] : null;
        $this->container['pageSpec'] = isset($data['pageSpec']) ? $data['pageSpec'] : null;
        $this->container['qqMiniGameTrackingQueryString'] = isset($data['qqMiniGameTrackingQueryString']) ? $data['qqMiniGameTrackingQueryString'] : null;
        $this->container['deepLinkUrl'] = isset($data['deepLinkUrl']) ? $data['deepLinkUrl'] : null;
        $this->container['universalLinkUrl'] = isset($data['universalLinkUrl']) ? $data['universalLinkUrl'] : null;
        $this->container['siteSet'] = isset($data['siteSet']) ? $data['siteSet'] : null;
        $this->container['automaticSiteEnabled'] = isset($data['automaticSiteEnabled']) ? $data['automaticSiteEnabled'] : null;
        $this->container['promotedObjectType'] = isset($data['promotedObjectType']) ? $data['promotedObjectType'] : null;
        $this->container['promotedObjectId'] = isset($data['promotedObjectId']) ? $data['promotedObjectId'] : null;
        $this->container['profileId'] = isset($data['profileId']) ? $data['profileId'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['lastModifiedTime'] = isset($data['lastModifiedTime']) ? $data['lastModifiedTime'] : null;
        $this->container['shareContentSpec'] = isset($data['shareContentSpec']) ? $data['shareContentSpec'] : null;
        $this->container['dynamicAdcreativeSpec'] = isset($data['dynamicAdcreativeSpec']) ? $data['dynamicAdcreativeSpec'] : null;
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
        $this->container['isDynamicCreative'] = isset($data['isDynamicCreative']) ? $data['isDynamicCreative'] : null;
        $this->container['multiShareOptimizationEnabled'] = isset($data['multiShareOptimizationEnabled']) ? $data['multiShareOptimizationEnabled'] : null;
        $this->container['creativeExtSpec'] = isset($data['creativeExtSpec']) ? $data['creativeExtSpec'] : null;
        $this->container['contractCreativeTemplateId'] = isset($data['contractCreativeTemplateId']) ? $data['contractCreativeTemplateId'] : null;
        $this->container['prepareData'] = isset($data['prepareData']) ? $data['prepareData'] : null;
        $this->container['enableContinousPlayback'] = isset($data['enableContinousPlayback']) ? $data['enableContinousPlayback'] : null;
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['onlineEnabled'] = isset($data['onlineEnabled']) ? $data['onlineEnabled'] : null;
        $this->container['revisedAdcreativeSpec'] = isset($data['revisedAdcreativeSpec']) ? $data['revisedAdcreativeSpec'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['unionMarketSwitch'] = isset($data['unionMarketSwitch']) ? $data['unionMarketSwitch'] : null;
        $this->container['playablePageMaterialId'] = isset($data['playablePageMaterialId']) ? $data['playablePageMaterialId'] : null;
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
     * Gets campaignId
     *
     * @return int
     */
    public function getCampaignId()
    {
        return $this->container['campaignId'];
    }

    /**
     * Sets campaignId
     *
     * @param int $campaignId campaignId
     *
     * @return $this
     */
    public function setCampaignId($campaignId)
    {
        $this->container['campaignId'] = $campaignId;

        return $this;
    }

    /**
     * Gets adcreativeId
     *
     * @return int
     */
    public function getAdcreativeId()
    {
        return $this->container['adcreativeId'];
    }

    /**
     * Sets adcreativeId
     *
     * @param int $adcreativeId adcreativeId
     *
     * @return $this
     */
    public function setAdcreativeId($adcreativeId)
    {
        $this->container['adcreativeId'] = $adcreativeId;

        return $this;
    }

    /**
     * Gets outerAdcreativeId
     *
     * @return int
     */
    public function getOuterAdcreativeId()
    {
        return $this->container['outerAdcreativeId'];
    }

    /**
     * Sets outerAdcreativeId
     *
     * @param int $outerAdcreativeId outerAdcreativeId
     *
     * @return $this
     */
    public function setOuterAdcreativeId($outerAdcreativeId)
    {
        $this->container['outerAdcreativeId'] = $outerAdcreativeId;

        return $this;
    }

    /**
     * Gets adcreativeName
     *
     * @return string
     */
    public function getAdcreativeName()
    {
        return $this->container['adcreativeName'];
    }

    /**
     * Sets adcreativeName
     *
     * @param string $adcreativeName adcreativeName
     *
     * @return $this
     */
    public function setAdcreativeName($adcreativeName)
    {
        $this->container['adcreativeName'] = $adcreativeName;

        return $this;
    }

    /**
     * Gets adcreativeTemplateId
     *
     * @return int
     */
    public function getAdcreativeTemplateId()
    {
        return $this->container['adcreativeTemplateId'];
    }

    /**
     * Sets adcreativeTemplateId
     *
     * @param int $adcreativeTemplateId adcreativeTemplateId
     *
     * @return $this
     */
    public function setAdcreativeTemplateId($adcreativeTemplateId)
    {
        $this->container['adcreativeTemplateId'] = $adcreativeTemplateId;

        return $this;
    }

    /**
     * Gets adcreativeElements
     *
     * @return \TencentAds\Model\AdCreativeAdcreativeCreativeElementsReadMp
     */
    public function getAdcreativeElements()
    {
        return $this->container['adcreativeElements'];
    }

    /**
     * Sets adcreativeElements
     *
     * @param \TencentAds\Model\AdCreativeAdcreativeCreativeElementsReadMp $adcreativeElements adcreativeElements
     *
     * @return $this
     */
    public function setAdcreativeElements($adcreativeElements)
    {
        $this->container['adcreativeElements'] = $adcreativeElements;

        return $this;
    }

    /**
     * Gets pageType
     *
     * @return \TencentAds\Model\AdCreativePageTypeRead
     */
    public function getPageType()
    {
        return $this->container['pageType'];
    }

    /**
     * Sets pageType
     *
     * @param \TencentAds\Model\AdCreativePageTypeRead $pageType pageType
     *
     * @return $this
     */
    public function setPageType($pageType)
    {
        $this->container['pageType'] = $pageType;

        return $this;
    }

    /**
     * Gets pageSpec
     *
     * @return \TencentAds\Model\AdCreativePageSpec
     */
    public function getPageSpec()
    {
        return $this->container['pageSpec'];
    }

    /**
     * Sets pageSpec
     *
     * @param \TencentAds\Model\AdCreativePageSpec $pageSpec pageSpec
     *
     * @return $this
     */
    public function setPageSpec($pageSpec)
    {
        $this->container['pageSpec'] = $pageSpec;

        return $this;
    }

    /**
     * Gets qqMiniGameTrackingQueryString
     *
     * @return string
     */
    public function getQqMiniGameTrackingQueryString()
    {
        return $this->container['qqMiniGameTrackingQueryString'];
    }

    /**
     * Sets qqMiniGameTrackingQueryString
     *
     * @param string $qqMiniGameTrackingQueryString qqMiniGameTrackingQueryString
     *
     * @return $this
     */
    public function setQqMiniGameTrackingQueryString($qqMiniGameTrackingQueryString)
    {
        $this->container['qqMiniGameTrackingQueryString'] = $qqMiniGameTrackingQueryString;

        return $this;
    }

    /**
     * Gets deepLinkUrl
     *
     * @return string
     */
    public function getDeepLinkUrl()
    {
        return $this->container['deepLinkUrl'];
    }

    /**
     * Sets deepLinkUrl
     *
     * @param string $deepLinkUrl deepLinkUrl
     *
     * @return $this
     */
    public function setDeepLinkUrl($deepLinkUrl)
    {
        $this->container['deepLinkUrl'] = $deepLinkUrl;

        return $this;
    }

    /**
     * Gets universalLinkUrl
     *
     * @return string
     */
    public function getUniversalLinkUrl()
    {
        return $this->container['universalLinkUrl'];
    }

    /**
     * Sets universalLinkUrl
     *
     * @param string $universalLinkUrl universalLinkUrl
     *
     * @return $this
     */
    public function setUniversalLinkUrl($universalLinkUrl)
    {
        $this->container['universalLinkUrl'] = $universalLinkUrl;

        return $this;
    }

    /**
     * Gets siteSet
     *
     * @return string[]
     */
    public function getSiteSet()
    {
        return $this->container['siteSet'];
    }

    /**
     * Sets siteSet
     *
     * @param string[] $siteSet siteSet
     *
     * @return $this
     */
    public function setSiteSet($siteSet)
    {
        $this->container['siteSet'] = $siteSet;

        return $this;
    }

    /**
     * Gets automaticSiteEnabled
     *
     * @return bool
     */
    public function getAutomaticSiteEnabled()
    {
        return $this->container['automaticSiteEnabled'];
    }

    /**
     * Sets automaticSiteEnabled
     *
     * @param bool $automaticSiteEnabled automaticSiteEnabled
     *
     * @return $this
     */
    public function setAutomaticSiteEnabled($automaticSiteEnabled)
    {
        $this->container['automaticSiteEnabled'] = $automaticSiteEnabled;

        return $this;
    }

    /**
     * Gets promotedObjectType
     *
     * @return \TencentAds\Model\AdCreativePromotedObjectType
     */
    public function getPromotedObjectType()
    {
        return $this->container['promotedObjectType'];
    }

    /**
     * Sets promotedObjectType
     *
     * @param \TencentAds\Model\AdCreativePromotedObjectType $promotedObjectType promotedObjectType
     *
     * @return $this
     */
    public function setPromotedObjectType($promotedObjectType)
    {
        $this->container['promotedObjectType'] = $promotedObjectType;

        return $this;
    }

    /**
     * Gets promotedObjectId
     *
     * @return string
     */
    public function getPromotedObjectId()
    {
        return $this->container['promotedObjectId'];
    }

    /**
     * Sets promotedObjectId
     *
     * @param string $promotedObjectId promotedObjectId
     *
     * @return $this
     */
    public function setPromotedObjectId($promotedObjectId)
    {
        $this->container['promotedObjectId'] = $promotedObjectId;

        return $this;
    }

    /**
     * Gets profileId
     *
     * @return int
     */
    public function getProfileId()
    {
        return $this->container['profileId'];
    }

    /**
     * Sets profileId
     *
     * @param int $profileId profileId
     *
     * @return $this
     */
    public function setProfileId($profileId)
    {
        $this->container['profileId'] = $profileId;

        return $this;
    }

    /**
     * Gets createdTime
     *
     * @return int
     */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
     * Sets createdTime
     *
     * @param int $createdTime createdTime
     *
     * @return $this
     */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;

        return $this;
    }

    /**
     * Gets lastModifiedTime
     *
     * @return int
     */
    public function getLastModifiedTime()
    {
        return $this->container['lastModifiedTime'];
    }

    /**
     * Sets lastModifiedTime
     *
     * @param int $lastModifiedTime lastModifiedTime
     *
     * @return $this
     */
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->container['lastModifiedTime'] = $lastModifiedTime;

        return $this;
    }

    /**
     * Gets shareContentSpec
     *
     * @return \TencentAds\Model\AdCreativeShareContentSpec
     */
    public function getShareContentSpec()
    {
        return $this->container['shareContentSpec'];
    }

    /**
     * Sets shareContentSpec
     *
     * @param \TencentAds\Model\AdCreativeShareContentSpec $shareContentSpec shareContentSpec
     *
     * @return $this
     */
    public function setShareContentSpec($shareContentSpec)
    {
        $this->container['shareContentSpec'] = $shareContentSpec;

        return $this;
    }

    /**
     * Gets dynamicAdcreativeSpec
     *
     * @return \TencentAds\Model\AdCreativeDynamicAdcreativeSpec
     */
    public function getDynamicAdcreativeSpec()
    {
        return $this->container['dynamicAdcreativeSpec'];
    }

    /**
     * Sets dynamicAdcreativeSpec
     *
     * @param \TencentAds\Model\AdCreativeDynamicAdcreativeSpec $dynamicAdcreativeSpec dynamicAdcreativeSpec
     *
     * @return $this
     */
    public function setDynamicAdcreativeSpec($dynamicAdcreativeSpec)
    {
        $this->container['dynamicAdcreativeSpec'] = $dynamicAdcreativeSpec;

        return $this;
    }

    /**
     * Gets isDeleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->container['isDeleted'];
    }

    /**
     * Sets isDeleted
     *
     * @param bool $isDeleted isDeleted
     *
     * @return $this
     */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;

        return $this;
    }

    /**
     * Gets isDynamicCreative
     *
     * @return bool
     */
    public function getIsDynamicCreative()
    {
        return $this->container['isDynamicCreative'];
    }

    /**
     * Sets isDynamicCreative
     *
     * @param bool $isDynamicCreative isDynamicCreative
     *
     * @return $this
     */
    public function setIsDynamicCreative($isDynamicCreative)
    {
        $this->container['isDynamicCreative'] = $isDynamicCreative;

        return $this;
    }

    /**
     * Gets multiShareOptimizationEnabled
     *
     * @return bool
     */
    public function getMultiShareOptimizationEnabled()
    {
        return $this->container['multiShareOptimizationEnabled'];
    }

    /**
     * Sets multiShareOptimizationEnabled
     *
     * @param bool $multiShareOptimizationEnabled multiShareOptimizationEnabled
     *
     * @return $this
     */
    public function setMultiShareOptimizationEnabled($multiShareOptimizationEnabled)
    {
        $this->container['multiShareOptimizationEnabled'] = $multiShareOptimizationEnabled;

        return $this;
    }

    /**
     * Gets creativeExtSpec
     *
     * @return \TencentAds\Model\AdCreativeCreativeExtSpec
     */
    public function getCreativeExtSpec()
    {
        return $this->container['creativeExtSpec'];
    }

    /**
     * Sets creativeExtSpec
     *
     * @param \TencentAds\Model\AdCreativeCreativeExtSpec $creativeExtSpec creativeExtSpec
     *
     * @return $this
     */
    public function setCreativeExtSpec($creativeExtSpec)
    {
        $this->container['creativeExtSpec'] = $creativeExtSpec;

        return $this;
    }

    /**
     * Gets contractCreativeTemplateId
     *
     * @return int
     */
    public function getContractCreativeTemplateId()
    {
        return $this->container['contractCreativeTemplateId'];
    }

    /**
     * Sets contractCreativeTemplateId
     *
     * @param int $contractCreativeTemplateId contractCreativeTemplateId
     *
     * @return $this
     */
    public function setContractCreativeTemplateId($contractCreativeTemplateId)
    {
        $this->container['contractCreativeTemplateId'] = $contractCreativeTemplateId;

        return $this;
    }

    /**
     * Gets prepareData
     *
     * @return \TencentAds\Model\AdCreativeAdcreativePrepareData
     */
    public function getPrepareData()
    {
        return $this->container['prepareData'];
    }

    /**
     * Sets prepareData
     *
     * @param \TencentAds\Model\AdCreativeAdcreativePrepareData $prepareData prepareData
     *
     * @return $this
     */
    public function setPrepareData($prepareData)
    {
        $this->container['prepareData'] = $prepareData;

        return $this;
    }

    /**
     * Gets enableContinousPlayback
     *
     * @return bool
     */
    public function getEnableContinousPlayback()
    {
        return $this->container['enableContinousPlayback'];
    }

    /**
     * Sets enableContinousPlayback
     *
     * @param bool $enableContinousPlayback enableContinousPlayback
     *
     * @return $this
     */
    public function setEnableContinousPlayback($enableContinousPlayback)
    {
        $this->container['enableContinousPlayback'] = $enableContinousPlayback;

        return $this;
    }

    /**
     * Gets componentId
     *
     * @return int
     */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
     * Sets componentId
     *
     * @param int $componentId componentId
     *
     * @return $this
     */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;

        return $this;
    }

    /**
     * Gets onlineEnabled
     *
     * @return bool
     */
    public function getOnlineEnabled()
    {
        return $this->container['onlineEnabled'];
    }

    /**
     * Sets onlineEnabled
     *
     * @param bool $onlineEnabled onlineEnabled
     *
     * @return $this
     */
    public function setOnlineEnabled($onlineEnabled)
    {
        $this->container['onlineEnabled'] = $onlineEnabled;

        return $this;
    }

    /**
     * Gets revisedAdcreativeSpec
     *
     * @return \TencentAds\Model\AdCreativeRevisedAdcreativeSpec
     */
    public function getRevisedAdcreativeSpec()
    {
        return $this->container['revisedAdcreativeSpec'];
    }

    /**
     * Sets revisedAdcreativeSpec
     *
     * @param \TencentAds\Model\AdCreativeRevisedAdcreativeSpec $revisedAdcreativeSpec revisedAdcreativeSpec
     *
     * @return $this
     */
    public function setRevisedAdcreativeSpec($revisedAdcreativeSpec)
    {
        $this->container['revisedAdcreativeSpec'] = $revisedAdcreativeSpec;

        return $this;
    }

    /**
     * Gets category
     *
     * @return int[]
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param int[] $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string[]
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string[] $label label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets unionMarketSwitch
     *
     * @return bool
     */
    public function getUnionMarketSwitch()
    {
        return $this->container['unionMarketSwitch'];
    }

    /**
     * Sets unionMarketSwitch
     *
     * @param bool $unionMarketSwitch unionMarketSwitch
     *
     * @return $this
     */
    public function setUnionMarketSwitch($unionMarketSwitch)
    {
        $this->container['unionMarketSwitch'] = $unionMarketSwitch;

        return $this;
    }

    /**
     * Gets playablePageMaterialId
     *
     * @return string
     */
    public function getPlayablePageMaterialId()
    {
        return $this->container['playablePageMaterialId'];
    }

    /**
     * Sets playablePageMaterialId
     *
     * @param string $playablePageMaterialId playablePageMaterialId
     *
     * @return $this
     */
    public function setPlayablePageMaterialId($playablePageMaterialId)
    {
        $this->container['playablePageMaterialId'] = $playablePageMaterialId;

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


