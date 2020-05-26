<?php
/**
 * AdvertiserMpInfoUpdate
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
 * AdvertiserMpInfoUpdate Class Doc Comment
 *
 * @category Class
 * @description &lt;p&gt;微信广告开户信息，当输入参数 account_id 不为空时使用， 用于微信公众号开通微信广告业务(需提前绑定公众号），或开通微信通用账号业务，其中通用账号能力为邀请制开放。&lt;/p&gt;&lt;li&gt;公众号开通广告业务：绑定公众号后，如绑定的微信公众账号尚未开通广告服务，可通过填写该结构进行开通，其中 system_industry_id、contact_person、contact_person_telephone 必填。&lt;/li&gt;&lt;li&gt;通用账号业务：除business_type，business_content字段外，均为必填字段。&lt;/li&gt;&lt;li&gt;账号信息修改：可通过填写该结构进行信息修正，但当且仅当微信广告信息审核拒绝时，才允许进行更新&lt;/li&gt;
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdvertiserMpInfoUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'advertiser_mp_info_update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'systemIndustryId' => 'int',
        'contactPerson' => 'string',
        'contactPersonTelephone' => 'string',
        'businessType' => '\TencentAds\Model\AdvertiserBusinessType2',
        'businessContent' => 'string',
        'name' => 'string',
        'profilePhoto' => 'string',
        'brandIntroduction' => 'string',
        'introductionUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'systemIndustryId' => 'int64',
        'contactPerson' => null,
        'contactPersonTelephone' => null,
        'businessType' => null,
        'businessContent' => null,
        'name' => null,
        'profilePhoto' => null,
        'brandIntroduction' => null,
        'introductionUrl' => null
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
        'systemIndustryId' => 'system_industry_id',
        'contactPerson' => 'contact_person',
        'contactPersonTelephone' => 'contact_person_telephone',
        'businessType' => 'business_type',
        'businessContent' => 'business_content',
        'name' => 'name',
        'profilePhoto' => 'profile_photo',
        'brandIntroduction' => 'brand_introduction',
        'introductionUrl' => 'introduction_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'systemIndustryId' => 'setSystemIndustryId',
        'contactPerson' => 'setContactPerson',
        'contactPersonTelephone' => 'setContactPersonTelephone',
        'businessType' => 'setBusinessType',
        'businessContent' => 'setBusinessContent',
        'name' => 'setName',
        'profilePhoto' => 'setProfilePhoto',
        'brandIntroduction' => 'setBrandIntroduction',
        'introductionUrl' => 'setIntroductionUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'systemIndustryId' => 'getSystemIndustryId',
        'contactPerson' => 'getContactPerson',
        'contactPersonTelephone' => 'getContactPersonTelephone',
        'businessType' => 'getBusinessType',
        'businessContent' => 'getBusinessContent',
        'name' => 'getName',
        'profilePhoto' => 'getProfilePhoto',
        'brandIntroduction' => 'getBrandIntroduction',
        'introductionUrl' => 'getIntroductionUrl'
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
        $this->container['systemIndustryId'] = isset($data['systemIndustryId']) ? $data['systemIndustryId'] : null;
        $this->container['contactPerson'] = isset($data['contactPerson']) ? $data['contactPerson'] : null;
        $this->container['contactPersonTelephone'] = isset($data['contactPersonTelephone']) ? $data['contactPersonTelephone'] : null;
        $this->container['businessType'] = isset($data['businessType']) ? $data['businessType'] : null;
        $this->container['businessContent'] = isset($data['businessContent']) ? $data['businessContent'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['profilePhoto'] = isset($data['profilePhoto']) ? $data['profilePhoto'] : null;
        $this->container['brandIntroduction'] = isset($data['brandIntroduction']) ? $data['brandIntroduction'] : null;
        $this->container['introductionUrl'] = isset($data['introductionUrl']) ? $data['introductionUrl'] : null;
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
     * Gets systemIndustryId
     *
     * @return int
     */
    public function getSystemIndustryId()
    {
        return $this->container['systemIndustryId'];
    }

    /**
     * Sets systemIndustryId
     *
     * @param int $systemIndustryId systemIndustryId
     *
     * @return $this
     */
    public function setSystemIndustryId($systemIndustryId)
    {
        $this->container['systemIndustryId'] = $systemIndustryId;

        return $this;
    }

    /**
     * Gets contactPerson
     *
     * @return string
     */
    public function getContactPerson()
    {
        return $this->container['contactPerson'];
    }

    /**
     * Sets contactPerson
     *
     * @param string $contactPerson contactPerson
     *
     * @return $this
     */
    public function setContactPerson($contactPerson)
    {
        $this->container['contactPerson'] = $contactPerson;

        return $this;
    }

    /**
     * Gets contactPersonTelephone
     *
     * @return string
     */
    public function getContactPersonTelephone()
    {
        return $this->container['contactPersonTelephone'];
    }

    /**
     * Sets contactPersonTelephone
     *
     * @param string $contactPersonTelephone contactPersonTelephone
     *
     * @return $this
     */
    public function setContactPersonTelephone($contactPersonTelephone)
    {
        $this->container['contactPersonTelephone'] = $contactPersonTelephone;

        return $this;
    }

    /**
     * Gets businessType
     *
     * @return \TencentAds\Model\AdvertiserBusinessType2
     */
    public function getBusinessType()
    {
        return $this->container['businessType'];
    }

    /**
     * Sets businessType
     *
     * @param \TencentAds\Model\AdvertiserBusinessType2 $businessType businessType
     *
     * @return $this
     */
    public function setBusinessType($businessType)
    {
        $this->container['businessType'] = $businessType;

        return $this;
    }

    /**
     * Gets businessContent
     *
     * @return string
     */
    public function getBusinessContent()
    {
        return $this->container['businessContent'];
    }

    /**
     * Sets businessContent
     *
     * @param string $businessContent businessContent
     *
     * @return $this
     */
    public function setBusinessContent($businessContent)
    {
        $this->container['businessContent'] = $businessContent;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets profilePhoto
     *
     * @return string
     */
    public function getProfilePhoto()
    {
        return $this->container['profilePhoto'];
    }

    /**
     * Sets profilePhoto
     *
     * @param string $profilePhoto profilePhoto
     *
     * @return $this
     */
    public function setProfilePhoto($profilePhoto)
    {
        $this->container['profilePhoto'] = $profilePhoto;

        return $this;
    }

    /**
     * Gets brandIntroduction
     *
     * @return string
     */
    public function getBrandIntroduction()
    {
        return $this->container['brandIntroduction'];
    }

    /**
     * Sets brandIntroduction
     *
     * @param string $brandIntroduction brandIntroduction
     *
     * @return $this
     */
    public function setBrandIntroduction($brandIntroduction)
    {
        $this->container['brandIntroduction'] = $brandIntroduction;

        return $this;
    }

    /**
     * Gets introductionUrl
     *
     * @return string
     */
    public function getIntroductionUrl()
    {
        return $this->container['introductionUrl'];
    }

    /**
     * Sets introductionUrl
     *
     * @param string $introductionUrl introductionUrl
     *
     * @return $this
     */
    public function setIntroductionUrl($introductionUrl)
    {
        $this->container['introductionUrl'] = $introductionUrl;

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


