<?php
/**
 * FeatureDataFilesUserIdType
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
 * FeatureDataFilesUserIdType Class Doc Comment
 *
 * @category Class
 * @description 用户id类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FeatureDataFilesUserIdType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'UNKNOWN';
    const GDT_OPENID = 'GDT_OPENID';
    const HASH_IDFA = 'HASH_IDFA';
    const HASH_IMEI = 'HASH_IMEI';
    const HASH_MAC = 'HASH_MAC';
    const HASH_QQ = 'HASH_QQ';
    const IDFA = 'IDFA';
    const IMEI = 'IMEI';
    const MAC = 'MAC';
    const MOBILE_QQ_OPENID = 'MOBILE_QQ_OPENID';
    const QQ = 'QQ';
    const WECHAT_OPENID = 'WECHAT_OPENID';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::GDT_OPENID,
            self::HASH_IDFA,
            self::HASH_IMEI,
            self::HASH_MAC,
            self::HASH_QQ,
            self::IDFA,
            self::IMEI,
            self::MAC,
            self::MOBILE_QQ_OPENID,
            self::QQ,
            self::WECHAT_OPENID,
        ];
    }
}


