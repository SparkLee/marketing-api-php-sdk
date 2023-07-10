<?php
/**
 * FileDispatchSwitch
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
 * FileDispatchSwitch Class Doc Comment
 *
 * @category Class
 * @description 批量分发开关标识，SWITCH_ON开启，SWITCH_OFF关闭
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FileDispatchSwitch
{
    /**
     * Possible values of this enum
     */
    const ON = 'SWITCH_ON';
    const OFF = 'SWITCH_OFF';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ON,
            self::OFF,
        ];
    }
}


