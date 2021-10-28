<?php
/**
 * LandingPagePlatform
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
 * LandingPagePlatform Class Doc Comment
 *
 * @category Class
 * @description 落地页制作平台
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LandingPagePlatform
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'LANDING_PAGE_PLATFORM_UNKNOWN';
    const TSA = 'LANDING_PAGE_PLATFORM_TSA';
    const FENGYE_EC = 'LANDING_PAGE_PLATFORM_FENGYE_EC';
    const FENGYE_DEFAULT = 'LANDING_PAGE_PLATFORM_FENGYE_DEFAULT';
    const XIJING = 'LANDING_PAGE_PLATFORM_XIJING';
    const YOUZAN = 'LANDING_PAGE_PLATFORM_YOUZAN';
    const MP = 'LANDING_PAGE_PLATFORM_MP';
    const APP_STORE = 'LANDING_PAGE_PLATFORM_APP_STORE';
    const YIYE = 'LANDING_PAGE_PLATFORM_YIYE';
    const JINSHUJU = 'LANDING_PAGE_PLATFORM_JINSHUJU';
    const WEIMOB = 'LANDING_PAGE_PLATFORM_WEIMOB';
    const QQ_MOBILE = 'LANDING_PAGE_PLATFORM_QQ_MOBILE';
    const QQ_BROWSER = 'LANDING_PAGE_PLATFORM_QQ_BROWSER';
    const PLAY = 'LANDING_PAGE_PLATFORM_PLAY';
    const YUEBAO = 'LANDING_PAGE_PLATFORM_YUEBAO';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::TSA,
            self::FENGYE_EC,
            self::FENGYE_DEFAULT,
            self::XIJING,
            self::YOUZAN,
            self::MP,
            self::APP_STORE,
            self::YIYE,
            self::JINSHUJU,
            self::WEIMOB,
            self::QQ_MOBILE,
            self::QQ_BROWSER,
            self::PLAY,
            self::YUEBAO,
        ];
    }
}


