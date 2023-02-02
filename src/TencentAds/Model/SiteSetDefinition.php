<?php
/**
 * SiteSetDefinition
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
 * SiteSetDefinition Class Doc Comment
 *
 * @category Class
 * @description 版位信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SiteSetDefinition
{
    /**
     * Possible values of this enum
     */
    const SITE_SET_QZONE = 'SITE_SET_QZONE';
    const SITE_SET_QQCLIENT = 'SITE_SET_QQCLIENT';
    const SITE_SET_MUSIC = 'SITE_SET_MUSIC';
    const SITE_SET_MOBILE_UNION = 'SITE_SET_MOBILE_UNION';
    const SITE_SET_QQCOM = 'SITE_SET_QQCOM';
    const SITE_SET_WECHAT = 'SITE_SET_WECHAT';
    const SITE_SET_MOBILE_MYAPP = 'SITE_SET_MOBILE_MYAPP';
    const SITE_SET_MOBILE_YYB = 'SITE_SET_MOBILE_YYB';
    const SITE_SET_QQSHOPPING = 'SITE_SET_QQSHOPPING';
    const SITE_SET_MOBILE_INNER = 'SITE_SET_MOBILE_INNER';
    const SITE_SET_TENCENT_NEWS = 'SITE_SET_TENCENT_NEWS';
    const SITE_SET_TENCENT_VIDEO = 'SITE_SET_TENCENT_VIDEO';
    const SITE_SET_TENCENT_KUAIBAO = 'SITE_SET_TENCENT_KUAIBAO';
    const SITE_SET_PENGYOU = 'SITE_SET_PENGYOU';
    const SITE_SET_TUAN = 'SITE_SET_TUAN';
    const SITE_SET_MEISHI = 'SITE_SET_MEISHI';
    const SITE_SET_PIAO = 'SITE_SET_PIAO';
    const SITE_SET_MAIL = 'SITE_SET_MAIL';
    const SITE_SET_PC_UNION = 'SITE_SET_PC_UNION';
    const SITE_SET_YINGYONGBAO_PC = 'SITE_SET_YINGYONGBAO_PC';
    const SITE_SET_PAIPAISEARCH = 'SITE_SET_PAIPAISEARCH';
    const SITE_SET_QQSHOP = 'SITE_SET_QQSHOP';
    const SITE_SET_PAIPAIDAOGOU = 'SITE_SET_PAIPAIDAOGOU';
    const SITE_SET_QZONESEARCH = 'SITE_SET_QZONESEARCH';
    const SITE_SET_WEBUNION_DELETED = 'SITE_SET_WEBUNION_DELETED';
    const SITE_SET_EXPRESSPORTAL = 'SITE_SET_EXPRESSPORTAL';
    const SITE_SET_WEIBO = 'SITE_SET_WEIBO';
    const SITE_SET_WANGGOU = 'SITE_SET_WANGGOU';
    const SITE_SET_MOBILE_UNION_DELETED = 'SITE_SET_MOBILE_UNION_DELETED';
    const SITE_SET_THIRDPARTY = 'SITE_SET_THIRDPARTY';
    const SITE_SET_JD_WAICAI = 'SITE_SET_JD_WAICAI';
    const SITE_SET_PCQQ = 'SITE_SET_PCQQ';
    const SITE_SET_KUAISHOU = 'SITE_SET_KUAISHOU';
    const SITE_SET_KANDIAN = 'SITE_SET_KANDIAN';
    const SITE_SET_QQ_MUSIC_GAME = 'SITE_SET_QQ_MUSIC_GAME';
    const SITE_SET_MOMENTS = 'SITE_SET_MOMENTS';
    const SITE_SET_MINI_GAME_WECHAT = 'SITE_SET_MINI_GAME_WECHAT';
    const SITE_SET_MINI_GAME_QQ = 'SITE_SET_MINI_GAME_QQ';
    const SITE_SET_MOBILE_GAME = 'SITE_SET_MOBILE_GAME';
    const SITE_SET_TENCENT_VIDEO_OTT = 'SITE_SET_TENCENT_VIDEO_OTT';
    const SITE_SET_CHANNELS = 'SITE_SET_CHANNELS';
    const SITE_SET_OVERSEAS_UNION = 'SITE_SET_OVERSEAS_UNION';
    const SITE_SET_WECHAT_SEARCH = 'SITE_SET_WECHAT_SEARCH';
    const SITE_SET_WECHAT_PLUGIN = 'SITE_SET_WECHAT_PLUGIN';
    const SITE_SET_FREETRADE = 'SITE_SET_FREETRADE';
    const SITE_SET_QBSEARCH = 'SITE_SET_QBSEARCH';
    const SITE_SET_FREETRADE_FINDER = 'SITE_SET_FREETRADE_FINDER';
    const SITE_SET_BROWSER_MOBILE = 'SITE_SET_BROWSER_MOBILE';
    const SITE_SET_SEARCH_SCENE = 'SITE_SET_SEARCH_SCENE';
    const SITE_SET_BROWSER_PC = 'SITE_SET_BROWSER_PC';
    const SITESET_WECHAT_PLUGIN = 'SITESET_WECHAT_PLUGIN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SITE_SET_QZONE,
            self::SITE_SET_QQCLIENT,
            self::SITE_SET_MUSIC,
            self::SITE_SET_MOBILE_UNION,
            self::SITE_SET_QQCOM,
            self::SITE_SET_WECHAT,
            self::SITE_SET_MOBILE_MYAPP,
            self::SITE_SET_MOBILE_YYB,
            self::SITE_SET_QQSHOPPING,
            self::SITE_SET_MOBILE_INNER,
            self::SITE_SET_TENCENT_NEWS,
            self::SITE_SET_TENCENT_VIDEO,
            self::SITE_SET_TENCENT_KUAIBAO,
            self::SITE_SET_PENGYOU,
            self::SITE_SET_TUAN,
            self::SITE_SET_MEISHI,
            self::SITE_SET_PIAO,
            self::SITE_SET_MAIL,
            self::SITE_SET_PC_UNION,
            self::SITE_SET_YINGYONGBAO_PC,
            self::SITE_SET_PAIPAISEARCH,
            self::SITE_SET_QQSHOP,
            self::SITE_SET_PAIPAIDAOGOU,
            self::SITE_SET_QZONESEARCH,
            self::SITE_SET_WEBUNION_DELETED,
            self::SITE_SET_EXPRESSPORTAL,
            self::SITE_SET_WEIBO,
            self::SITE_SET_WANGGOU,
            self::SITE_SET_MOBILE_UNION_DELETED,
            self::SITE_SET_THIRDPARTY,
            self::SITE_SET_JD_WAICAI,
            self::SITE_SET_PCQQ,
            self::SITE_SET_KUAISHOU,
            self::SITE_SET_KANDIAN,
            self::SITE_SET_QQ_MUSIC_GAME,
            self::SITE_SET_MOMENTS,
            self::SITE_SET_MINI_GAME_WECHAT,
            self::SITE_SET_MINI_GAME_QQ,
            self::SITE_SET_MOBILE_GAME,
            self::SITE_SET_TENCENT_VIDEO_OTT,
            self::SITE_SET_CHANNELS,
            self::SITE_SET_OVERSEAS_UNION,
            self::SITE_SET_WECHAT_SEARCH,
            self::SITE_SET_WECHAT_PLUGIN,
            self::SITE_SET_FREETRADE,
            self::SITE_SET_QBSEARCH,
            self::SITE_SET_FREETRADE_FINDER,
            self::SITE_SET_BROWSER_MOBILE,
            self::SITE_SET_SEARCH_SCENE,
            self::SITE_SET_BROWSER_PC,
            self::SITESET_WECHAT_PLUGIN,
        ];
    }
}


