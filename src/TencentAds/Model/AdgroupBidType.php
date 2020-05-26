<?php
/**
 * AdgroupBidType
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
 * AdgroupBidType Class Doc Comment
 *
 * @category Class
 * @description 扣费方式
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdgroupBidType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'UNKNOWN';
    const BID_TYPE_CPC = 'BID_TYPE_CPC';
    const BID_TYPE_CPA = 'BID_TYPE_CPA';
    const BID_TYPE_CPS = 'BID_TYPE_CPS';
    const BID_TYPE_CPM = 'BID_TYPE_CPM';
    const BID_TYPE_CPD = 'BID_TYPE_CPD';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::BID_TYPE_CPC,
            self::BID_TYPE_CPA,
            self::BID_TYPE_CPS,
            self::BID_TYPE_CPM,
            self::BID_TYPE_CPD,
        ];
    }
}


