<?php
/**
 * WechatPromotedObjectType
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
use \TencentAds\ObjectSerializer;

/**
 * WechatPromotedObjectType Class Doc Comment
 *
 * @category Class
 * @description 推广目标类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WechatPromotedObjectType
{
    /**
     * Possible values of this enum
     */
    const APP_ANDROID = 'PROMOTED_OBJECT_TYPE_APP_ANDROID';
    const APP_IOS = 'PROMOTED_OBJECT_TYPE_APP_IOS';
    const ECOMMERCE = 'PROMOTED_OBJECT_TYPE_ECOMMERCE';
    const LINK_WECHAT = 'PROMOTED_OBJECT_TYPE_LINK_WECHAT';
    const LOCAL_ADS_WECHAT = 'PROMOTED_OBJECT_TYPE_LOCAL_ADS_WECHAT';
    const LEAD_AD = 'PROMOTED_OBJECT_TYPE_LEAD_AD';
    const MINI_GAME_WECHAT = 'PROMOTED_OBJECT_TYPE_MINI_GAME_WECHAT';
    const MINI_PROGRAM_WECHAT = 'PROMOTED_OBJECT_TYPE_MINI_PROGRAM_WECHAT';
    const WECHAT_OFFICIAL_ACCOUNT = 'PROMOTED_OBJECT_TYPE_WECHAT_OFFICIAL_ACCOUNT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::APP_ANDROID,
            self::APP_IOS,
            self::ECOMMERCE,
            self::LINK_WECHAT,
            self::LOCAL_ADS_WECHAT,
            self::LEAD_AD,
            self::MINI_GAME_WECHAT,
            self::MINI_PROGRAM_WECHAT,
            self::WECHAT_OFFICIAL_ACCOUNT,
        ];
    }
}


