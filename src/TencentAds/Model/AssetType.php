<?php
/**
 * AssetType
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
 * AssetType Class Doc Comment
 *
 * @category Class
 * @description 资产类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AssetType
{
    /**
     * Possible values of this enum
     */
    const NDMP = 'ASSET_TYPE_NDMP';
    const XIJING = 'ASSET_TYPE_XIJING';
    const CANVAS_WECHAT = 'ASSET_TYPE_CANVAS_WECHAT';
    const CANVAS_IMAGE = 'ASSET_TYPE_CANVAS_IMAGE';
    const CANVAS_VIDEO = 'ASSET_TYPE_CANVAS_VIDEO';
    const FENGYE = 'ASSET_TYPE_FENGYE';
    const DYNAMIC_AD_TEMPLATE = 'ASSET_TYPE_DYNAMIC_AD_TEMPLATE';
    const AD_QUALIFICATION = 'ASSET_TYPE_AD_QUALIFICATION';
    const CATALOG = 'ASSET_TYPE_CATALOG';
    const ACTION_SET = 'ASSET_TYPE_ACTION_SET';
    const CONVERSION_SPEC = 'ASSET_TYPE_CONVERSION_SPEC';
    const UNION_PACKAGE = 'ASSET_TYPE_UNION_PACKAGE';
    const ACCOUNT_WECHAT_CANVAS = 'ASSET_TYPE_ACCOUNT_WECHAT_CANVAS';
    const PROFILE = 'ASSET_TYPE_PROFILE';
    const LOCAL_STORE = 'ASSET_TYPE_LOCAL_STORE';
    const INTERACTIVE_PRIVATE_TEMPLATE = 'ASSET_TYPE_INTERACTIVE_PRIVATE_TEMPLATE';
    const DN_DATA_SOURCE = 'ASSET_TYPE_DN_DATA_SOURCE';
    const DN_DATA_SET = 'ASSET_TYPE_DN_DATA_SET';
    const DN_FILE = 'ASSET_TYPE_DN_FILE';
    const UNION_APP_URL_CHANNEL = 'ASSET_TYPE_UNION_APP_URL_CHANNEL';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NDMP,
            self::XIJING,
            self::CANVAS_WECHAT,
            self::CANVAS_IMAGE,
            self::CANVAS_VIDEO,
            self::FENGYE,
            self::DYNAMIC_AD_TEMPLATE,
            self::AD_QUALIFICATION,
            self::CATALOG,
            self::ACTION_SET,
            self::CONVERSION_SPEC,
            self::UNION_PACKAGE,
            self::ACCOUNT_WECHAT_CANVAS,
            self::PROFILE,
            self::LOCAL_STORE,
            self::INTERACTIVE_PRIVATE_TEMPLATE,
            self::DN_DATA_SOURCE,
            self::DN_DATA_SET,
            self::DN_FILE,
            self::UNION_APP_URL_CHANNEL,
        ];
    }
}


