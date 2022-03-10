<?php
/**
 * PromotedObjectType
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
 * PromotedObjectType Class Doc Comment
 *
 * @category Class
 * @description 推广目标类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PromotedObjectType
{
    /**
     * Possible values of this enum
     */
    const APP_ANDROID = 'PROMOTED_OBJECT_TYPE_APP_ANDROID';
    const APP_IOS = 'PROMOTED_OBJECT_TYPE_APP_IOS';
    const DIANPING_SHOP = 'PROMOTED_OBJECT_TYPE_DIANPING_SHOP';
    const ECOMMERCE = 'PROMOTED_OBJECT_TYPE_ECOMMERCE';
    const LINK_WECHAT = 'PROMOTED_OBJECT_TYPE_LINK_WECHAT';
    const APP_ANDROID_MYAPP = 'PROMOTED_OBJECT_TYPE_APP_ANDROID_MYAPP';
    const APP_ANDROID_UNION = 'PROMOTED_OBJECT_TYPE_APP_ANDROID_UNION';
    const LOCAL_ADS_WECHAT = 'PROMOTED_OBJECT_TYPE_LOCAL_ADS_WECHAT';
    const QQ_BROWSER_MINI_PROGRAM = 'PROMOTED_OBJECT_TYPE_QQ_BROWSER_MINI_PROGRAM';
    const LINK = 'PROMOTED_OBJECT_TYPE_LINK';
    const QQ_MESSAGE = 'PROMOTED_OBJECT_TYPE_QQ_MESSAGE';
    const QZONE_VIDEO_PAGE = 'PROMOTED_OBJECT_TYPE_QZONE_VIDEO_PAGE';
    const LOCAL_ADS = 'PROMOTED_OBJECT_TYPE_LOCAL_ADS';
    const ARTICLE = 'PROMOTED_OBJECT_TYPE_ARTICLE';
    const LEAD_AD = 'PROMOTED_OBJECT_TYPE_LEAD_AD';
    const TENCENT_KE = 'PROMOTED_OBJECT_TYPE_TENCENT_KE';
    const EXCHANGE_APP_ANDROID_MYAPP = 'PROMOTED_OBJECT_TYPE_EXCHANGE_APP_ANDROID_MYAPP';
    const QZONE_PAGE_ARTICLE = 'PROMOTED_OBJECT_TYPE_QZONE_PAGE_ARTICLE';
    const QZONE_PAGE_IFRAMED = 'PROMOTED_OBJECT_TYPE_QZONE_PAGE_IFRAMED';
    const QZONE_PAGE = 'PROMOTED_OBJECT_TYPE_QZONE_PAGE';
    const APP_PC = 'PROMOTED_OBJECT_TYPE_APP_PC';
    const MINI_GAME_WECHAT = 'PROMOTED_OBJECT_TYPE_MINI_GAME_WECHAT';
    const JD = 'PROMOTED_OBJECT_TYPE_JD';
    const MINI_GAME_QQ = 'PROMOTED_OBJECT_TYPE_MINI_GAME_QQ';
    const COUPON_WECHAT = 'PROMOTED_OBJECT_TYPE_COUPON_WECHAT';
    const APP_PROMOTION = 'PROMOTED_OBJECT_TYPE_APP_PROMOTION';
    const WECHAT_CHANNELS = 'PROMOTED_OBJECT_TYPE_WECHAT_CHANNELS';
    const WECHAT_OFFICIAL_ACCOUNT = 'PROMOTED_OBJECT_TYPE_WECHAT_OFFICIAL_ACCOUNT';
    const MINI_PROGRAM_WECHAT = 'PROMOTED_OBJECT_TYPE_MINI_PROGRAM_WECHAT';
    const APP_QUICK_APP = 'PROMOTED_OBJECT_TYPE_APP_QUICK_APP';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::APP_ANDROID,
            self::APP_IOS,
            self::DIANPING_SHOP,
            self::ECOMMERCE,
            self::LINK_WECHAT,
            self::APP_ANDROID_MYAPP,
            self::APP_ANDROID_UNION,
            self::LOCAL_ADS_WECHAT,
            self::QQ_BROWSER_MINI_PROGRAM,
            self::LINK,
            self::QQ_MESSAGE,
            self::QZONE_VIDEO_PAGE,
            self::LOCAL_ADS,
            self::ARTICLE,
            self::LEAD_AD,
            self::TENCENT_KE,
            self::EXCHANGE_APP_ANDROID_MYAPP,
            self::QZONE_PAGE_ARTICLE,
            self::QZONE_PAGE_IFRAMED,
            self::QZONE_PAGE,
            self::APP_PC,
            self::MINI_GAME_WECHAT,
            self::JD,
            self::MINI_GAME_QQ,
            self::COUPON_WECHAT,
            self::APP_PROMOTION,
            self::WECHAT_CHANNELS,
            self::WECHAT_OFFICIAL_ACCOUNT,
            self::MINI_PROGRAM_WECHAT,
            self::APP_QUICK_APP,
        ];
    }
}


