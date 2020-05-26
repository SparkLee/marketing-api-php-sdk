<?php
/**
 * DynamicCreativePageType
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
 * DynamicCreativePageType Class Doc Comment
 *
 * @category Class
 * @description 落地页类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DynamicCreativePageType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'UNKNOWN';
    const PAGE_TYPE_DEFAULT = 'PAGE_TYPE_DEFAULT';
    const PAGE_TYPE_TSA_APP = 'PAGE_TYPE_TSA_APP';
    const PAGE_TYPE_TSA_WEB_NONE_ECOMMERCE = 'PAGE_TYPE_TSA_WEB_NONE_ECOMMERCE';
    const PAGE_TYPE_CANVAS_WECHAT = 'PAGE_TYPE_CANVAS_WECHAT';
    const PAGE_TYPE_MINI_PROGRAM_WECHAT = 'PAGE_TYPE_MINI_PROGRAM_WECHAT';
    const PAGE_TYPE_FENGYE_ECOMMERCE = 'PAGE_TYPE_FENGYE_ECOMMERCE';
    const PAGE_TYPE_MINI_GAME_WECHAT = 'PAGE_TYPE_MINI_GAME_WECHAT';
    const PAGE_TYPE_MINI_PROGRAM_QQ = 'PAGE_TYPE_MINI_PROGRAM_QQ';
    const PAGE_TYPE_MINI_PROGRAM_CANVAS_WECHAT = 'PAGE_TYPE_MINI_PROGRAM_CANVAS_WECHAT';
    const PAGE_TYPE_MINI_GAME_QQ = 'PAGE_TYPE_MINI_GAME_QQ';
    const PAGE_TYPE_ARTICAL_WECHAT = 'PAGE_TYPE_ARTICAL_WECHAT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::PAGE_TYPE_DEFAULT,
            self::PAGE_TYPE_TSA_APP,
            self::PAGE_TYPE_TSA_WEB_NONE_ECOMMERCE,
            self::PAGE_TYPE_CANVAS_WECHAT,
            self::PAGE_TYPE_MINI_PROGRAM_WECHAT,
            self::PAGE_TYPE_FENGYE_ECOMMERCE,
            self::PAGE_TYPE_MINI_GAME_WECHAT,
            self::PAGE_TYPE_MINI_PROGRAM_QQ,
            self::PAGE_TYPE_MINI_PROGRAM_CANVAS_WECHAT,
            self::PAGE_TYPE_MINI_GAME_QQ,
            self::PAGE_TYPE_ARTICAL_WECHAT,
        ];
    }
}


