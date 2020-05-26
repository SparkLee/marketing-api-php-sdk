<?php
/**
 * AdgroupBidStrategyInput
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
 * AdgroupBidStrategyInput Class Doc Comment
 *
 * @category Class
 * @description 出价策略，仅ocpa广告可设置
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdgroupBidStrategyInput
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'UNKNOWN';
    const BID_STRATEGY_UNSUPPORTED = 'BID_STRATEGY_UNSUPPORTED';
    const BID_STRATEGY_AVERAGE_COST = 'BID_STRATEGY_AVERAGE_COST';
    const BID_STRATEGY_TARGET_COST = 'BID_STRATEGY_TARGET_COST';
    const BID_STRATEGY_PRIORITY_LOW_COST = 'BID_STRATEGY_PRIORITY_LOW_COST';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::BID_STRATEGY_UNSUPPORTED,
            self::BID_STRATEGY_AVERAGE_COST,
            self::BID_STRATEGY_TARGET_COST,
            self::BID_STRATEGY_PRIORITY_LOW_COST,
        ];
    }
}


