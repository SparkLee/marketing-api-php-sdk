<?php
/**
 * SplitTestSplitTestStatus
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
 * SplitTestSplitTestStatus Class Doc Comment
 *
 * @category Class
 * @description 拆分对比实验状态
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SplitTestSplitTestStatus
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'UNKNOWN';
    const SPLIT_TEST_STATUS_NORMAL = 'SPLIT_TEST_STATUS_NORMAL';
    const SPLIT_TEST_STATUS_SUSPEND = 'SPLIT_TEST_STATUS_SUSPEND';
    const SPLIT_TEST_STATUS_PUBLISH = 'SPLIT_TEST_STATUS_PUBLISH';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::SPLIT_TEST_STATUS_NORMAL,
            self::SPLIT_TEST_STATUS_SUSPEND,
            self::SPLIT_TEST_STATUS_PUBLISH,
        ];
    }
}


