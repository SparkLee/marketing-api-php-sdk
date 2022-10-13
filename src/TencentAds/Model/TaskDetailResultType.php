<?php
/**
 * TaskDetailResultType
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
 * TaskDetailResultType Class Doc Comment
 *
 * @category Class
 * @description 任务详情每项执行结果类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaskDetailResultType
{
    /**
     * Possible values of this enum
     */
    const PENDING = 'TASK_DETAIL_RESULT_TYPE_PENDING';
    const FAIL = 'TASK_DETAIL_RESULT_TYPE_FAIL';
    const SUCCESS = 'TASK_DETAIL_RESULT_TYPE_SUCCESS';
    const SYSTEM_ERROR = 'TASK_DETAIL_RESULT_TYPE_SYSTEM_ERROR';
    const PROCESSING = 'TASK_DETAIL_RESULT_TYPE_PROCESSING';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PENDING,
            self::FAIL,
            self::SUCCESS,
            self::SYSTEM_ERROR,
            self::PROCESSING,
        ];
    }
}


