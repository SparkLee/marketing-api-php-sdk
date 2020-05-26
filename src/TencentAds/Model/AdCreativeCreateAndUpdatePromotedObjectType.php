<?php
/**
 * AdCreativeCreateAndUpdatePromotedObjectType
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
 * AdCreativeCreateAndUpdatePromotedObjectType Class Doc Comment
 *
 * @category Class
 * @description 推广目标类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdCreativeCreateAndUpdatePromotedObjectType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'UNKNOWN';
    const PROMOTED_OBJECT_TYPE_APP_ANDROID = 'PROMOTED_OBJECT_TYPE_APP_ANDROID';
    const PROMOTED_OBJECT_TYPE_APP_IOS = 'PROMOTED_OBJECT_TYPE_APP_IOS';
    const PROMOTED_OBJECT_TYPE_DIANPING_SHOP = 'PROMOTED_OBJECT_TYPE_DIANPING_SHOP';
    const PROMOTED_OBJECT_TYPE_ECOMMERCE = 'PROMOTED_OBJECT_TYPE_ECOMMERCE';
    const PROMOTED_OBJECT_TYPE_LINK_WECHAT = 'PROMOTED_OBJECT_TYPE_LINK_WECHAT';
    const PROMOTED_OBJECT_TYPE_APP_ANDROID_MYAPP = 'PROMOTED_OBJECT_TYPE_APP_ANDROID_MYAPP';
    const PROMOTED_OBJECT_TYPE_APP_ANDROID_UNION = 'PROMOTED_OBJECT_TYPE_APP_ANDROID_UNION';
    const PROMOTED_OBJECT_TYPE_LOCAL_ADS_WECHAT = 'PROMOTED_OBJECT_TYPE_LOCAL_ADS_WECHAT';
    const PROMOTED_OBJECT_TYPE_QQ_BROWSER_MINI_PROGRAM = 'PROMOTED_OBJECT_TYPE_QQ_BROWSER_MINI_PROGRAM';
    const PROMOTED_OBJECT_TYPE_LINK = 'PROMOTED_OBJECT_TYPE_LINK';
    const PROMOTED_OBJECT_TYPE_QQ_MESSAGE = 'PROMOTED_OBJECT_TYPE_QQ_MESSAGE';
    const PROMOTED_OBJECT_TYPE_QZONE_VIDEO_PAGE = 'PROMOTED_OBJECT_TYPE_QZONE_VIDEO_PAGE';
    const PROMOTED_OBJECT_TYPE_LOCAL_ADS = 'PROMOTED_OBJECT_TYPE_LOCAL_ADS';
    const PROMOTED_OBJECT_TYPE_ARTICLE = 'PROMOTED_OBJECT_TYPE_ARTICLE';
    const PROMOTED_OBJECT_TYPE_LEAD_AD = 'PROMOTED_OBJECT_TYPE_LEAD_AD';
    const PROMOTED_OBJECT_TYPE_TENCENT_KE = 'PROMOTED_OBJECT_TYPE_TENCENT_KE';
    const PROMOTED_OBJECT_TYPE_EXCHANGE_APP_ANDROID_MYAPP = 'PROMOTED_OBJECT_TYPE_EXCHANGE_APP_ANDROID_MYAPP';
    const PROMOTED_OBJECT_TYPE_QZONE_PAGE_ARTICLE = 'PROMOTED_OBJECT_TYPE_QZONE_PAGE_ARTICLE';
    const PROMOTED_OBJECT_TYPE_QZONE_PAGE_IFRAMED = 'PROMOTED_OBJECT_TYPE_QZONE_PAGE_IFRAMED';
    const PROMOTED_OBJECT_TYPE_QZONE_PAGE = 'PROMOTED_OBJECT_TYPE_QZONE_PAGE';
    const PROMOTED_OBJECT_TYPE_APP_PC = 'PROMOTED_OBJECT_TYPE_APP_PC';
    const PROMOTED_OBJECT_TYPE_MINI_GAME_WECHAT = 'PROMOTED_OBJECT_TYPE_MINI_GAME_WECHAT';
    const PROMOTED_OBJECT_TYPE_JD = 'PROMOTED_OBJECT_TYPE_JD';
    const PROMOTED_OBJECT_TYPE_COUPON_WECHAT = 'PROMOTED_OBJECT_TYPE_COUPON_WECHAT';
    const PROMOTED_OBJECT_TYPE_MINI_GAME_QQ = 'PROMOTED_OBJECT_TYPE_MINI_GAME_QQ';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::PROMOTED_OBJECT_TYPE_APP_ANDROID,
            self::PROMOTED_OBJECT_TYPE_APP_IOS,
            self::PROMOTED_OBJECT_TYPE_DIANPING_SHOP,
            self::PROMOTED_OBJECT_TYPE_ECOMMERCE,
            self::PROMOTED_OBJECT_TYPE_LINK_WECHAT,
            self::PROMOTED_OBJECT_TYPE_APP_ANDROID_MYAPP,
            self::PROMOTED_OBJECT_TYPE_APP_ANDROID_UNION,
            self::PROMOTED_OBJECT_TYPE_LOCAL_ADS_WECHAT,
            self::PROMOTED_OBJECT_TYPE_QQ_BROWSER_MINI_PROGRAM,
            self::PROMOTED_OBJECT_TYPE_LINK,
            self::PROMOTED_OBJECT_TYPE_QQ_MESSAGE,
            self::PROMOTED_OBJECT_TYPE_QZONE_VIDEO_PAGE,
            self::PROMOTED_OBJECT_TYPE_LOCAL_ADS,
            self::PROMOTED_OBJECT_TYPE_ARTICLE,
            self::PROMOTED_OBJECT_TYPE_LEAD_AD,
            self::PROMOTED_OBJECT_TYPE_TENCENT_KE,
            self::PROMOTED_OBJECT_TYPE_EXCHANGE_APP_ANDROID_MYAPP,
            self::PROMOTED_OBJECT_TYPE_QZONE_PAGE_ARTICLE,
            self::PROMOTED_OBJECT_TYPE_QZONE_PAGE_IFRAMED,
            self::PROMOTED_OBJECT_TYPE_QZONE_PAGE,
            self::PROMOTED_OBJECT_TYPE_APP_PC,
            self::PROMOTED_OBJECT_TYPE_MINI_GAME_WECHAT,
            self::PROMOTED_OBJECT_TYPE_JD,
            self::PROMOTED_OBJECT_TYPE_COUPON_WECHAT,
            self::PROMOTED_OBJECT_TYPE_MINI_GAME_QQ,
        ];
    }
}


