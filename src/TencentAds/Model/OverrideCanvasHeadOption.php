<?php
/**
 * OverrideCanvasHeadOption
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
 * OverrideCanvasHeadOption Class Doc Comment
 *
 * @category Class
 * @description 原生推广页顶部素材和广告创意素材之间的替换关系，（仅在朋友圈广告使用原生推广页情况下有效）
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OverrideCanvasHeadOption
{
    /**
     * Possible values of this enum
     */
    const CANVAS_OVERRIDE_CREATIVE = 'OPTION_CANVAS_OVERRIDE_CREATIVE';
    const CREATIVE_OVERRIDE_CANVAS = 'OPTION_CREATIVE_OVERRIDE_CANVAS';
    const KEEP_DIFFERENT = 'OPTION_KEEP_DIFFERENT';
    const CREATIVE_OVERRIDE_CANVAS_DYNAMIC = 'OPTION_CREATIVE_OVERRIDE_CANVAS_DYNAMIC';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CANVAS_OVERRIDE_CREATIVE,
            self::CREATIVE_OVERRIDE_CANVAS,
            self::KEEP_DIFFERENT,
            self::CREATIVE_OVERRIDE_CANVAS_DYNAMIC,
        ];
    }
}


