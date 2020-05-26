<?php
/**
 * AdCreativeAdcreativeLabelDirection
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
 * AdCreativeAdcreativeLabelDirection Class Doc Comment
 *
 * @category Class
 * @description 标签方向
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdCreativeAdcreativeLabelDirection
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'UNKNOWN';
    const LABEL_DIRECTION_LEFT = 'LABEL_DIRECTION_LEFT';
    const LABEL_DIRECTION_RIGHT = 'LABEL_DIRECTION_RIGHT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::LABEL_DIRECTION_LEFT,
            self::LABEL_DIRECTION_RIGHT,
        ];
    }
}


