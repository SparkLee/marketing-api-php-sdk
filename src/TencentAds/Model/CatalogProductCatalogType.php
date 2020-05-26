<?php
/**
 * CatalogProductCatalogType
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
 * CatalogProductCatalogType Class Doc Comment
 *
 * @category Class
 * @description 商品目录类型，详见 &lt;a href&#x3D;&#39;catalog_type&#39; target&#x3D;&#39;_blank&#39;&gt;[商品目录类型]&lt;/a&gt;
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CatalogProductCatalogType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'UNKNOWN';
    const PRODUCT_CATALOG_TYPE_STANDARD = 'PRODUCT_CATALOG_TYPE_STANDARD';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::PRODUCT_CATALOG_TYPE_STANDARD,
        ];
    }
}


