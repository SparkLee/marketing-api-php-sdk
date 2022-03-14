<?php
/**
 * CreativeUrgeResult
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
 * CreativeUrgeResult Class Doc Comment
 *
 * @category Class
 * @description 创意催审结果
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreativeUrgeResult
{
    /**
     * Possible values of this enum
     */
    const SUCCESS = 'SUCCESS';
    const SYSTEM_ERROR = 'SYSTEM_ERROR';
    const ACCOUNT_NO_PERMISSION = 'ACCOUNT_NO_PERMISSION';
    const ACCOUNT_REACH_URGE_UPPER_LIMIT = 'ACCOUNT_REACH_URGE_UPPER_LIMIT';
    const AD_ID_NOT_EXIST = 'AD_ID_NOT_EXIST';
    const AD_ID_ALREADY_URGED = 'AD_ID_ALREADY_URGED';
    const AD_ID_NOT_REACH_URGE_TIME = 'AD_ID_NOT_REACH_URGE_TIME';
    const ACCOUNT_NO_BALANCE = 'ACCOUNT_NO_BALANCE';
    const ACCOUNT_PENDING = 'ACCOUNT_PENDING';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SUCCESS,
            self::SYSTEM_ERROR,
            self::ACCOUNT_NO_PERMISSION,
            self::ACCOUNT_REACH_URGE_UPPER_LIMIT,
            self::AD_ID_NOT_EXIST,
            self::AD_ID_ALREADY_URGED,
            self::AD_ID_NOT_REACH_URGE_TIME,
            self::ACCOUNT_NO_BALANCE,
            self::ACCOUNT_PENDING,
        ];
    }
}


