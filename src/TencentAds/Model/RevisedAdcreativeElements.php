<?php
/**
 * RevisedAdcreativeElements
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
 * RevisedAdcreativeElements Class Doc Comment
 *
 * @category Class
 * @description 修改后的创意元素，填写要求同adcreative_elements，当且仅当 online_enabled &#x3D; true 时，此字段允许写入
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RevisedAdcreativeElements implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'revised_adcreative_elements';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'image' => 'string',
        'image2' => 'string',
        'image3' => 'string',
        'title' => 'string',
        'description' => 'string',
        'corporate' => '\TencentAds\Model\AdcreativeCorporate',
        'video' => 'string',
        'deepLinkType' => 'string',
        'linkNameType' => '\TencentAds\Model\LinkNameType',
        'imageList' => 'string[]',
        'elementStory' => '\TencentAds\Model\AdcreativeElementStoryArrayItem[]',
        'url' => 'string',
        'buttonText' => 'string',
        'bottomText' => 'string',
        'excitationText' => 'string',
        'countdownBegin' => 'int',
        'countdown' => 'int',
        'countdownPrice' => 'string',
        'countdownTimeType' => '\TencentAds\Model\AdCreativeCountdownTimeType',
        'miniProgramId' => 'string',
        'miniProgramPath' => 'string',
        'label' => '\TencentAds\Model\CreativeLabel[]',
        'productTags' => 'string[]',
        'logoDescription' => 'string',
        'logo' => 'string',
        'leftBottomTxt' => 'string',
        'animationEffect' => 'string',
        'phone' => 'string',
        'shortVideoStruct' => '\TencentAds\Model\ShortVideoStruct',
        'longVideoStruct' => '\TencentAds\Model\LongVideoStruct',
        'bannerContent' => '\TencentAds\Model\AdcreativeBannerContent',
        'cardContent' => '\TencentAds\Model\AdcreativeCardContent',
        'videoPopupUrl' => 'string',
        'videoPopupButton' => '\TencentAds\Model\AdcreativeVideoPopupButton',
        'buttonUrl' => 'string',
        'brand' => '\TencentAds\Model\AdCreativeBrand',
        'caption' => 'string',
        'labelledImg' => '\TencentAds\Model\AdcreativeLabelledImg',
        'fullScreenImage' => 'string',
        'zipUrl' => 'string',
        'endPage' => '\TencentAds\Model\AdCreativeEndPage',
        'shopImage' => 'string',
        'headLine' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'image' => null,
        'image2' => null,
        'image3' => null,
        'title' => null,
        'description' => null,
        'corporate' => null,
        'video' => null,
        'deepLinkType' => null,
        'linkNameType' => null,
        'imageList' => null,
        'elementStory' => null,
        'url' => null,
        'buttonText' => null,
        'bottomText' => null,
        'excitationText' => null,
        'countdownBegin' => 'int64',
        'countdown' => 'int64',
        'countdownPrice' => null,
        'countdownTimeType' => null,
        'miniProgramId' => null,
        'miniProgramPath' => null,
        'label' => null,
        'productTags' => null,
        'logoDescription' => null,
        'logo' => null,
        'leftBottomTxt' => null,
        'animationEffect' => null,
        'phone' => null,
        'shortVideoStruct' => null,
        'longVideoStruct' => null,
        'bannerContent' => null,
        'cardContent' => null,
        'videoPopupUrl' => null,
        'videoPopupButton' => null,
        'buttonUrl' => null,
        'brand' => null,
        'caption' => null,
        'labelledImg' => null,
        'fullScreenImage' => null,
        'zipUrl' => null,
        'endPage' => null,
        'shopImage' => null,
        'headLine' => null
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
        'image' => 'image',
        'image2' => 'image2',
        'image3' => 'image3',
        'title' => 'title',
        'description' => 'description',
        'corporate' => 'corporate',
        'video' => 'video',
        'deepLinkType' => 'deep_link_type',
        'linkNameType' => 'link_name_type',
        'imageList' => 'image_list',
        'elementStory' => 'element_story',
        'url' => 'url',
        'buttonText' => 'button_text',
        'bottomText' => 'bottom_text',
        'excitationText' => 'excitation_text',
        'countdownBegin' => 'countdown_begin',
        'countdown' => 'countdown',
        'countdownPrice' => 'countdown_price',
        'countdownTimeType' => 'countdown_time_type',
        'miniProgramId' => 'mini_program_id',
        'miniProgramPath' => 'mini_program_path',
        'label' => 'label',
        'productTags' => 'product_tags',
        'logoDescription' => 'logo_description',
        'logo' => 'logo',
        'leftBottomTxt' => 'left_bottom_txt',
        'animationEffect' => 'animation_effect',
        'phone' => 'phone',
        'shortVideoStruct' => 'short_video_struct',
        'longVideoStruct' => 'long_video_struct',
        'bannerContent' => 'banner_content',
        'cardContent' => 'card_content',
        'videoPopupUrl' => 'video_popup_url',
        'videoPopupButton' => 'video_popup_button',
        'buttonUrl' => 'button_url',
        'brand' => 'brand',
        'caption' => 'caption',
        'labelledImg' => 'labelled_img',
        'fullScreenImage' => 'full_screen_image',
        'zipUrl' => 'zip_url',
        'endPage' => 'end_page',
        'shopImage' => 'shop_image',
        'headLine' => 'head_line'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'image' => 'setImage',
        'image2' => 'setImage2',
        'image3' => 'setImage3',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'corporate' => 'setCorporate',
        'video' => 'setVideo',
        'deepLinkType' => 'setDeepLinkType',
        'linkNameType' => 'setLinkNameType',
        'imageList' => 'setImageList',
        'elementStory' => 'setElementStory',
        'url' => 'setUrl',
        'buttonText' => 'setButtonText',
        'bottomText' => 'setBottomText',
        'excitationText' => 'setExcitationText',
        'countdownBegin' => 'setCountdownBegin',
        'countdown' => 'setCountdown',
        'countdownPrice' => 'setCountdownPrice',
        'countdownTimeType' => 'setCountdownTimeType',
        'miniProgramId' => 'setMiniProgramId',
        'miniProgramPath' => 'setMiniProgramPath',
        'label' => 'setLabel',
        'productTags' => 'setProductTags',
        'logoDescription' => 'setLogoDescription',
        'logo' => 'setLogo',
        'leftBottomTxt' => 'setLeftBottomTxt',
        'animationEffect' => 'setAnimationEffect',
        'phone' => 'setPhone',
        'shortVideoStruct' => 'setShortVideoStruct',
        'longVideoStruct' => 'setLongVideoStruct',
        'bannerContent' => 'setBannerContent',
        'cardContent' => 'setCardContent',
        'videoPopupUrl' => 'setVideoPopupUrl',
        'videoPopupButton' => 'setVideoPopupButton',
        'buttonUrl' => 'setButtonUrl',
        'brand' => 'setBrand',
        'caption' => 'setCaption',
        'labelledImg' => 'setLabelledImg',
        'fullScreenImage' => 'setFullScreenImage',
        'zipUrl' => 'setZipUrl',
        'endPage' => 'setEndPage',
        'shopImage' => 'setShopImage',
        'headLine' => 'setHeadLine'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'image' => 'getImage',
        'image2' => 'getImage2',
        'image3' => 'getImage3',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'corporate' => 'getCorporate',
        'video' => 'getVideo',
        'deepLinkType' => 'getDeepLinkType',
        'linkNameType' => 'getLinkNameType',
        'imageList' => 'getImageList',
        'elementStory' => 'getElementStory',
        'url' => 'getUrl',
        'buttonText' => 'getButtonText',
        'bottomText' => 'getBottomText',
        'excitationText' => 'getExcitationText',
        'countdownBegin' => 'getCountdownBegin',
        'countdown' => 'getCountdown',
        'countdownPrice' => 'getCountdownPrice',
        'countdownTimeType' => 'getCountdownTimeType',
        'miniProgramId' => 'getMiniProgramId',
        'miniProgramPath' => 'getMiniProgramPath',
        'label' => 'getLabel',
        'productTags' => 'getProductTags',
        'logoDescription' => 'getLogoDescription',
        'logo' => 'getLogo',
        'leftBottomTxt' => 'getLeftBottomTxt',
        'animationEffect' => 'getAnimationEffect',
        'phone' => 'getPhone',
        'shortVideoStruct' => 'getShortVideoStruct',
        'longVideoStruct' => 'getLongVideoStruct',
        'bannerContent' => 'getBannerContent',
        'cardContent' => 'getCardContent',
        'videoPopupUrl' => 'getVideoPopupUrl',
        'videoPopupButton' => 'getVideoPopupButton',
        'buttonUrl' => 'getButtonUrl',
        'brand' => 'getBrand',
        'caption' => 'getCaption',
        'labelledImg' => 'getLabelledImg',
        'fullScreenImage' => 'getFullScreenImage',
        'zipUrl' => 'getZipUrl',
        'endPage' => 'getEndPage',
        'shopImage' => 'getShopImage',
        'headLine' => 'getHeadLine'
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
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['image2'] = isset($data['image2']) ? $data['image2'] : null;
        $this->container['image3'] = isset($data['image3']) ? $data['image3'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['corporate'] = isset($data['corporate']) ? $data['corporate'] : null;
        $this->container['video'] = isset($data['video']) ? $data['video'] : null;
        $this->container['deepLinkType'] = isset($data['deepLinkType']) ? $data['deepLinkType'] : null;
        $this->container['linkNameType'] = isset($data['linkNameType']) ? $data['linkNameType'] : null;
        $this->container['imageList'] = isset($data['imageList']) ? $data['imageList'] : null;
        $this->container['elementStory'] = isset($data['elementStory']) ? $data['elementStory'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['buttonText'] = isset($data['buttonText']) ? $data['buttonText'] : null;
        $this->container['bottomText'] = isset($data['bottomText']) ? $data['bottomText'] : null;
        $this->container['excitationText'] = isset($data['excitationText']) ? $data['excitationText'] : null;
        $this->container['countdownBegin'] = isset($data['countdownBegin']) ? $data['countdownBegin'] : null;
        $this->container['countdown'] = isset($data['countdown']) ? $data['countdown'] : null;
        $this->container['countdownPrice'] = isset($data['countdownPrice']) ? $data['countdownPrice'] : null;
        $this->container['countdownTimeType'] = isset($data['countdownTimeType']) ? $data['countdownTimeType'] : null;
        $this->container['miniProgramId'] = isset($data['miniProgramId']) ? $data['miniProgramId'] : null;
        $this->container['miniProgramPath'] = isset($data['miniProgramPath']) ? $data['miniProgramPath'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['productTags'] = isset($data['productTags']) ? $data['productTags'] : null;
        $this->container['logoDescription'] = isset($data['logoDescription']) ? $data['logoDescription'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['leftBottomTxt'] = isset($data['leftBottomTxt']) ? $data['leftBottomTxt'] : null;
        $this->container['animationEffect'] = isset($data['animationEffect']) ? $data['animationEffect'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['shortVideoStruct'] = isset($data['shortVideoStruct']) ? $data['shortVideoStruct'] : null;
        $this->container['longVideoStruct'] = isset($data['longVideoStruct']) ? $data['longVideoStruct'] : null;
        $this->container['bannerContent'] = isset($data['bannerContent']) ? $data['bannerContent'] : null;
        $this->container['cardContent'] = isset($data['cardContent']) ? $data['cardContent'] : null;
        $this->container['videoPopupUrl'] = isset($data['videoPopupUrl']) ? $data['videoPopupUrl'] : null;
        $this->container['videoPopupButton'] = isset($data['videoPopupButton']) ? $data['videoPopupButton'] : null;
        $this->container['buttonUrl'] = isset($data['buttonUrl']) ? $data['buttonUrl'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['caption'] = isset($data['caption']) ? $data['caption'] : null;
        $this->container['labelledImg'] = isset($data['labelledImg']) ? $data['labelledImg'] : null;
        $this->container['fullScreenImage'] = isset($data['fullScreenImage']) ? $data['fullScreenImage'] : null;
        $this->container['zipUrl'] = isset($data['zipUrl']) ? $data['zipUrl'] : null;
        $this->container['endPage'] = isset($data['endPage']) ? $data['endPage'] : null;
        $this->container['shopImage'] = isset($data['shopImage']) ? $data['shopImage'] : null;
        $this->container['headLine'] = isset($data['headLine']) ? $data['headLine'] : null;
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
     * Gets image
     *
     * @return string|mixed
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets image2
     *
     * @return string|mixed
     */
    public function getImage2()
    {
        return $this->container['image2'];
    }

    /**
     * Sets image2
     *
     * @param string $image2 image2
     *
     * @return $this
     */
    public function setImage2($image2)
    {
        $this->container['image2'] = $image2;

        return $this;
    }

    /**
     * Gets image3
     *
     * @return string|mixed
     */
    public function getImage3()
    {
        return $this->container['image3'];
    }

    /**
     * Sets image3
     *
     * @param string $image3 image3
     *
     * @return $this
     */
    public function setImage3($image3)
    {
        $this->container['image3'] = $image3;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|mixed
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets corporate
     *
     * @return \TencentAds\Model\AdcreativeCorporate|mixed
     */
    public function getCorporate()
    {
        return $this->container['corporate'];
    }

    /**
     * Sets corporate
     *
     * @param \TencentAds\Model\AdcreativeCorporate $corporate corporate
     *
     * @return $this
     */
    public function setCorporate($corporate)
    {
        $this->container['corporate'] = $corporate;

        return $this;
    }

    /**
     * Gets video
     *
     * @return string|mixed
     */
    public function getVideo()
    {
        return $this->container['video'];
    }

    /**
     * Sets video
     *
     * @param string $video video
     *
     * @return $this
     */
    public function setVideo($video)
    {
        $this->container['video'] = $video;

        return $this;
    }

    /**
     * Gets deepLinkType
     *
     * @return string|mixed
     */
    public function getDeepLinkType()
    {
        return $this->container['deepLinkType'];
    }

    /**
     * Sets deepLinkType
     *
     * @param string $deepLinkType deepLinkType
     *
     * @return $this
     */
    public function setDeepLinkType($deepLinkType)
    {
        $this->container['deepLinkType'] = $deepLinkType;

        return $this;
    }

    /**
     * Gets linkNameType
     *
     * @return \TencentAds\Model\LinkNameType|mixed
     */
    public function getLinkNameType()
    {
        return $this->container['linkNameType'];
    }

    /**
     * Sets linkNameType
     *
     * @param \TencentAds\Model\LinkNameType $linkNameType linkNameType
     *
     * @return $this
     */
    public function setLinkNameType($linkNameType)
    {
        $this->container['linkNameType'] = $linkNameType;

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
     * @param string[] $imageList imageList
     *
     * @return $this
     */
    public function setImageList($imageList)
    {
        $this->container['imageList'] = $imageList;

        return $this;
    }

    /**
     * Gets elementStory
     *
     * @return \TencentAds\Model\AdcreativeElementStoryArrayItem[]|mixed
     */
    public function getElementStory()
    {
        return $this->container['elementStory'];
    }

    /**
     * Sets elementStory
     *
     * @param \TencentAds\Model\AdcreativeElementStoryArrayItem[] $elementStory elementStory
     *
     * @return $this
     */
    public function setElementStory($elementStory)
    {
        $this->container['elementStory'] = $elementStory;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|mixed
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets buttonText
     *
     * @return string|mixed
     */
    public function getButtonText()
    {
        return $this->container['buttonText'];
    }

    /**
     * Sets buttonText
     *
     * @param string $buttonText buttonText
     *
     * @return $this
     */
    public function setButtonText($buttonText)
    {
        $this->container['buttonText'] = $buttonText;

        return $this;
    }

    /**
     * Gets bottomText
     *
     * @return string|mixed
     */
    public function getBottomText()
    {
        return $this->container['bottomText'];
    }

    /**
     * Sets bottomText
     *
     * @param string $bottomText bottomText
     *
     * @return $this
     */
    public function setBottomText($bottomText)
    {
        $this->container['bottomText'] = $bottomText;

        return $this;
    }

    /**
     * Gets excitationText
     *
     * @return string|mixed
     */
    public function getExcitationText()
    {
        return $this->container['excitationText'];
    }

    /**
     * Sets excitationText
     *
     * @param string $excitationText excitationText
     *
     * @return $this
     */
    public function setExcitationText($excitationText)
    {
        $this->container['excitationText'] = $excitationText;

        return $this;
    }

    /**
     * Gets countdownBegin
     *
     * @return int|mixed
     */
    public function getCountdownBegin()
    {
        return $this->container['countdownBegin'];
    }

    /**
     * Sets countdownBegin
     *
     * @param int $countdownBegin countdownBegin
     *
     * @return $this
     */
    public function setCountdownBegin($countdownBegin)
    {
        $this->container['countdownBegin'] = $countdownBegin;

        return $this;
    }

    /**
     * Gets countdown
     *
     * @return int|mixed
     */
    public function getCountdown()
    {
        return $this->container['countdown'];
    }

    /**
     * Sets countdown
     *
     * @param int $countdown countdown
     *
     * @return $this
     */
    public function setCountdown($countdown)
    {
        $this->container['countdown'] = $countdown;

        return $this;
    }

    /**
     * Gets countdownPrice
     *
     * @return string|mixed
     */
    public function getCountdownPrice()
    {
        return $this->container['countdownPrice'];
    }

    /**
     * Sets countdownPrice
     *
     * @param string $countdownPrice countdownPrice
     *
     * @return $this
     */
    public function setCountdownPrice($countdownPrice)
    {
        $this->container['countdownPrice'] = $countdownPrice;

        return $this;
    }

    /**
     * Gets countdownTimeType
     *
     * @return \TencentAds\Model\AdCreativeCountdownTimeType|mixed
     */
    public function getCountdownTimeType()
    {
        return $this->container['countdownTimeType'];
    }

    /**
     * Sets countdownTimeType
     *
     * @param \TencentAds\Model\AdCreativeCountdownTimeType $countdownTimeType countdownTimeType
     *
     * @return $this
     */
    public function setCountdownTimeType($countdownTimeType)
    {
        $this->container['countdownTimeType'] = $countdownTimeType;

        return $this;
    }

    /**
     * Gets miniProgramId
     *
     * @return string|mixed
     */
    public function getMiniProgramId()
    {
        return $this->container['miniProgramId'];
    }

    /**
     * Sets miniProgramId
     *
     * @param string $miniProgramId miniProgramId
     *
     * @return $this
     */
    public function setMiniProgramId($miniProgramId)
    {
        $this->container['miniProgramId'] = $miniProgramId;

        return $this;
    }

    /**
     * Gets miniProgramPath
     *
     * @return string|mixed
     */
    public function getMiniProgramPath()
    {
        return $this->container['miniProgramPath'];
    }

    /**
     * Sets miniProgramPath
     *
     * @param string $miniProgramPath miniProgramPath
     *
     * @return $this
     */
    public function setMiniProgramPath($miniProgramPath)
    {
        $this->container['miniProgramPath'] = $miniProgramPath;

        return $this;
    }

    /**
     * Gets label
     *
     * @return \TencentAds\Model\CreativeLabel[]|mixed
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param \TencentAds\Model\CreativeLabel[] $label label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets productTags
     *
     * @return string[]|mixed
     */
    public function getProductTags()
    {
        return $this->container['productTags'];
    }

    /**
     * Sets productTags
     *
     * @param string[] $productTags productTags
     *
     * @return $this
     */
    public function setProductTags($productTags)
    {
        $this->container['productTags'] = $productTags;

        return $this;
    }

    /**
     * Gets logoDescription
     *
     * @return string|mixed
     */
    public function getLogoDescription()
    {
        return $this->container['logoDescription'];
    }

    /**
     * Sets logoDescription
     *
     * @param string $logoDescription logoDescription
     *
     * @return $this
     */
    public function setLogoDescription($logoDescription)
    {
        $this->container['logoDescription'] = $logoDescription;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string|mixed
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string $logo logo
     *
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets leftBottomTxt
     *
     * @return string|mixed
     */
    public function getLeftBottomTxt()
    {
        return $this->container['leftBottomTxt'];
    }

    /**
     * Sets leftBottomTxt
     *
     * @param string $leftBottomTxt leftBottomTxt
     *
     * @return $this
     */
    public function setLeftBottomTxt($leftBottomTxt)
    {
        $this->container['leftBottomTxt'] = $leftBottomTxt;

        return $this;
    }

    /**
     * Gets animationEffect
     *
     * @return string|mixed
     */
    public function getAnimationEffect()
    {
        return $this->container['animationEffect'];
    }

    /**
     * Sets animationEffect
     *
     * @param string $animationEffect animationEffect
     *
     * @return $this
     */
    public function setAnimationEffect($animationEffect)
    {
        $this->container['animationEffect'] = $animationEffect;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|mixed
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets shortVideoStruct
     *
     * @return \TencentAds\Model\ShortVideoStruct|mixed
     */
    public function getShortVideoStruct()
    {
        return $this->container['shortVideoStruct'];
    }

    /**
     * Sets shortVideoStruct
     *
     * @param \TencentAds\Model\ShortVideoStruct $shortVideoStruct shortVideoStruct
     *
     * @return $this
     */
    public function setShortVideoStruct($shortVideoStruct)
    {
        $this->container['shortVideoStruct'] = $shortVideoStruct;

        return $this;
    }

    /**
     * Gets longVideoStruct
     *
     * @return \TencentAds\Model\LongVideoStruct|mixed
     */
    public function getLongVideoStruct()
    {
        return $this->container['longVideoStruct'];
    }

    /**
     * Sets longVideoStruct
     *
     * @param \TencentAds\Model\LongVideoStruct $longVideoStruct longVideoStruct
     *
     * @return $this
     */
    public function setLongVideoStruct($longVideoStruct)
    {
        $this->container['longVideoStruct'] = $longVideoStruct;

        return $this;
    }

    /**
     * Gets bannerContent
     *
     * @return \TencentAds\Model\AdcreativeBannerContent|mixed
     */
    public function getBannerContent()
    {
        return $this->container['bannerContent'];
    }

    /**
     * Sets bannerContent
     *
     * @param \TencentAds\Model\AdcreativeBannerContent $bannerContent bannerContent
     *
     * @return $this
     */
    public function setBannerContent($bannerContent)
    {
        $this->container['bannerContent'] = $bannerContent;

        return $this;
    }

    /**
     * Gets cardContent
     *
     * @return \TencentAds\Model\AdcreativeCardContent|mixed
     */
    public function getCardContent()
    {
        return $this->container['cardContent'];
    }

    /**
     * Sets cardContent
     *
     * @param \TencentAds\Model\AdcreativeCardContent $cardContent cardContent
     *
     * @return $this
     */
    public function setCardContent($cardContent)
    {
        $this->container['cardContent'] = $cardContent;

        return $this;
    }

    /**
     * Gets videoPopupUrl
     *
     * @return string|mixed
     */
    public function getVideoPopupUrl()
    {
        return $this->container['videoPopupUrl'];
    }

    /**
     * Sets videoPopupUrl
     *
     * @param string $videoPopupUrl videoPopupUrl
     *
     * @return $this
     */
    public function setVideoPopupUrl($videoPopupUrl)
    {
        $this->container['videoPopupUrl'] = $videoPopupUrl;

        return $this;
    }

    /**
     * Gets videoPopupButton
     *
     * @return \TencentAds\Model\AdcreativeVideoPopupButton|mixed
     */
    public function getVideoPopupButton()
    {
        return $this->container['videoPopupButton'];
    }

    /**
     * Sets videoPopupButton
     *
     * @param \TencentAds\Model\AdcreativeVideoPopupButton $videoPopupButton videoPopupButton
     *
     * @return $this
     */
    public function setVideoPopupButton($videoPopupButton)
    {
        $this->container['videoPopupButton'] = $videoPopupButton;

        return $this;
    }

    /**
     * Gets buttonUrl
     *
     * @return string|mixed
     */
    public function getButtonUrl()
    {
        return $this->container['buttonUrl'];
    }

    /**
     * Sets buttonUrl
     *
     * @param string $buttonUrl buttonUrl
     *
     * @return $this
     */
    public function setButtonUrl($buttonUrl)
    {
        $this->container['buttonUrl'] = $buttonUrl;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return \TencentAds\Model\AdCreativeBrand|mixed
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param \TencentAds\Model\AdCreativeBrand $brand brand
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets caption
     *
     * @return string|mixed
     */
    public function getCaption()
    {
        return $this->container['caption'];
    }

    /**
     * Sets caption
     *
     * @param string $caption caption
     *
     * @return $this
     */
    public function setCaption($caption)
    {
        $this->container['caption'] = $caption;

        return $this;
    }

    /**
     * Gets labelledImg
     *
     * @return \TencentAds\Model\AdcreativeLabelledImg|mixed
     */
    public function getLabelledImg()
    {
        return $this->container['labelledImg'];
    }

    /**
     * Sets labelledImg
     *
     * @param \TencentAds\Model\AdcreativeLabelledImg $labelledImg labelledImg
     *
     * @return $this
     */
    public function setLabelledImg($labelledImg)
    {
        $this->container['labelledImg'] = $labelledImg;

        return $this;
    }

    /**
     * Gets fullScreenImage
     *
     * @return string|mixed
     */
    public function getFullScreenImage()
    {
        return $this->container['fullScreenImage'];
    }

    /**
     * Sets fullScreenImage
     *
     * @param string $fullScreenImage fullScreenImage
     *
     * @return $this
     */
    public function setFullScreenImage($fullScreenImage)
    {
        $this->container['fullScreenImage'] = $fullScreenImage;

        return $this;
    }

    /**
     * Gets zipUrl
     *
     * @return string|mixed
     */
    public function getZipUrl()
    {
        return $this->container['zipUrl'];
    }

    /**
     * Sets zipUrl
     *
     * @param string $zipUrl zipUrl
     *
     * @return $this
     */
    public function setZipUrl($zipUrl)
    {
        $this->container['zipUrl'] = $zipUrl;

        return $this;
    }

    /**
     * Gets endPage
     *
     * @return \TencentAds\Model\AdCreativeEndPage|mixed
     */
    public function getEndPage()
    {
        return $this->container['endPage'];
    }

    /**
     * Sets endPage
     *
     * @param \TencentAds\Model\AdCreativeEndPage $endPage endPage
     *
     * @return $this
     */
    public function setEndPage($endPage)
    {
        $this->container['endPage'] = $endPage;

        return $this;
    }

    /**
     * Gets shopImage
     *
     * @return string|mixed
     */
    public function getShopImage()
    {
        return $this->container['shopImage'];
    }

    /**
     * Sets shopImage
     *
     * @param string $shopImage shopImage
     *
     * @return $this
     */
    public function setShopImage($shopImage)
    {
        $this->container['shopImage'] = $shopImage;

        return $this;
    }

    /**
     * Gets headLine
     *
     * @return string|mixed
     */
    public function getHeadLine()
    {
        return $this->container['headLine'];
    }

    /**
     * Sets headLine
     *
     * @param string $headLine headLine
     *
     * @return $this
     */
    public function setHeadLine($headLine)
    {
        $this->container['headLine'] = $headLine;

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


