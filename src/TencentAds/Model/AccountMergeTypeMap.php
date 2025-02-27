<?php
/**
 * AccountMergeTypeMap
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
 * AccountMergeTypeMap Class Doc Comment
 *
 * @category Class
 * @description 合并资金账户类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountMergeTypeMap
{
    /**
     * Possible values of this enum
     */
    const AD_RECHARGE = 'FUND_TYPE_AD_RECHARGE';
    const JD_PRIVILEGE = 'FUND_TYPE_JD_PRIVILEGE';
    const JD_WIRELESS_CASH = 'FUND_TYPE_JD_WIRELESS_CASH';
    const UNION_GIFT = 'FUND_TYPE_UNION_GIFT';
    const MP_CASH = 'FUND_TYPE_MP_CASH';
    const MP_BANK = 'FUND_TYPE_MP_BANK';
    const MP_GIFT = 'FUND_TYPE_MP_GIFT';
    const CONTRACT_GIFT_VIRTUAL = 'FUND_TYPE_CONTRACT_GIFT_VIRTUAL';
    const CONTRACT_ASSIGN_VIRTUAL = 'FUND_TYPE_CONTRACT_ASSIGN_VIRTUAL';
    const COMPENSATE_VIRTUAL = 'FUND_TYPE_COMPENSATE_VIRTUAL';
    const INTERNAL_QUOTA = 'FUND_TYPE_INTERNAL_QUOTA';
    const TEST_VIRTUAL = 'FUND_TYPE_TEST_VIRTUAL';
    const TCC_GIFT = 'FUND_TYPE_TCC_GIFT';
    const SPECIAL_GIFT = 'FUND_TYPE_SPECIAL_GIFT';
    const MP_GAME_DEVELOPER_WORKING_FUND = 'FUND_TYPE_MP_GAME_DEVELOPER_WORKING_FUND';
    const MP_GAME_DEVELOPER_GIFT = 'FUND_TYPE_MP_GAME_DEVELOPER_GIFT';
    const FLOW_SOURCE_AD_FUND = 'FUND_TYPE_FLOW_SOURCE_AD_FUND';
    const ANDROID_ORIENTED_GIFT = 'FUND_TYPE_ANDROID_ORIENTED_GIFT';
    const LOCATION_PROMOTION_REWARDS = 'FUND_TYPE_LOCATION_PROMOTION_REWARDS';
    const GIFT_RESTRICT = 'FUND_TYPE_GIFT_RESTRICT';
    const UNSUPPORTED = 'FUND_TYPE_UNSUPPORTED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AD_RECHARGE,
            self::JD_PRIVILEGE,
            self::JD_WIRELESS_CASH,
            self::UNION_GIFT,
            self::MP_CASH,
            self::MP_BANK,
            self::MP_GIFT,
            self::CONTRACT_GIFT_VIRTUAL,
            self::CONTRACT_ASSIGN_VIRTUAL,
            self::COMPENSATE_VIRTUAL,
            self::INTERNAL_QUOTA,
            self::TEST_VIRTUAL,
            self::TCC_GIFT,
            self::SPECIAL_GIFT,
            self::MP_GAME_DEVELOPER_WORKING_FUND,
            self::MP_GAME_DEVELOPER_GIFT,
            self::FLOW_SOURCE_AD_FUND,
            self::ANDROID_ORIENTED_GIFT,
            self::LOCATION_PROMOTION_REWARDS,
            self::GIFT_RESTRICT,
            self::UNSUPPORTED,
        ];
    }
}


