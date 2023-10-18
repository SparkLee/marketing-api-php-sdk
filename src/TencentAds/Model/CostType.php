<?php
/**
 * CostType
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
 * CostType Class Doc Comment
 *
 * @category Class
 * @description 扣费方式
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CostType
{
    /**
     * Possible values of this enum
     */
    const BID_TYPE_CPC = 'BID_TYPE_CPC';
    const BID_TYPE_CPA = 'BID_TYPE_CPA';
    const BID_TYPE_CPS = 'BID_TYPE_CPS';
    const BID_TYPE_CPM = 'BID_TYPE_CPM';
    const BID_TYPE_CPD = 'BID_TYPE_CPD';
    const COSTTYPE_UNKNOWN = 'COSTTYPE_UNKNOWN';
    const COSTTYPE_CPC = 'COSTTYPE_CPC';
    const COSTTYPE_CPA = 'COSTTYPE_CPA';
    const COSTTYPE_CPS = 'COSTTYPE_CPS';
    const COSTTYPE_CPM = 'COSTTYPE_CPM';
    const COSTTYPE_CPD = 'COSTTYPE_CPD';
    const COSTTYPE_CPT = 'COSTTYPE_CPT';
    const BID_TYPE_CPO = 'BID_TYPE_CPO';
    const _1 = '1';
    const _2 = '2';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BID_TYPE_CPC,
            self::BID_TYPE_CPA,
            self::BID_TYPE_CPS,
            self::BID_TYPE_CPM,
            self::BID_TYPE_CPD,
            self::COSTTYPE_UNKNOWN,
            self::COSTTYPE_CPC,
            self::COSTTYPE_CPA,
            self::COSTTYPE_CPS,
            self::COSTTYPE_CPM,
            self::COSTTYPE_CPD,
            self::COSTTYPE_CPT,
            self::BID_TYPE_CPO,
            self::_1,
            self::_2,
        ];
    }
}


