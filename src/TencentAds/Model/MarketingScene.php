<?php
/**
 * MarketingScene
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
 * MarketingScene Class Doc Comment
 *
 * @category Class
 * @description 营销目标
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MarketingScene
{
    /**
     * Possible values of this enum
     */
    const _DEFAULT = 'DEFAULT';
    const GAME_RESERVATION = 'GAME_RESERVATION';
    const GAME_PROMOTION = 'GAME_PROMOTION';
    const APP_ACTIVE_PROMOTION = 'APP_ACTIVE_PROMOTION';
    const GAME_CLOSED_BETA_TEST = 'GAME_CLOSED_BETA_TEST';
    const ECOMMERCE_GOODS_DIRECT_PURCHASE_DAILY = 'ECOMMERCE_GOODS_DIRECT_PURCHASE_DAILY';
    const ECOMMERCE_GOODS_LIVE_PURCHASE_DAILY = 'ECOMMERCE_GOODS_LIVE_PURCHASE_DAILY';
    const ECOMMERCE_CONSUMER_COLLECT_CLUES_DAILY = 'ECOMMERCE_CONSUMER_COLLECT_CLUES_DAILY';
    const ECOMMERCE_CONSUMER_ADD_FOLLOWERS_DAILY = 'ECOMMERCE_CONSUMER_ADD_FOLLOWERS_DAILY';
    const ECOMMERCE_CONSUMER_OFFICIAL_ACCOUNTS_DAILY = 'ECOMMERCE_CONSUMER_OFFICIAL_ACCOUNTS_DAILY';
    const ECOMMERCE_CONSUMER_CHANNELS_DAILY = 'ECOMMERCE_CONSUMER_CHANNELS_DAILY';
    const ECOMMERCE_CONSUMER_ANDROID_NEW_DAILY = 'ECOMMERCE_CONSUMER_ANDROID_NEW_DAILY';
    const ECOMMERCE_CONSUMER_IOS_NEW_DAILY = 'ECOMMERCE_CONSUMER_IOS_NEW_DAILY';
    const ECOMMERCE_CONTENT_BRAND_DAILY = 'ECOMMERCE_CONTENT_BRAND_DAILY';
    const ECOMMERCE_CONSUMER_LIVE_FOLLOW_DAILY = 'ECOMMERCE_CONSUMER_LIVE_FOLLOW_DAILY';
    const ECOMMERCE_CONSUMER_APP_ACTIVATION_DAILY = 'ECOMMERCE_CONSUMER_APP_ACTIVATION_DAILY';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_DEFAULT,
            self::GAME_RESERVATION,
            self::GAME_PROMOTION,
            self::APP_ACTIVE_PROMOTION,
            self::GAME_CLOSED_BETA_TEST,
            self::ECOMMERCE_GOODS_DIRECT_PURCHASE_DAILY,
            self::ECOMMERCE_GOODS_LIVE_PURCHASE_DAILY,
            self::ECOMMERCE_CONSUMER_COLLECT_CLUES_DAILY,
            self::ECOMMERCE_CONSUMER_ADD_FOLLOWERS_DAILY,
            self::ECOMMERCE_CONSUMER_OFFICIAL_ACCOUNTS_DAILY,
            self::ECOMMERCE_CONSUMER_CHANNELS_DAILY,
            self::ECOMMERCE_CONSUMER_ANDROID_NEW_DAILY,
            self::ECOMMERCE_CONSUMER_IOS_NEW_DAILY,
            self::ECOMMERCE_CONTENT_BRAND_DAILY,
            self::ECOMMERCE_CONSUMER_LIVE_FOLLOW_DAILY,
            self::ECOMMERCE_CONSUMER_APP_ACTIVATION_DAILY,
        ];
    }
}


