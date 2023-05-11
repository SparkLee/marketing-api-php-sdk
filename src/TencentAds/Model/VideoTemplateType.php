<?php
/**
 * VideoTemplateType
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
 * VideoTemplateType Class Doc Comment
 *
 * @category Class
 * @description 模板类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VideoTemplateType
{
    /**
     * Possible values of this enum
     */
    const IMG_TRANSFORM = 'VIDEO_TEMPLATE_TYPE_IMG_TRANSFORM';
    const TRANSPARENT = 'VIDEO_TEMPLATE_TYPE_TRANSPARENT';
    const CHANNEL_TRANSPARENT = 'VIDEO_TEMPLATE_TYPE_CHANNEL_TRANSPARENT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IMG_TRANSFORM,
            self::TRANSPARENT,
            self::CHANNEL_TRANSPARENT,
        ];
    }
}


