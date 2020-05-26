<?php
/**
 * AdvertiserVirtualFundStatus
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
 * AdvertiserVirtualFundStatus Class Doc Comment
 *
 * @category Class
 * @description 虚拟资金状态
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdvertiserVirtualFundStatus
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'UNKNOWN';
    const FUND_STATUS_NORMAL = 'FUND_STATUS_NORMAL';
    const FUND_STATUS_NOT_ENOUGH = 'FUND_STATUS_NOT_ENOUGH';
    const FUND_STATUS_CLOSED = 'FUND_STATUS_CLOSED';
    const FUND_STATUS_FROZEN = 'FUND_STATUS_FROZEN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::FUND_STATUS_NORMAL,
            self::FUND_STATUS_NOT_ENOUGH,
            self::FUND_STATUS_CLOSED,
            self::FUND_STATUS_FROZEN,
        ];
    }
}


