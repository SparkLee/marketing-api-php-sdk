<?php
/**
 * UserActionSetReportsActionType
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
 * UserActionSetReportsActionType Class Doc Comment
 *
 * @category Class
 * @description 标准行为类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserActionSetReportsActionType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'UNKNOWN';
    const CUSTOM = 'CUSTOM';
    const REGISTER = 'REGISTER';
    const VIEW_CONTENT = 'VIEW_CONTENT';
    const CONSULT = 'CONSULT';
    const ADD_TO_CART = 'ADD_TO_CART';
    const PURCHASE = 'PURCHASE';
    const ACTIVATE_APP = 'ACTIVATE_APP';
    const SEARCH = 'SEARCH';
    const ADD_TO_WISHLIST = 'ADD_TO_WISHLIST';
    const INITIATE_CHECKOUT = 'INITIATE_CHECKOUT';
    const COMPLETE_ORDER = 'COMPLETE_ORDER';
    const START_APP = 'START_APP';
    const RATE = 'RATE';
    const PAGE_VIEW = 'PAGE_VIEW';
    const RESERVATION = 'RESERVATION';
    const SHARE = 'SHARE';
    const APPLY = 'APPLY';
    const CLAIM_OFFER = 'CLAIM_OFFER';
    const NAVIGATE = 'NAVIGATE';
    const PRODUCT_RECOMMEND = 'PRODUCT_RECOMMEND';
    const VISIT_STORE = 'VISIT_STORE';
    const TRY_OUT = 'TRY_OUT';
    const DELIVER = 'DELIVER';
    const SIGN_IN = 'SIGN_IN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::CUSTOM,
            self::REGISTER,
            self::VIEW_CONTENT,
            self::CONSULT,
            self::ADD_TO_CART,
            self::PURCHASE,
            self::ACTIVATE_APP,
            self::SEARCH,
            self::ADD_TO_WISHLIST,
            self::INITIATE_CHECKOUT,
            self::COMPLETE_ORDER,
            self::START_APP,
            self::RATE,
            self::PAGE_VIEW,
            self::RESERVATION,
            self::SHARE,
            self::APPLY,
            self::CLAIM_OFFER,
            self::NAVIGATE,
            self::PRODUCT_RECOMMEND,
            self::VISIT_STORE,
            self::TRY_OUT,
            self::DELIVER,
            self::SIGN_IN,
        ];
    }
}


