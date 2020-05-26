<?php
/**
 * DynamicCreativeCampaignType
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
use \TencentAds\ObjectSerializer;

/**
 * DynamicCreativeCampaignType Class Doc Comment
 *
 * @category Class
 * @description 推广计划类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DynamicCreativeCampaignType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'UNKNOWN';
    const CAMPAIGN_TYPE_SEARCH = 'CAMPAIGN_TYPE_SEARCH';
    const CAMPAIGN_TYPE_NORMAL = 'CAMPAIGN_TYPE_NORMAL';
    const CAMPAIGN_TYPE_CONTRACT = 'CAMPAIGN_TYPE_CONTRACT';
    const CAMPAIGN_TYPE_WECHAT_OFFICIAL_ACCOUNTS = 'CAMPAIGN_TYPE_WECHAT_OFFICIAL_ACCOUNTS';
    const CAMPAIGN_TYPE_WECHAT_MOMENTS = 'CAMPAIGN_TYPE_WECHAT_MOMENTS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::CAMPAIGN_TYPE_SEARCH,
            self::CAMPAIGN_TYPE_NORMAL,
            self::CAMPAIGN_TYPE_CONTRACT,
            self::CAMPAIGN_TYPE_WECHAT_OFFICIAL_ACCOUNTS,
            self::CAMPAIGN_TYPE_WECHAT_MOMENTS,
        ];
    }
}


