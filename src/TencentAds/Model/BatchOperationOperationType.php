<?php
/**
 * BatchOperationOperationType
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
 * BatchOperationOperationType Class Doc Comment
 *
 * @category Class
 * @description 操作类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BatchOperationOperationType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'UNKNOWN';
    const OPERATION_TYPE_DATE = 'OPERATION_TYPE_DATE';
    const OPERATION_TYPE_TIME_SERIES = 'OPERATION_TYPE_TIME_SERIES';
    const OPERATION_TYPE_CONFIGURED_STATUS = 'OPERATION_TYPE_CONFIGURED_STATUS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::OPERATION_TYPE_DATE,
            self::OPERATION_TYPE_TIME_SERIES,
            self::OPERATION_TYPE_CONFIGURED_STATUS,
        ];
    }
}


