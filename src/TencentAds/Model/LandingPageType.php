<?php
/**
 * LandingPageType
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
 * LandingPageType Class Doc Comment
 *
 * @category Class
 * @description 落地页页面类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LandingPageType
{
    /**
     * Possible values of this enum
     */
    const LANDING_PAGE_TYPE_UNKNOWN = 'LANDING_PAGE_TYPE_UNKNOWN';
    const LANDING_PAGE_TYPE_ANDROID_APP = 'LANDING_PAGE_TYPE_ANDROID_APP';
    const LANDING_PAGE_TYPE_IOS_APP = 'LANDING_PAGE_TYPE_IOS_APP';
    const LANDING_PAGE_TYPE_FENGYE_WEB = 'LANDING_PAGE_TYPE_FENGYE_WEB';
    const LANDING_PAGE_TYPE_FENGYE_LBS = 'LANDING_PAGE_TYPE_FENGYE_LBS';
    const LANDING_PAGE_TYPE_NATIVE = 'LANDING_PAGE_TYPE_NATIVE';
    const LANDING_PAGE_TYPE_ANDROID_APP_NATIVE = 'LANDING_PAGE_TYPE_ANDROID_APP_NATIVE';
    const LANDING_PAGE_TYPE_IOS_APP_NATIVE = 'LANDING_PAGE_TYPE_IOS_APP_NATIVE';
    const LANDING_PAGE_TYPE_XJ_ANDROID_APP_H5 = 'LANDING_PAGE_TYPE_XJ_ANDROID_APP_H5';
    const LANDING_PAGE_TYPE_XJ_IOS_APP_H5 = 'LANDING_PAGE_TYPE_XJ_IOS_APP_H5';
    const LANDING_PAGE_TYPE_XJ_WEBSITE_H5 = 'LANDING_PAGE_TYPE_XJ_WEBSITE_H5';
    const LANDING_PAGE_TYPE_XJ_WEBSITE_NATIVE = 'LANDING_PAGE_TYPE_XJ_WEBSITE_NATIVE';
    const LANDING_PAGE_TYPE_XJ_ANDROID_APP_NATIVE = 'LANDING_PAGE_TYPE_XJ_ANDROID_APP_NATIVE';
    const LANDING_PAGE_TYPE_XJ_IOS_APP_NATIVE = 'LANDING_PAGE_TYPE_XJ_IOS_APP_NATIVE';
    const LANDING_PAGE_TYPE_FENGYE_EC_SINGLE = 'LANDING_PAGE_TYPE_FENGYE_EC_SINGLE';
    const LANDING_PAGE_TYPE_FENGYE_EC_TOGETHER = 'LANDING_PAGE_TYPE_FENGYE_EC_TOGETHER';
    const LANDING_PAGE_TYPE_FENGYE_EC_FOCUS = 'LANDING_PAGE_TYPE_FENGYE_EC_FOCUS';
    const LANDING_PAGE_TYPE_FENGYE_EC_COMMON = 'LANDING_PAGE_TYPE_FENGYE_EC_COMMON';
    const LANDING_PAGE_TYPE_FENGYE_EC_WECHAT_MINIPROGRAM = 'LANDING_PAGE_TYPE_FENGYE_EC_WECHAT_MINIPROGRAM';
    const LANDING_PAGE_TYPE_PLAY_H5 = 'LANDING_PAGE_TYPE_PLAY_H5';
    const LANDING_PAGE_TYPE_YOUZAN_SINGLE = 'LANDING_PAGE_TYPE_YOUZAN_SINGLE';
    const LANDING_PAGE_TYPE_YOUZAN_TOGETHER = 'LANDING_PAGE_TYPE_YOUZAN_TOGETHER';
    const LANDING_PAGE_TYPE_YOUZAN_WECHAT_MINIPROGRAM = 'LANDING_PAGE_TYPE_YOUZAN_WECHAT_MINIPROGRAM';
    const LANDING_PAGE_TYPE_YIYE_FORM = 'LANDING_PAGE_TYPE_YIYE_FORM';
    const LANDING_PAGE_TYPE_JINSHUJU_FORM = 'LANDING_PAGE_TYPE_JINSHUJU_FORM';
    const LANDING_PAGE_TYPE_WEIMOB_PRODUCTSET = 'LANDING_PAGE_TYPE_WEIMOB_PRODUCTSET';
    const LANDING_PAGE_TYPE_WEIMOB_PROMOTION = 'LANDING_PAGE_TYPE_WEIMOB_PROMOTION';
    const LANDING_PAGE_TYPE_WEIMOB_PRODUCT = 'LANDING_PAGE_TYPE_WEIMOB_PRODUCT';
    const LANDING_PAGE_TYPE_WEIMOB_H5 = 'LANDING_PAGE_TYPE_WEIMOB_H5';
    const LANDING_PAGE_TYPE_WEIMOB_WECHAT_MINIPROGRAM = 'LANDING_PAGE_TYPE_WEIMOB_WECHAT_MINIPROGRAM';
    const LANDING_PAGE_TYPE_QQ_MOBILE_MINI_PROGRAM = 'LANDING_PAGE_TYPE_QQ_MOBILE_MINI_PROGRAM';
    const LANDING_PAGE_TYPE_QQ_BROWSER_MINI_PROGRAM = 'LANDING_PAGE_TYPE_QQ_BROWSER_MINI_PROGRAM';
    const LANDING_PAGE_TYPE_WECHAT_NATIVE = 'LANDING_PAGE_TYPE_WECHAT_NATIVE';
    const LANDING_PAGE_TYPE_WECHAT_H5 = 'LANDING_PAGE_TYPE_WECHAT_H5';
    const LANDING_PAGE_TYPE_WECHAT_OFFICIAL_ACCOUNT_ARTICLE = 'LANDING_PAGE_TYPE_WECHAT_OFFICIAL_ACCOUNT_ARTICLE';
    const LANDING_PAGE_TYPE_WECHAT_COUPON = 'LANDING_PAGE_TYPE_WECHAT_COUPON';
    const LANDING_PAGE_TYPE_WECHAT_OFFICIAL_ACCOUNT_DETAIL = 'LANDING_PAGE_TYPE_WECHAT_OFFICIAL_ACCOUNT_DETAIL';
    const LANDING_PAGE_TYPE_WECHAT_APPSTORE_MOMENTS = 'LANDING_PAGE_TYPE_WECHAT_APPSTORE_MOMENTS';
    const LANDING_PAGE_TYPE_WECHAT_H5_TEMPLATE = 'LANDING_PAGE_TYPE_WECHAT_H5_TEMPLATE';
    const LANDING_PAGE_TYPE_WECHAT_MOMENTS_SIMPLE_NATIVE = 'LANDING_PAGE_TYPE_WECHAT_MOMENTS_SIMPLE_NATIVE';
    const LANDING_PAGE_TYPE_WECHAT_FULL_SCREEN = 'LANDING_PAGE_TYPE_WECHAT_FULL_SCREEN';
    const LANDING_PAGE_TYPE_WECHAT_BASE_DETAILS = 'LANDING_PAGE_TYPE_WECHAT_BASE_DETAILS';
    const LANDING_PAGE_TYPE_WECHAT_PICTURE_DETAILS = 'LANDING_PAGE_TYPE_WECHAT_PICTURE_DETAILS';
    const LANDING_PAGE_TYPE_WECHAT_STORE = 'LANDING_PAGE_TYPE_WECHAT_STORE';
    const LANDING_PAGE_TYPE_WECHAT_MOMENTS_H5_BRAND = 'LANDING_PAGE_TYPE_WECHAT_MOMENTS_H5_BRAND';
    const LANDING_PAGE_TYPE_WECHAT_MOMENTS_PICTURE_FORM = 'LANDING_PAGE_TYPE_WECHAT_MOMENTS_PICTURE_FORM';
    const LANDING_PAGE_TYPE_WECHAT_MOMENTS_VIDEO_FORM = 'LANDING_PAGE_TYPE_WECHAT_MOMENTS_VIDEO_FORM';
    const LANDING_PAGE_TYPE_WECHAT_MOMENTS_APPLIED_TEXT = 'LANDING_PAGE_TYPE_WECHAT_MOMENTS_APPLIED_TEXT';
    const LANDING_PAGE_TYPE_WECHAT_MOMENTS_APPLIED_VIDEO = 'LANDING_PAGE_TYPE_WECHAT_MOMENTS_APPLIED_VIDEO';
    const LANDING_PAGE_TYPE_WECHAT_FORM_TEMPLATE = 'LANDING_PAGE_TYPE_WECHAT_FORM_TEMPLATE';
    const LANDING_PAGE_TYPE_WECHAT_VOTING_TEMPLATE = 'LANDING_PAGE_TYPE_WECHAT_VOTING_TEMPLATE';
    const LANDING_PAGE_TYPE_WECHAT_PAYMENT_COUPONS = 'LANDING_PAGE_TYPE_WECHAT_PAYMENT_COUPONS';
    const LANDING_PAGE_TYPE_WECHAT_MINI_GAME = 'LANDING_PAGE_TYPE_WECHAT_MINI_GAME';
    const LANDING_PAGE_TYPE_WECHAT_NATIVE_BETA = 'LANDING_PAGE_TYPE_WECHAT_NATIVE_BETA';
    const LANDING_PAGE_TYPE_WECHAT_CALL_DAILOG = 'LANDING_PAGE_TYPE_WECHAT_CALL_DAILOG';
    const LANDING_PAGE_TYPE_WECHAT_FOCUS_DAILOG = 'LANDING_PAGE_TYPE_WECHAT_FOCUS_DAILOG';
    const LANDING_PAGE_TYPE_WECHAT_MINI_PROGRAM = 'LANDING_PAGE_TYPE_WECHAT_MINI_PROGRAM';
    const LANDING_PAGE_TYPE_STURNUS_IMAX = 'LANDING_PAGE_TYPE_STURNUS_IMAX';
    const LANDING_PAGE_TYPE_TENCENT_NEWS_SOFT_ARTICLE = 'LANDING_PAGE_TYPE_TENCENT_NEWS_SOFT_ARTICLE';
    const LANDING_PAGE_TYPE_TENCENT_NEWS_LIVE = 'LANDING_PAGE_TYPE_TENCENT_NEWS_LIVE';
    const LANDING_PAGE_TYPE_XJ_OTT = 'LANDING_PAGE_TYPE_XJ_OTT';
    const LANDING_PAGE_TYPE_YUEBAO_QUICKAPP = 'LANDING_PAGE_TYPE_YUEBAO_QUICKAPP';
    const LANDING_PAGE_TYPE_YUEBAO_OFFICIAL_ACCOUNT_ARTICLE = 'LANDING_PAGE_TYPE_YUEBAO_OFFICIAL_ACCOUNT_ARTICLE';
    const LANDING_PAGE_TYPE_XJ_QUICK = 'LANDING_PAGE_TYPE_XJ_QUICK';
    const LANDING_PAGE_TYPE_QQ_MINI_GAME = 'LANDING_PAGE_TYPE_QQ_MINI_GAME';
    const LANDING_PAGE_TYPE_WECHAT_APPOINTMENT_CARD = 'LANDING_PAGE_TYPE_WECHAT_APPOINTMENT_CARD';
    const LANDING_PAGE_TYPE_WECHAT_CONSULT = 'LANDING_PAGE_TYPE_WECHAT_CONSULT';
    const LANDING_PAGE_TYPE_WECOM_CONSULT = 'LANDING_PAGE_TYPE_WECOM_CONSULT';
    const LANDING_PAGE_TYPE_CHANNELS = 'LANDING_PAGE_TYPE_CHANNELS';
    const LANDING_PAGE_TYPE_CHANNELS_WATCH_LIVE = 'LANDING_PAGE_TYPE_CHANNELS_WATCH_LIVE';
    const LANDING_PAGE_TYPE_CHANNELS_RESERVE_LIVE = 'LANDING_PAGE_TYPE_CHANNELS_RESERVE_LIVE';
    const LANDING_PAGE_TYPE_CHANNELS_FOLLOW_CARD = 'LANDING_PAGE_TYPE_CHANNELS_FOLLOW_CARD';
    const LANDING_PAGE_TYPE_ANDROID_DIRECT_DOWNLOAD = 'LANDING_PAGE_TYPE_ANDROID_DIRECT_DOWNLOAD';
    const LANDING_PAGE_TYPE_LINGQUE_H5 = 'LANDING_PAGE_TYPE_LINGQUE_H5';
    const LANDING_PAGE_TYPE_LINGQUE_MINI_PROGRAM = 'LANDING_PAGE_TYPE_LINGQUE_MINI_PROGRAM';
    const DEEP_LINK = 'DEEP_LINK';
    const H5 = 'H5';
    const MINI_PROGRAM = 'MINI_PROGRAM';
    const UNIVERSAL_LINK = 'UNIVERSAL_LINK';
    const LANDING_PAGE_TYPE_MAIBAO_SINGLE = 'LANDING_PAGE_TYPE_MAIBAO_SINGLE';
    const LANDING_PAGE_TYPE_MAIBAO_TOGETHER = 'LANDING_PAGE_TYPE_MAIBAO_TOGETHER';
    const LANDING_PAGE_TYPE_MAIBAO_FOCUS = 'LANDING_PAGE_TYPE_MAIBAO_FOCUS';
    const LANDING_PAGE_TYPE_YUEBAO_APP = 'LANDING_PAGE_TYPE_YUEBAO_APP';
    const LANDING_PAGE_TYPE_YUEBAO_IOS = 'LANDING_PAGE_TYPE_YUEBAO_IOS';
    const LANDING_PAGE_TYPE_YUEBAO_ANDROID = 'LANDING_PAGE_TYPE_YUEBAO_ANDROID';
    const LANDING_PAGE_TYPE_CHEXUNDA_MINI_PROGRAM = 'LANDING_PAGE_TYPE_CHEXUNDA_MINI_PROGRAM';
    const LANDING_PAGE_TYPE_FENGSHU_MINI_PROGRAM = 'LANDING_PAGE_TYPE_FENGSHU_MINI_PROGRAM';
    const LANDING_PAGE_TYPE_DEEP_LINK = 'LANDING_PAGE_TYPE_DEEP_LINK';
    const LANDING_PAGE_TYPE_UNIVERSAL_LINK = 'LANDING_PAGE_TYPE_UNIVERSAL_LINK';
    const LANDING_PAGE_TYPE_WECHAT_NATIVE_WEBVIEW = 'LANDING_PAGE_TYPE_WECHAT_NATIVE_WEBVIEW';
    const LANDING_PAGE_TYPE_WECHAT_MOMENTS_SCAN_PHOTO = 'LANDING_PAGE_TYPE_WECHAT_MOMENTS_SCAN_PHOTO';
    const LANDING_PAGE_TYPE_WECHAT_MOMENTS_SUBSCRIPTION = 'LANDING_PAGE_TYPE_WECHAT_MOMENTS_SUBSCRIPTION';
    const LANDING_PAGE_TYPE_WECHAT_STATUS_FOOTER = 'LANDING_PAGE_TYPE_WECHAT_STATUS_FOOTER';
    const LANDING_PAGE_TYPE_WECHAT_XJ_IOS_APP_H5 = 'LANDING_PAGE_TYPE_WECHAT_XJ_IOS_APP_H5';
    const LANDING_PAGE_TYPE_WECHAT_VIDEO_TOPIC = 'LANDING_PAGE_TYPE_WECHAT_VIDEO_TOPIC';
    const LANDING_PAGE_TYPE_WECHAT_XJ_ANDROID_APP_H5 = 'LANDING_PAGE_TYPE_WECHAT_XJ_ANDROID_APP_H5';
    const LANDING_PAGE_TYPE_WECHAT_XJ_WEBSITE_H5 = 'LANDING_PAGE_TYPE_WECHAT_XJ_WEBSITE_H5';
    const LANDING_PAGE_TYPE_WECHAT_RED_PACKET_COVER = 'LANDING_PAGE_TYPE_WECHAT_RED_PACKET_COVER';
    const LANDING_PAGE_TYPE_WECHAT_CHANNELS_HALF_CARD = 'LANDING_PAGE_TYPE_WECHAT_CHANNELS_HALF_CARD';
    const LANDING_PAGE_TYPE_CHANNELS_USER_PROFILE = 'LANDING_PAGE_TYPE_CHANNELS_USER_PROFILE';
    const LANDING_PAGE_TYPE_NOT_USED = 'LANDING_PAGE_TYPE_NOT_USED';
    const LANDING_PAGE_TYPE_CUSTOM_TV = 'LANDING_PAGE_TYPE_CUSTOM_TV';
    const LANDING_PAGE_TYPE_H5_PROFILE = 'LANDING_PAGE_TYPE_H5_PROFILE';
    const LANDING_PAGE_TYPE_SEARCH_BRAND_AREA = 'LANDING_PAGE_TYPE_SEARCH_BRAND_AREA';
    const LANDING_PAGE_TYPE_WECHAT_CHANNELS_PROFILE = 'LANDING_PAGE_TYPE_WECHAT_CHANNELS_PROFILE';
    const _DEFAULT = 'DEFAULT';
    const DEEP_LINK_IOS = 'DEEP_LINK_IOS';
    const DEEP_LINK_ANDROID = 'DEEP_LINK_ANDROID';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LANDING_PAGE_TYPE_UNKNOWN,
            self::LANDING_PAGE_TYPE_ANDROID_APP,
            self::LANDING_PAGE_TYPE_IOS_APP,
            self::LANDING_PAGE_TYPE_FENGYE_WEB,
            self::LANDING_PAGE_TYPE_FENGYE_LBS,
            self::LANDING_PAGE_TYPE_NATIVE,
            self::LANDING_PAGE_TYPE_ANDROID_APP_NATIVE,
            self::LANDING_PAGE_TYPE_IOS_APP_NATIVE,
            self::LANDING_PAGE_TYPE_XJ_ANDROID_APP_H5,
            self::LANDING_PAGE_TYPE_XJ_IOS_APP_H5,
            self::LANDING_PAGE_TYPE_XJ_WEBSITE_H5,
            self::LANDING_PAGE_TYPE_XJ_WEBSITE_NATIVE,
            self::LANDING_PAGE_TYPE_XJ_ANDROID_APP_NATIVE,
            self::LANDING_PAGE_TYPE_XJ_IOS_APP_NATIVE,
            self::LANDING_PAGE_TYPE_FENGYE_EC_SINGLE,
            self::LANDING_PAGE_TYPE_FENGYE_EC_TOGETHER,
            self::LANDING_PAGE_TYPE_FENGYE_EC_FOCUS,
            self::LANDING_PAGE_TYPE_FENGYE_EC_COMMON,
            self::LANDING_PAGE_TYPE_FENGYE_EC_WECHAT_MINIPROGRAM,
            self::LANDING_PAGE_TYPE_PLAY_H5,
            self::LANDING_PAGE_TYPE_YOUZAN_SINGLE,
            self::LANDING_PAGE_TYPE_YOUZAN_TOGETHER,
            self::LANDING_PAGE_TYPE_YOUZAN_WECHAT_MINIPROGRAM,
            self::LANDING_PAGE_TYPE_YIYE_FORM,
            self::LANDING_PAGE_TYPE_JINSHUJU_FORM,
            self::LANDING_PAGE_TYPE_WEIMOB_PRODUCTSET,
            self::LANDING_PAGE_TYPE_WEIMOB_PROMOTION,
            self::LANDING_PAGE_TYPE_WEIMOB_PRODUCT,
            self::LANDING_PAGE_TYPE_WEIMOB_H5,
            self::LANDING_PAGE_TYPE_WEIMOB_WECHAT_MINIPROGRAM,
            self::LANDING_PAGE_TYPE_QQ_MOBILE_MINI_PROGRAM,
            self::LANDING_PAGE_TYPE_QQ_BROWSER_MINI_PROGRAM,
            self::LANDING_PAGE_TYPE_WECHAT_NATIVE,
            self::LANDING_PAGE_TYPE_WECHAT_H5,
            self::LANDING_PAGE_TYPE_WECHAT_OFFICIAL_ACCOUNT_ARTICLE,
            self::LANDING_PAGE_TYPE_WECHAT_COUPON,
            self::LANDING_PAGE_TYPE_WECHAT_OFFICIAL_ACCOUNT_DETAIL,
            self::LANDING_PAGE_TYPE_WECHAT_APPSTORE_MOMENTS,
            self::LANDING_PAGE_TYPE_WECHAT_H5_TEMPLATE,
            self::LANDING_PAGE_TYPE_WECHAT_MOMENTS_SIMPLE_NATIVE,
            self::LANDING_PAGE_TYPE_WECHAT_FULL_SCREEN,
            self::LANDING_PAGE_TYPE_WECHAT_BASE_DETAILS,
            self::LANDING_PAGE_TYPE_WECHAT_PICTURE_DETAILS,
            self::LANDING_PAGE_TYPE_WECHAT_STORE,
            self::LANDING_PAGE_TYPE_WECHAT_MOMENTS_H5_BRAND,
            self::LANDING_PAGE_TYPE_WECHAT_MOMENTS_PICTURE_FORM,
            self::LANDING_PAGE_TYPE_WECHAT_MOMENTS_VIDEO_FORM,
            self::LANDING_PAGE_TYPE_WECHAT_MOMENTS_APPLIED_TEXT,
            self::LANDING_PAGE_TYPE_WECHAT_MOMENTS_APPLIED_VIDEO,
            self::LANDING_PAGE_TYPE_WECHAT_FORM_TEMPLATE,
            self::LANDING_PAGE_TYPE_WECHAT_VOTING_TEMPLATE,
            self::LANDING_PAGE_TYPE_WECHAT_PAYMENT_COUPONS,
            self::LANDING_PAGE_TYPE_WECHAT_MINI_GAME,
            self::LANDING_PAGE_TYPE_WECHAT_NATIVE_BETA,
            self::LANDING_PAGE_TYPE_WECHAT_CALL_DAILOG,
            self::LANDING_PAGE_TYPE_WECHAT_FOCUS_DAILOG,
            self::LANDING_PAGE_TYPE_WECHAT_MINI_PROGRAM,
            self::LANDING_PAGE_TYPE_STURNUS_IMAX,
            self::LANDING_PAGE_TYPE_TENCENT_NEWS_SOFT_ARTICLE,
            self::LANDING_PAGE_TYPE_TENCENT_NEWS_LIVE,
            self::LANDING_PAGE_TYPE_XJ_OTT,
            self::LANDING_PAGE_TYPE_YUEBAO_QUICKAPP,
            self::LANDING_PAGE_TYPE_YUEBAO_OFFICIAL_ACCOUNT_ARTICLE,
            self::LANDING_PAGE_TYPE_XJ_QUICK,
            self::LANDING_PAGE_TYPE_QQ_MINI_GAME,
            self::LANDING_PAGE_TYPE_WECHAT_APPOINTMENT_CARD,
            self::LANDING_PAGE_TYPE_WECHAT_CONSULT,
            self::LANDING_PAGE_TYPE_WECOM_CONSULT,
            self::LANDING_PAGE_TYPE_CHANNELS,
            self::LANDING_PAGE_TYPE_CHANNELS_WATCH_LIVE,
            self::LANDING_PAGE_TYPE_CHANNELS_RESERVE_LIVE,
            self::LANDING_PAGE_TYPE_CHANNELS_FOLLOW_CARD,
            self::LANDING_PAGE_TYPE_ANDROID_DIRECT_DOWNLOAD,
            self::LANDING_PAGE_TYPE_LINGQUE_H5,
            self::LANDING_PAGE_TYPE_LINGQUE_MINI_PROGRAM,
            self::DEEP_LINK,
            self::H5,
            self::MINI_PROGRAM,
            self::UNIVERSAL_LINK,
            self::LANDING_PAGE_TYPE_MAIBAO_SINGLE,
            self::LANDING_PAGE_TYPE_MAIBAO_TOGETHER,
            self::LANDING_PAGE_TYPE_MAIBAO_FOCUS,
            self::LANDING_PAGE_TYPE_YUEBAO_APP,
            self::LANDING_PAGE_TYPE_YUEBAO_IOS,
            self::LANDING_PAGE_TYPE_YUEBAO_ANDROID,
            self::LANDING_PAGE_TYPE_CHEXUNDA_MINI_PROGRAM,
            self::LANDING_PAGE_TYPE_FENGSHU_MINI_PROGRAM,
            self::LANDING_PAGE_TYPE_DEEP_LINK,
            self::LANDING_PAGE_TYPE_UNIVERSAL_LINK,
            self::LANDING_PAGE_TYPE_WECHAT_NATIVE_WEBVIEW,
            self::LANDING_PAGE_TYPE_WECHAT_MOMENTS_SCAN_PHOTO,
            self::LANDING_PAGE_TYPE_WECHAT_MOMENTS_SUBSCRIPTION,
            self::LANDING_PAGE_TYPE_WECHAT_STATUS_FOOTER,
            self::LANDING_PAGE_TYPE_WECHAT_XJ_IOS_APP_H5,
            self::LANDING_PAGE_TYPE_WECHAT_VIDEO_TOPIC,
            self::LANDING_PAGE_TYPE_WECHAT_XJ_ANDROID_APP_H5,
            self::LANDING_PAGE_TYPE_WECHAT_XJ_WEBSITE_H5,
            self::LANDING_PAGE_TYPE_WECHAT_RED_PACKET_COVER,
            self::LANDING_PAGE_TYPE_WECHAT_CHANNELS_HALF_CARD,
            self::LANDING_PAGE_TYPE_CHANNELS_USER_PROFILE,
            self::LANDING_PAGE_TYPE_NOT_USED,
            self::LANDING_PAGE_TYPE_CUSTOM_TV,
            self::LANDING_PAGE_TYPE_H5_PROFILE,
            self::LANDING_PAGE_TYPE_SEARCH_BRAND_AREA,
            self::LANDING_PAGE_TYPE_WECHAT_CHANNELS_PROFILE,
            self::_DEFAULT,
            self::DEEP_LINK_IOS,
            self::DEEP_LINK_ANDROID,
        ];
    }
}


