<?php
/**
 * IntOptimizationGoal
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
 * IntOptimizationGoal Class Doc Comment
 *
 * @category Class
 * @description 优化目标类型，支持的优化目标及对应的深度优化目标可通过“&lt;a target&#x3D;&#39;_blank&#39; href&#x3D;&#39;/docs/api/tools/capabilities/optimization_goal_permissions_get&#39; &gt;查询优化目标权限&lt;/a&gt;”接口进行查询
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IntOptimizationGoal
{
    /**
     * Possible values of this enum
     */
    const NONE = 'OPTIMIZATIONGOAL_NONE';
    const BRAND_CONVERSION = 'OPTIMIZATIONGOAL_BRAND_CONVERSION';
    const FOLLOW = 'OPTIMIZATIONGOAL_FOLLOW';
    const CLICK = 'OPTIMIZATIONGOAL_CLICK';
    const IMPRESSION = 'OPTIMIZATIONGOAL_IMPRESSION';
    const APP_DOWNLOAD = 'OPTIMIZATIONGOAL_APP_DOWNLOAD';
    const APP_ACTIVATE = 'OPTIMIZATIONGOAL_APP_ACTIVATE';
    const APP_REGISTER = 'OPTIMIZATIONGOAL_APP_REGISTER';
    const ONE_DAY_RETENTION = 'OPTIMIZATIONGOAL_ONE_DAY_RETENTION';
    const APP_PURCHASE = 'OPTIMIZATIONGOAL_APP_PURCHASE';
    const ECOMMERCE_ORDER = 'OPTIMIZATIONGOAL_ECOMMERCE_ORDER';
    const ECOMMERCE_CHECKOUT = 'OPTIMIZATIONGOAL_ECOMMERCE_CHECKOUT';
    const LEADS = 'OPTIMIZATIONGOAL_LEADS';
    const ECOMMERCE_CART = 'OPTIMIZATIONGOAL_ECOMMERCE_CART';
    const PROMOTION_CLICK_KEY_PAGE = 'OPTIMIZATIONGOAL_PROMOTION_CLICK_KEY_PAGE';
    const VIEW_COMMODITY_PAGE = 'OPTIMIZATIONGOAL_VIEW_COMMODITY_PAGE';
    const ONLINE_CONSULTATION = 'OPTIMIZATIONGOAL_ONLINE_CONSULTATION';
    const TELEPHONE_CONSULTATION = 'OPTIMIZATIONGOAL_TELEPHONE_CONSULTATION';
    const PAGE_RESERVATION = 'OPTIMIZATIONGOAL_PAGE_RESERVATION';
    const DELIVERY = 'OPTIMIZATIONGOAL_DELIVERY';
    const MESSAGE_AFTER_FOLLOW = 'OPTIMIZATIONGOAL_MESSAGE_AFTER_FOLLOW';
    const CLICK_MENU_AFTER_FOLLOW = 'OPTIMIZATIONGOAL_CLICK_MENU_AFTER_FOLLOW';
    const PAGE_EFFECTIVE_ONLINE_CONSULT = 'OPTIMIZATIONGOAL_PAGE_EFFECTIVE_ONLINE_CONSULT';
    const CONFIRM_EFFECTIVE_LEADS_CONSULT = 'OPTIMIZATIONGOAL_CONFIRM_EFFECTIVE_LEADS_CONSULT';
    const CONFIRM_EFFECTIVE_LEADS_PHONE = 'OPTIMIZATIONGOAL_CONFIRM_EFFECTIVE_LEADS_PHONE';
    const LEADS_COLLECT = 'OPTIMIZATIONGOAL_LEADS_COLLECT';
    const FIRST_PURCHASE = 'OPTIMIZATIONGOAL_FIRST_PURCHASE';
    const APPLY = 'OPTIMIZATIONGOAL_APPLY';
    const PRE_CREDIT = 'OPTIMIZATIONGOAL_PRE_CREDIT';
    const CREDIT = 'OPTIMIZATIONGOAL_CREDIT';
    const WITHDRAW_DEPOSITS = 'OPTIMIZATIONGOAL_WITHDRAW_DEPOSITS';
    const PROMOTION_VIEW_KEY_PAGE = 'OPTIMIZATIONGOAL_PROMOTION_VIEW_KEY_PAGE';
    const MOBILE_APP_CREATE_ROLE = 'OPTIMIZATIONGOAL_MOBILE_APP_CREATE_ROLE';
    const CANVAS_CLICK = 'OPTIMIZATIONGOAL_CANVAS_CLICK';
    const PROMOTION_CLAIM_OFFER = 'OPTIMIZATIONGOAL_PROMOTION_CLAIM_OFFER';
    const ECOMMERCE_ADD_TO_WISHLIST = 'OPTIMIZATIONGOAL_ECOMMERCE_ADD_TO_WISHLIST';
    const CONFIRM_EFFECTIVE_LEADS_RESERVATION = 'OPTIMIZATIONGOAL_CONFIRM_EFFECTIVE_LEADS_RESERVATION';
    const PAGE_RECEIPT = 'OPTIMIZATIONGOAL_PAGE_RECEIPT';
    const PAGE_SCAN_CODE = 'OPTIMIZATIONGOAL_PAGE_SCAN_CODE';
    const SELECT_COURSE = 'OPTIMIZATIONGOAL_SELECT_COURSE';
    const CONFIRM_POTENTIAL_CUSTOMER_PHONE = 'OPTIMIZATIONGOAL_CONFIRM_POTENTIAL_CUSTOMER_PHONE';
    const MOBILE_APP_AD_INCOME = 'OPTIMIZATIONGOAL_MOBILE_APP_AD_INCOME';
    const MOBILE_APP_ACCREDIT = 'OPTIMIZATIONGOAL_MOBILE_APP_ACCREDIT';
    const PURCHASE_MEMBER_CARD = 'OPTIMIZATIONGOAL_PURCHASE_MEMBER_CARD';
    const PAGE_CONFIRM_EFFECTIVE_LEADS = 'OPTIMIZATIONGOAL_PAGE_CONFIRM_EFFECTIVE_LEADS';
    const ADD_DESKTOP = 'OPTIMIZATIONGOAL_ADD_DESKTOP';
    const RESERVATION = 'OPTIMIZATIONGOAL_RESERVATION';
    const FIRST_ECOMMERCE_ORDER = 'OPTIMIZATIONGOAL_FIRST_ECOMMERCE_ORDER';
    const FIRST_TWENTY_FOUR_HOUR_ECOMMERCE_ORDER = 'OPTIMIZATIONGOAL_FIRST_TWENTY_FOUR_HOUR_ECOMMERCE_ORDER';
    const ECOMMERCE_SCANCODE_WX = 'OPTIMIZATIONGOAL_ECOMMERCE_SCANCODE_WX';
    const CLASS_PARTICIPATED = 'OPTIMIZATIONGOAL_CLASS_PARTICIPATED';
    const INSURANCE_PURCHASE = 'OPTIMIZATIONGOAL_INSURANCE_PURCHASE';
    const MOBILE_APP_SEVEN_DAYS_RETENTION = 'OPTIMIZATIONGOAL_MOBILE_APP_SEVEN_DAYS_RETENTION';
    const LIKE = 'OPTIMIZATIONGOAL_LIKE';
    const EXTERNAL_LINK_CLICK = 'OPTIMIZATIONGOAL_EXTERNAL_LINK_CLICK';
    const BUY_COUPONS = 'OPTIMIZATIONGOAL_BUY_COUPONS';
    const LEAVE_INFORMATION = 'OPTIMIZATIONGOAL_LEAVE_INFORMATION';
    const CORE_ACTION = 'OPTIMIZATIONGOAL_CORE_ACTION';
    const ONE_DAY_RETENTION_RATIO = 'OPTIMIZATIONGOAL_ONE_DAY_RETENTION_RATIO';
    const PROMOTION_READ_ARTICLE = 'OPTIMIZATIONGOAL_PROMOTION_READ_ARTICLE';
    const RESERVATION_CHECK = 'OPTIMIZATIONGOAL_RESERVATION_CHECK';
    const OPEN_ACCOUNT = 'OPTIMIZATIONGOAL_OPEN_ACCOUNT';
    const SEVEN_DAY_ECOMMERCE_ORDER = 'OPTIMIZATIONGOAL_SEVEN_DAY_ECOMMERCE_ORDER';
    const ADD_WECHAT = 'OPTIMIZATIONGOAL_ADD_WECHAT';
    const WECOM_CONSULT = 'OPTIMIZATIONGOAL_WECOM_CONSULT';
    const ADD_GROUP = 'OPTIMIZATIONGOAL_ADD_GROUP';
    const QUICK_ORDER = 'OPTIMIZATIONGOAL_QUICK_ORDER';
    const PRE_PAY = 'OPTIMIZATIONGOAL_PRE_PAY';
    const PAGE_ONLINE_CONSULT_ACTIVE_ONE_MSG = 'OPTIMIZATIONGOAL_PAGE_ONLINE_CONSULT_ACTIVE_ONE_MSG';
    const CALL_DURATION_THIRTY_SECONDS = 'OPTIMIZATIONGOAL_CALL_DURATION_THIRTY_SECONDS';
    const CLAIM_COURSE = 'OPTIMIZATIONGOAL_CLAIM_COURSE';
    const QUIT_GROUP = 'OPTIMIZATIONGOAL_QUIT_GROUP';
    const VIEW_ACQUISITION_CONTENT = 'OPTIMIZATIONGOAL_VIEW_ACQUISITION_CONTENT';
    const BACK_FLOW = 'OPTIMIZATIONGOAL_BACK_FLOW';
    const PAGE_ONLINE_CONSULT_THREE_MSG = 'OPTIMIZATIONGOAL_PAGE_ONLINE_CONSULT_THREE_MSG';
    const RENEWAL = 'OPTIMIZATIONGOAL_RENEWAL';
    const LOW_PRICE_COURSE = 'OPTIMIZATIONGOAL_LOW_PRICE_COURSE';
    const PAGE_EFFECTIVE_PHONE_CALL = 'OPTIMIZATIONGOAL_PAGE_EFFECTIVE_PHONE_CALL';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::BRAND_CONVERSION,
            self::FOLLOW,
            self::CLICK,
            self::IMPRESSION,
            self::APP_DOWNLOAD,
            self::APP_ACTIVATE,
            self::APP_REGISTER,
            self::ONE_DAY_RETENTION,
            self::APP_PURCHASE,
            self::ECOMMERCE_ORDER,
            self::ECOMMERCE_CHECKOUT,
            self::LEADS,
            self::ECOMMERCE_CART,
            self::PROMOTION_CLICK_KEY_PAGE,
            self::VIEW_COMMODITY_PAGE,
            self::ONLINE_CONSULTATION,
            self::TELEPHONE_CONSULTATION,
            self::PAGE_RESERVATION,
            self::DELIVERY,
            self::MESSAGE_AFTER_FOLLOW,
            self::CLICK_MENU_AFTER_FOLLOW,
            self::PAGE_EFFECTIVE_ONLINE_CONSULT,
            self::CONFIRM_EFFECTIVE_LEADS_CONSULT,
            self::CONFIRM_EFFECTIVE_LEADS_PHONE,
            self::LEADS_COLLECT,
            self::FIRST_PURCHASE,
            self::APPLY,
            self::PRE_CREDIT,
            self::CREDIT,
            self::WITHDRAW_DEPOSITS,
            self::PROMOTION_VIEW_KEY_PAGE,
            self::MOBILE_APP_CREATE_ROLE,
            self::CANVAS_CLICK,
            self::PROMOTION_CLAIM_OFFER,
            self::ECOMMERCE_ADD_TO_WISHLIST,
            self::CONFIRM_EFFECTIVE_LEADS_RESERVATION,
            self::PAGE_RECEIPT,
            self::PAGE_SCAN_CODE,
            self::SELECT_COURSE,
            self::CONFIRM_POTENTIAL_CUSTOMER_PHONE,
            self::MOBILE_APP_AD_INCOME,
            self::MOBILE_APP_ACCREDIT,
            self::PURCHASE_MEMBER_CARD,
            self::PAGE_CONFIRM_EFFECTIVE_LEADS,
            self::ADD_DESKTOP,
            self::RESERVATION,
            self::FIRST_ECOMMERCE_ORDER,
            self::FIRST_TWENTY_FOUR_HOUR_ECOMMERCE_ORDER,
            self::ECOMMERCE_SCANCODE_WX,
            self::CLASS_PARTICIPATED,
            self::INSURANCE_PURCHASE,
            self::MOBILE_APP_SEVEN_DAYS_RETENTION,
            self::LIKE,
            self::EXTERNAL_LINK_CLICK,
            self::BUY_COUPONS,
            self::LEAVE_INFORMATION,
            self::CORE_ACTION,
            self::ONE_DAY_RETENTION_RATIO,
            self::PROMOTION_READ_ARTICLE,
            self::RESERVATION_CHECK,
            self::OPEN_ACCOUNT,
            self::SEVEN_DAY_ECOMMERCE_ORDER,
            self::ADD_WECHAT,
            self::WECOM_CONSULT,
            self::ADD_GROUP,
            self::QUICK_ORDER,
            self::PRE_PAY,
            self::PAGE_ONLINE_CONSULT_ACTIVE_ONE_MSG,
            self::CALL_DURATION_THIRTY_SECONDS,
            self::CLAIM_COURSE,
            self::QUIT_GROUP,
            self::VIEW_ACQUISITION_CONTENT,
            self::BACK_FLOW,
            self::PAGE_ONLINE_CONSULT_THREE_MSG,
            self::RENEWAL,
            self::LOW_PRICE_COURSE,
            self::PAGE_EFFECTIVE_PHONE_CALL,
        ];
    }
}


