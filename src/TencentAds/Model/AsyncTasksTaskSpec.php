<?php
/**
 * AsyncTasksTaskSpec
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

use \ArrayAccess;
use \TencentAds\ObjectSerializer;

/**
 * AsyncTasksTaskSpec Class Doc Comment
 *
 * @category Class
 * @description 任务所需条件
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AsyncTasksTaskSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'async_tasks_task_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reportTaskSpec' => '\TencentAds\Model\AsyncTasksReportTaskSpec',
        'taskTypeCreativePictureReportSpec' => '\TencentAds\Model\AsyncTasksTaskTypeCreativePictureReportSpec',
        'taskTypeAdHourlyReportSpec' => '\TencentAds\Model\AsyncTasksTaskTypeAdHourlyReportSpec',
        'taskTypeBatchRequestSpec' => '\TencentAds\Model\AsyncTasksTaskTypeBatchRequestSpecStruct[]',
        'taskTypeWechatMomentsAdgroupHourlyReportSpec' => '\TencentAds\Model\AsyncTasksTaskTypeWechatMomentsAdgroupHourlyReportSpec',
        'taskTypeAdgroupHourlyReportSpec' => '\TencentAds\Model\AsyncTasksTaskTypeAdgroupHourlyReportSpec',
        'taskTypeAdgroupDailyReportSpec' => '\TencentAds\Model\AsyncTasksTaskTypeAdgroupDailyReportSpec',
        'taskTypeIndustryCreativeTemplateReportSpec' => '\TencentAds\Model\AsyncTasksTaskTypeIndustryCreativeTemplateReportSpec',
        'taskTypeWechatAdgroupHourlyReportSpec' => '\TencentAds\Model\AsyncTasksTaskTypeWechatAdgroupHourlyReportSpec',
        'taskTypeWechatAdgroupDailyReportSpec' => '\TencentAds\Model\AsyncTasksTaskTypeWechatAdgroupDailyReportSpec',
        'taskTypeWechatAdHourlyReportSpec' => '\TencentAds\Model\AsyncTasksTaskTypeWechatAdHourlyReportSpec',
        'taskTypeWechatAdDailyReportSpec' => '\TencentAds\Model\AsyncTasksTaskTypeWechatAdDailyReportSpec',
        'taskTypeWechatAdvertisingDataSpec' => '\TencentAds\Model\AsyncTasksTaskTypeWechatAdvertisingDataSpec',
        'taskTypeWechatPoiHourlyReportSpec' => '\TencentAds\Model\AsyncTasksTaskTypeWechatPoiHourlyReportSpec',
        'taskTypePoiHourlyReportSpec' => '\TencentAds\Model\AsyncTasksTaskTypePoiHourlyReportSpec',
        'taskTypeEncryptedCustomImeiSpec' => '\TencentAds\Model\AsyncTasksTaskTypeEncryptedCustomImeiSpec',
        'taskTypeEncryptedTencentImeiSpec' => '\TencentAds\Model\AsyncTasksTaskTypeEncryptedTencentImeiSpec',
        'taskTypeClearTencentImeiSpec' => '\TencentAds\Model\AsyncTasksTaskTypeClearTencentImeiSpec',
        'taskTypeClickForwardedDataSpec' => '\TencentAds\Model\AsyncTasksTaskTypeClickForwardedDataSpec',
        'taskDeviceInfoSpec' => '\TencentAds\Model\AsyncTasksTaskDeviceInfoSpec',
        'taskTypeRebateDetailSpec' => '\TencentAds\Model\AsyncTasksTaskTypeRebateDetailSpec',
        'taskTypeCreateAndroidChannelPackageSpec' => '\TencentAds\Model\AsyncTasksTaskTypeCreateAndroidChannelPackageSpec',
        'taskTypeUpdateAndroidChannelPackageSpec' => '\TencentAds\Model\AsyncTasksTaskTypeUpdateAndroidChannelPackageSpec',
        'taskTypeUnionPositionReportSpec' => '\TencentAds\Model\AsyncTasksTaskTypeUnionPositionReportSpec',
        'taskTypeDeviceDetailCpcSpec' => '\TencentAds\Model\AsyncTasksTaskTypeDeviceDetailCpcSpec',
        'taskTypeOmAdvertisingInfoSpec' => '\TencentAds\Model\AsyncTasksTaskTypeOmAdvertisingInfoSpec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reportTaskSpec' => null,
        'taskTypeCreativePictureReportSpec' => null,
        'taskTypeAdHourlyReportSpec' => null,
        'taskTypeBatchRequestSpec' => null,
        'taskTypeWechatMomentsAdgroupHourlyReportSpec' => null,
        'taskTypeAdgroupHourlyReportSpec' => null,
        'taskTypeAdgroupDailyReportSpec' => null,
        'taskTypeIndustryCreativeTemplateReportSpec' => null,
        'taskTypeWechatAdgroupHourlyReportSpec' => null,
        'taskTypeWechatAdgroupDailyReportSpec' => null,
        'taskTypeWechatAdHourlyReportSpec' => null,
        'taskTypeWechatAdDailyReportSpec' => null,
        'taskTypeWechatAdvertisingDataSpec' => null,
        'taskTypeWechatPoiHourlyReportSpec' => null,
        'taskTypePoiHourlyReportSpec' => null,
        'taskTypeEncryptedCustomImeiSpec' => null,
        'taskTypeEncryptedTencentImeiSpec' => null,
        'taskTypeClearTencentImeiSpec' => null,
        'taskTypeClickForwardedDataSpec' => null,
        'taskDeviceInfoSpec' => null,
        'taskTypeRebateDetailSpec' => null,
        'taskTypeCreateAndroidChannelPackageSpec' => null,
        'taskTypeUpdateAndroidChannelPackageSpec' => null,
        'taskTypeUnionPositionReportSpec' => null,
        'taskTypeDeviceDetailCpcSpec' => null,
        'taskTypeOmAdvertisingInfoSpec' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'reportTaskSpec' => 'report_task_spec',
        'taskTypeCreativePictureReportSpec' => 'task_type_creative_picture_report_spec',
        'taskTypeAdHourlyReportSpec' => 'task_type_ad_hourly_report_spec',
        'taskTypeBatchRequestSpec' => 'task_type_batch_request_spec',
        'taskTypeWechatMomentsAdgroupHourlyReportSpec' => 'task_type_wechat_moments_adgroup_hourly_report_spec',
        'taskTypeAdgroupHourlyReportSpec' => 'task_type_adgroup_hourly_report_spec',
        'taskTypeAdgroupDailyReportSpec' => 'task_type_adgroup_daily_report_spec',
        'taskTypeIndustryCreativeTemplateReportSpec' => 'task_type_industry_creative_template_report_spec',
        'taskTypeWechatAdgroupHourlyReportSpec' => 'task_type_wechat_adgroup_hourly_report_spec',
        'taskTypeWechatAdgroupDailyReportSpec' => 'task_type_wechat_adgroup_daily_report_spec',
        'taskTypeWechatAdHourlyReportSpec' => 'task_type_wechat_ad_hourly_report_spec',
        'taskTypeWechatAdDailyReportSpec' => 'task_type_wechat_ad_daily_report_spec',
        'taskTypeWechatAdvertisingDataSpec' => 'task_type_wechat_advertising_data_spec',
        'taskTypeWechatPoiHourlyReportSpec' => 'task_type_wechat_poi_hourly_report_spec',
        'taskTypePoiHourlyReportSpec' => 'task_type_poi_hourly_report_spec',
        'taskTypeEncryptedCustomImeiSpec' => 'task_type_encrypted_custom_imei_spec',
        'taskTypeEncryptedTencentImeiSpec' => 'task_type_encrypted_tencent_imei_spec',
        'taskTypeClearTencentImeiSpec' => 'task_type_clear_tencent_imei_spec',
        'taskTypeClickForwardedDataSpec' => 'task_type_click_forwarded_data_spec',
        'taskDeviceInfoSpec' => 'task_device_info_spec',
        'taskTypeRebateDetailSpec' => 'task_type_rebate_detail_spec',
        'taskTypeCreateAndroidChannelPackageSpec' => 'task_type_create_android_channel_package_spec',
        'taskTypeUpdateAndroidChannelPackageSpec' => 'task_type_update_android_channel_package_spec',
        'taskTypeUnionPositionReportSpec' => 'task_type_union_position_report_spec',
        'taskTypeDeviceDetailCpcSpec' => 'task_type_device_detail_cpc_spec',
        'taskTypeOmAdvertisingInfoSpec' => 'task_type_om_advertising_info_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reportTaskSpec' => 'setReportTaskSpec',
        'taskTypeCreativePictureReportSpec' => 'setTaskTypeCreativePictureReportSpec',
        'taskTypeAdHourlyReportSpec' => 'setTaskTypeAdHourlyReportSpec',
        'taskTypeBatchRequestSpec' => 'setTaskTypeBatchRequestSpec',
        'taskTypeWechatMomentsAdgroupHourlyReportSpec' => 'setTaskTypeWechatMomentsAdgroupHourlyReportSpec',
        'taskTypeAdgroupHourlyReportSpec' => 'setTaskTypeAdgroupHourlyReportSpec',
        'taskTypeAdgroupDailyReportSpec' => 'setTaskTypeAdgroupDailyReportSpec',
        'taskTypeIndustryCreativeTemplateReportSpec' => 'setTaskTypeIndustryCreativeTemplateReportSpec',
        'taskTypeWechatAdgroupHourlyReportSpec' => 'setTaskTypeWechatAdgroupHourlyReportSpec',
        'taskTypeWechatAdgroupDailyReportSpec' => 'setTaskTypeWechatAdgroupDailyReportSpec',
        'taskTypeWechatAdHourlyReportSpec' => 'setTaskTypeWechatAdHourlyReportSpec',
        'taskTypeWechatAdDailyReportSpec' => 'setTaskTypeWechatAdDailyReportSpec',
        'taskTypeWechatAdvertisingDataSpec' => 'setTaskTypeWechatAdvertisingDataSpec',
        'taskTypeWechatPoiHourlyReportSpec' => 'setTaskTypeWechatPoiHourlyReportSpec',
        'taskTypePoiHourlyReportSpec' => 'setTaskTypePoiHourlyReportSpec',
        'taskTypeEncryptedCustomImeiSpec' => 'setTaskTypeEncryptedCustomImeiSpec',
        'taskTypeEncryptedTencentImeiSpec' => 'setTaskTypeEncryptedTencentImeiSpec',
        'taskTypeClearTencentImeiSpec' => 'setTaskTypeClearTencentImeiSpec',
        'taskTypeClickForwardedDataSpec' => 'setTaskTypeClickForwardedDataSpec',
        'taskDeviceInfoSpec' => 'setTaskDeviceInfoSpec',
        'taskTypeRebateDetailSpec' => 'setTaskTypeRebateDetailSpec',
        'taskTypeCreateAndroidChannelPackageSpec' => 'setTaskTypeCreateAndroidChannelPackageSpec',
        'taskTypeUpdateAndroidChannelPackageSpec' => 'setTaskTypeUpdateAndroidChannelPackageSpec',
        'taskTypeUnionPositionReportSpec' => 'setTaskTypeUnionPositionReportSpec',
        'taskTypeDeviceDetailCpcSpec' => 'setTaskTypeDeviceDetailCpcSpec',
        'taskTypeOmAdvertisingInfoSpec' => 'setTaskTypeOmAdvertisingInfoSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reportTaskSpec' => 'getReportTaskSpec',
        'taskTypeCreativePictureReportSpec' => 'getTaskTypeCreativePictureReportSpec',
        'taskTypeAdHourlyReportSpec' => 'getTaskTypeAdHourlyReportSpec',
        'taskTypeBatchRequestSpec' => 'getTaskTypeBatchRequestSpec',
        'taskTypeWechatMomentsAdgroupHourlyReportSpec' => 'getTaskTypeWechatMomentsAdgroupHourlyReportSpec',
        'taskTypeAdgroupHourlyReportSpec' => 'getTaskTypeAdgroupHourlyReportSpec',
        'taskTypeAdgroupDailyReportSpec' => 'getTaskTypeAdgroupDailyReportSpec',
        'taskTypeIndustryCreativeTemplateReportSpec' => 'getTaskTypeIndustryCreativeTemplateReportSpec',
        'taskTypeWechatAdgroupHourlyReportSpec' => 'getTaskTypeWechatAdgroupHourlyReportSpec',
        'taskTypeWechatAdgroupDailyReportSpec' => 'getTaskTypeWechatAdgroupDailyReportSpec',
        'taskTypeWechatAdHourlyReportSpec' => 'getTaskTypeWechatAdHourlyReportSpec',
        'taskTypeWechatAdDailyReportSpec' => 'getTaskTypeWechatAdDailyReportSpec',
        'taskTypeWechatAdvertisingDataSpec' => 'getTaskTypeWechatAdvertisingDataSpec',
        'taskTypeWechatPoiHourlyReportSpec' => 'getTaskTypeWechatPoiHourlyReportSpec',
        'taskTypePoiHourlyReportSpec' => 'getTaskTypePoiHourlyReportSpec',
        'taskTypeEncryptedCustomImeiSpec' => 'getTaskTypeEncryptedCustomImeiSpec',
        'taskTypeEncryptedTencentImeiSpec' => 'getTaskTypeEncryptedTencentImeiSpec',
        'taskTypeClearTencentImeiSpec' => 'getTaskTypeClearTencentImeiSpec',
        'taskTypeClickForwardedDataSpec' => 'getTaskTypeClickForwardedDataSpec',
        'taskDeviceInfoSpec' => 'getTaskDeviceInfoSpec',
        'taskTypeRebateDetailSpec' => 'getTaskTypeRebateDetailSpec',
        'taskTypeCreateAndroidChannelPackageSpec' => 'getTaskTypeCreateAndroidChannelPackageSpec',
        'taskTypeUpdateAndroidChannelPackageSpec' => 'getTaskTypeUpdateAndroidChannelPackageSpec',
        'taskTypeUnionPositionReportSpec' => 'getTaskTypeUnionPositionReportSpec',
        'taskTypeDeviceDetailCpcSpec' => 'getTaskTypeDeviceDetailCpcSpec',
        'taskTypeOmAdvertisingInfoSpec' => 'getTaskTypeOmAdvertisingInfoSpec'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['reportTaskSpec'] = isset($data['reportTaskSpec']) ? $data['reportTaskSpec'] : null;
        $this->container['taskTypeCreativePictureReportSpec'] = isset($data['taskTypeCreativePictureReportSpec']) ? $data['taskTypeCreativePictureReportSpec'] : null;
        $this->container['taskTypeAdHourlyReportSpec'] = isset($data['taskTypeAdHourlyReportSpec']) ? $data['taskTypeAdHourlyReportSpec'] : null;
        $this->container['taskTypeBatchRequestSpec'] = isset($data['taskTypeBatchRequestSpec']) ? $data['taskTypeBatchRequestSpec'] : null;
        $this->container['taskTypeWechatMomentsAdgroupHourlyReportSpec'] = isset($data['taskTypeWechatMomentsAdgroupHourlyReportSpec']) ? $data['taskTypeWechatMomentsAdgroupHourlyReportSpec'] : null;
        $this->container['taskTypeAdgroupHourlyReportSpec'] = isset($data['taskTypeAdgroupHourlyReportSpec']) ? $data['taskTypeAdgroupHourlyReportSpec'] : null;
        $this->container['taskTypeAdgroupDailyReportSpec'] = isset($data['taskTypeAdgroupDailyReportSpec']) ? $data['taskTypeAdgroupDailyReportSpec'] : null;
        $this->container['taskTypeIndustryCreativeTemplateReportSpec'] = isset($data['taskTypeIndustryCreativeTemplateReportSpec']) ? $data['taskTypeIndustryCreativeTemplateReportSpec'] : null;
        $this->container['taskTypeWechatAdgroupHourlyReportSpec'] = isset($data['taskTypeWechatAdgroupHourlyReportSpec']) ? $data['taskTypeWechatAdgroupHourlyReportSpec'] : null;
        $this->container['taskTypeWechatAdgroupDailyReportSpec'] = isset($data['taskTypeWechatAdgroupDailyReportSpec']) ? $data['taskTypeWechatAdgroupDailyReportSpec'] : null;
        $this->container['taskTypeWechatAdHourlyReportSpec'] = isset($data['taskTypeWechatAdHourlyReportSpec']) ? $data['taskTypeWechatAdHourlyReportSpec'] : null;
        $this->container['taskTypeWechatAdDailyReportSpec'] = isset($data['taskTypeWechatAdDailyReportSpec']) ? $data['taskTypeWechatAdDailyReportSpec'] : null;
        $this->container['taskTypeWechatAdvertisingDataSpec'] = isset($data['taskTypeWechatAdvertisingDataSpec']) ? $data['taskTypeWechatAdvertisingDataSpec'] : null;
        $this->container['taskTypeWechatPoiHourlyReportSpec'] = isset($data['taskTypeWechatPoiHourlyReportSpec']) ? $data['taskTypeWechatPoiHourlyReportSpec'] : null;
        $this->container['taskTypePoiHourlyReportSpec'] = isset($data['taskTypePoiHourlyReportSpec']) ? $data['taskTypePoiHourlyReportSpec'] : null;
        $this->container['taskTypeEncryptedCustomImeiSpec'] = isset($data['taskTypeEncryptedCustomImeiSpec']) ? $data['taskTypeEncryptedCustomImeiSpec'] : null;
        $this->container['taskTypeEncryptedTencentImeiSpec'] = isset($data['taskTypeEncryptedTencentImeiSpec']) ? $data['taskTypeEncryptedTencentImeiSpec'] : null;
        $this->container['taskTypeClearTencentImeiSpec'] = isset($data['taskTypeClearTencentImeiSpec']) ? $data['taskTypeClearTencentImeiSpec'] : null;
        $this->container['taskTypeClickForwardedDataSpec'] = isset($data['taskTypeClickForwardedDataSpec']) ? $data['taskTypeClickForwardedDataSpec'] : null;
        $this->container['taskDeviceInfoSpec'] = isset($data['taskDeviceInfoSpec']) ? $data['taskDeviceInfoSpec'] : null;
        $this->container['taskTypeRebateDetailSpec'] = isset($data['taskTypeRebateDetailSpec']) ? $data['taskTypeRebateDetailSpec'] : null;
        $this->container['taskTypeCreateAndroidChannelPackageSpec'] = isset($data['taskTypeCreateAndroidChannelPackageSpec']) ? $data['taskTypeCreateAndroidChannelPackageSpec'] : null;
        $this->container['taskTypeUpdateAndroidChannelPackageSpec'] = isset($data['taskTypeUpdateAndroidChannelPackageSpec']) ? $data['taskTypeUpdateAndroidChannelPackageSpec'] : null;
        $this->container['taskTypeUnionPositionReportSpec'] = isset($data['taskTypeUnionPositionReportSpec']) ? $data['taskTypeUnionPositionReportSpec'] : null;
        $this->container['taskTypeDeviceDetailCpcSpec'] = isset($data['taskTypeDeviceDetailCpcSpec']) ? $data['taskTypeDeviceDetailCpcSpec'] : null;
        $this->container['taskTypeOmAdvertisingInfoSpec'] = isset($data['taskTypeOmAdvertisingInfoSpec']) ? $data['taskTypeOmAdvertisingInfoSpec'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets reportTaskSpec
     *
     * @return \TencentAds\Model\AsyncTasksReportTaskSpec
     */
    public function getReportTaskSpec()
    {
        return $this->container['reportTaskSpec'];
    }

    /**
     * Sets reportTaskSpec
     *
     * @param \TencentAds\Model\AsyncTasksReportTaskSpec $reportTaskSpec reportTaskSpec
     *
     * @return $this
     */
    public function setReportTaskSpec($reportTaskSpec)
    {
        $this->container['reportTaskSpec'] = $reportTaskSpec;

        return $this;
    }

    /**
     * Gets taskTypeCreativePictureReportSpec
     *
     * @return \TencentAds\Model\AsyncTasksTaskTypeCreativePictureReportSpec
     */
    public function getTaskTypeCreativePictureReportSpec()
    {
        return $this->container['taskTypeCreativePictureReportSpec'];
    }

    /**
     * Sets taskTypeCreativePictureReportSpec
     *
     * @param \TencentAds\Model\AsyncTasksTaskTypeCreativePictureReportSpec $taskTypeCreativePictureReportSpec taskTypeCreativePictureReportSpec
     *
     * @return $this
     */
    public function setTaskTypeCreativePictureReportSpec($taskTypeCreativePictureReportSpec)
    {
        $this->container['taskTypeCreativePictureReportSpec'] = $taskTypeCreativePictureReportSpec;

        return $this;
    }

    /**
     * Gets taskTypeAdHourlyReportSpec
     *
     * @return \TencentAds\Model\AsyncTasksTaskTypeAdHourlyReportSpec
     */
    public function getTaskTypeAdHourlyReportSpec()
    {
        return $this->container['taskTypeAdHourlyReportSpec'];
    }

    /**
     * Sets taskTypeAdHourlyReportSpec
     *
     * @param \TencentAds\Model\AsyncTasksTaskTypeAdHourlyReportSpec $taskTypeAdHourlyReportSpec taskTypeAdHourlyReportSpec
     *
     * @return $this
     */
    public function setTaskTypeAdHourlyReportSpec($taskTypeAdHourlyReportSpec)
    {
        $this->container['taskTypeAdHourlyReportSpec'] = $taskTypeAdHourlyReportSpec;

        return $this;
    }

    /**
     * Gets taskTypeBatchRequestSpec
     *
     * @return \TencentAds\Model\AsyncTasksTaskTypeBatchRequestSpecStruct[]
     */
    public function getTaskTypeBatchRequestSpec()
    {
        return $this->container['taskTypeBatchRequestSpec'];
    }

    /**
     * Sets taskTypeBatchRequestSpec
     *
     * @param \TencentAds\Model\AsyncTasksTaskTypeBatchRequestSpecStruct[] $taskTypeBatchRequestSpec taskTypeBatchRequestSpec
     *
     * @return $this
     */
    public function setTaskTypeBatchRequestSpec($taskTypeBatchRequestSpec)
    {
        $this->container['taskTypeBatchRequestSpec'] = $taskTypeBatchRequestSpec;

        return $this;
    }

    /**
     * Gets taskTypeWechatMomentsAdgroupHourlyReportSpec
     *
     * @return \TencentAds\Model\AsyncTasksTaskTypeWechatMomentsAdgroupHourlyReportSpec
     */
    public function getTaskTypeWechatMomentsAdgroupHourlyReportSpec()
    {
        return $this->container['taskTypeWechatMomentsAdgroupHourlyReportSpec'];
    }

    /**
     * Sets taskTypeWechatMomentsAdgroupHourlyReportSpec
     *
     * @param \TencentAds\Model\AsyncTasksTaskTypeWechatMomentsAdgroupHourlyReportSpec $taskTypeWechatMomentsAdgroupHourlyReportSpec taskTypeWechatMomentsAdgroupHourlyReportSpec
     *
     * @return $this
     */
    public function setTaskTypeWechatMomentsAdgroupHourlyReportSpec($taskTypeWechatMomentsAdgroupHourlyReportSpec)
    {
        $this->container['taskTypeWechatMomentsAdgroupHourlyReportSpec'] = $taskTypeWechatMomentsAdgroupHourlyReportSpec;

        return $this;
    }

    /**
     * Gets taskTypeAdgroupHourlyReportSpec
     *
     * @return \TencentAds\Model\AsyncTasksTaskTypeAdgroupHourlyReportSpec
     */
    public function getTaskTypeAdgroupHourlyReportSpec()
    {
        return $this->container['taskTypeAdgroupHourlyReportSpec'];
    }

    /**
     * Sets taskTypeAdgroupHourlyReportSpec
     *
     * @param \TencentAds\Model\AsyncTasksTaskTypeAdgroupHourlyReportSpec $taskTypeAdgroupHourlyReportSpec taskTypeAdgroupHourlyReportSpec
     *
     * @return $this
     */
    public function setTaskTypeAdgroupHourlyReportSpec($taskTypeAdgroupHourlyReportSpec)
    {
        $this->container['taskTypeAdgroupHourlyReportSpec'] = $taskTypeAdgroupHourlyReportSpec;

        return $this;
    }

    /**
     * Gets taskTypeAdgroupDailyReportSpec
     *
     * @return \TencentAds\Model\AsyncTasksTaskTypeAdgroupDailyReportSpec
     */
    public function getTaskTypeAdgroupDailyReportSpec()
    {
        return $this->container['taskTypeAdgroupDailyReportSpec'];
    }

    /**
     * Sets taskTypeAdgroupDailyReportSpec
     *
     * @param \TencentAds\Model\AsyncTasksTaskTypeAdgroupDailyReportSpec $taskTypeAdgroupDailyReportSpec taskTypeAdgroupDailyReportSpec
     *
     * @return $this
     */
    public function setTaskTypeAdgroupDailyReportSpec($taskTypeAdgroupDailyReportSpec)
    {
        $this->container['taskTypeAdgroupDailyReportSpec'] = $taskTypeAdgroupDailyReportSpec;

        return $this;
    }

    /**
     * Gets taskTypeIndustryCreativeTemplateReportSpec
     *
     * @return \TencentAds\Model\AsyncTasksTaskTypeIndustryCreativeTemplateReportSpec
     */
    public function getTaskTypeIndustryCreativeTemplateReportSpec()
    {
        return $this->container['taskTypeIndustryCreativeTemplateReportSpec'];
    }

    /**
     * Sets taskTypeIndustryCreativeTemplateReportSpec
     *
     * @param \TencentAds\Model\AsyncTasksTaskTypeIndustryCreativeTemplateReportSpec $taskTypeIndustryCreativeTemplateReportSpec taskTypeIndustryCreativeTemplateReportSpec
     *
     * @return $this
     */
    public function setTaskTypeIndustryCreativeTemplateReportSpec($taskTypeIndustryCreativeTemplateReportSpec)
    {
        $this->container['taskTypeIndustryCreativeTemplateReportSpec'] = $taskTypeIndustryCreativeTemplateReportSpec;

        return $this;
    }

    /**
     * Gets taskTypeWechatAdgroupHourlyReportSpec
     *
     * @return \TencentAds\Model\AsyncTasksTaskTypeWechatAdgroupHourlyReportSpec
     */
    public function getTaskTypeWechatAdgroupHourlyReportSpec()
    {
        return $this->container['taskTypeWechatAdgroupHourlyReportSpec'];
    }

    /**
     * Sets taskTypeWechatAdgroupHourlyReportSpec
     *
     * @param \TencentAds\Model\AsyncTasksTaskTypeWechatAdgroupHourlyReportSpec $taskTypeWechatAdgroupHourlyReportSpec taskTypeWechatAdgroupHourlyReportSpec
     *
     * @return $this
     */
    public function setTaskTypeWechatAdgroupHourlyReportSpec($taskTypeWechatAdgroupHourlyReportSpec)
    {
        $this->container['taskTypeWechatAdgroupHourlyReportSpec'] = $taskTypeWechatAdgroupHourlyReportSpec;

        return $this;
    }

    /**
     * Gets taskTypeWechatAdgroupDailyReportSpec
     *
     * @return \TencentAds\Model\AsyncTasksTaskTypeWechatAdgroupDailyReportSpec
     */
    public function getTaskTypeWechatAdgroupDailyReportSpec()
    {
        return $this->container['taskTypeWechatAdgroupDailyReportSpec'];
    }

    /**
     * Sets taskTypeWechatAdgroupDailyReportSpec
     *
     * @param \TencentAds\Model\AsyncTasksTaskTypeWechatAdgroupDailyReportSpec $taskTypeWechatAdgroupDailyReportSpec taskTypeWechatAdgroupDailyReportSpec
     *
     * @return $this
     */
    public function setTaskTypeWechatAdgroupDailyReportSpec($taskTypeWechatAdgroupDailyReportSpec)
    {
        $this->container['taskTypeWechatAdgroupDailyReportSpec'] = $taskTypeWechatAdgroupDailyReportSpec;

        return $this;
    }

    /**
     * Gets taskTypeWechatAdHourlyReportSpec
     *
     * @return \TencentAds\Model\AsyncTasksTaskTypeWechatAdHourlyReportSpec
     */
    public function getTaskTypeWechatAdHourlyReportSpec()
    {
        return $this->container['taskTypeWechatAdHourlyReportSpec'];
    }

    /**
     * Sets taskTypeWechatAdHourlyReportSpec
     *
     * @param \TencentAds\Model\AsyncTasksTaskTypeWechatAdHourlyReportSpec $taskTypeWechatAdHourlyReportSpec taskTypeWechatAdHourlyReportSpec
     *
     * @return $this
     */
    public function setTaskTypeWechatAdHourlyReportSpec($taskTypeWechatAdHourlyReportSpec)
    {
        $this->container['taskTypeWechatAdHourlyReportSpec'] = $taskTypeWechatAdHourlyReportSpec;

        return $this;
    }

    /**
     * Gets taskTypeWechatAdDailyReportSpec
     *
     * @return \TencentAds\Model\AsyncTasksTaskTypeWechatAdDailyReportSpec
     */
    public function getTaskTypeWechatAdDailyReportSpec()
    {
        return $this->container['taskTypeWechatAdDailyReportSpec'];
    }

    /**
     * Sets taskTypeWechatAdDailyReportSpec
     *
     * @param \TencentAds\Model\AsyncTasksTaskTypeWechatAdDailyReportSpec $taskTypeWechatAdDailyReportSpec taskTypeWechatAdDailyReportSpec
     *
     * @return $this
     */
    public function setTaskTypeWechatAdDailyReportSpec($taskTypeWechatAdDailyReportSpec)
    {
        $this->container['taskTypeWechatAdDailyReportSpec'] = $taskTypeWechatAdDailyReportSpec;

        return $this;
    }

    /**
     * Gets taskTypeWechatAdvertisingDataSpec
     *
     * @return \TencentAds\Model\AsyncTasksTaskTypeWechatAdvertisingDataSpec
     */
    public function getTaskTypeWechatAdvertisingDataSpec()
    {
        return $this->container['taskTypeWechatAdvertisingDataSpec'];
    }

    /**
     * Sets taskTypeWechatAdvertisingDataSpec
     *
     * @param \TencentAds\Model\AsyncTasksTaskTypeWechatAdvertisingDataSpec $taskTypeWechatAdvertisingDataSpec taskTypeWechatAdvertisingDataSpec
     *
     * @return $this
     */
    public function setTaskTypeWechatAdvertisingDataSpec($taskTypeWechatAdvertisingDataSpec)
    {
        $this->container['taskTypeWechatAdvertisingDataSpec'] = $taskTypeWechatAdvertisingDataSpec;

        return $this;
    }

    /**
     * Gets taskTypeWechatPoiHourlyReportSpec
     *
     * @return \TencentAds\Model\AsyncTasksTaskTypeWechatPoiHourlyReportSpec
     */
    public function getTaskTypeWechatPoiHourlyReportSpec()
    {
        return $this->container['taskTypeWechatPoiHourlyReportSpec'];
    }

    /**
     * Sets taskTypeWechatPoiHourlyReportSpec
     *
     * @param \TencentAds\Model\AsyncTasksTaskTypeWechatPoiHourlyReportSpec $taskTypeWechatPoiHourlyReportSpec taskTypeWechatPoiHourlyReportSpec
     *
     * @return $this
     */
    public function setTaskTypeWechatPoiHourlyReportSpec($taskTypeWechatPoiHourlyReportSpec)
    {
        $this->container['taskTypeWechatPoiHourlyReportSpec'] = $taskTypeWechatPoiHourlyReportSpec;

        return $this;
    }

    /**
     * Gets taskTypePoiHourlyReportSpec
     *
     * @return \TencentAds\Model\AsyncTasksTaskTypePoiHourlyReportSpec
     */
    public function getTaskTypePoiHourlyReportSpec()
    {
        return $this->container['taskTypePoiHourlyReportSpec'];
    }

    /**
     * Sets taskTypePoiHourlyReportSpec
     *
     * @param \TencentAds\Model\AsyncTasksTaskTypePoiHourlyReportSpec $taskTypePoiHourlyReportSpec taskTypePoiHourlyReportSpec
     *
     * @return $this
     */
    public function setTaskTypePoiHourlyReportSpec($taskTypePoiHourlyReportSpec)
    {
        $this->container['taskTypePoiHourlyReportSpec'] = $taskTypePoiHourlyReportSpec;

        return $this;
    }

    /**
     * Gets taskTypeEncryptedCustomImeiSpec
     *
     * @return \TencentAds\Model\AsyncTasksTaskTypeEncryptedCustomImeiSpec
     */
    public function getTaskTypeEncryptedCustomImeiSpec()
    {
        return $this->container['taskTypeEncryptedCustomImeiSpec'];
    }

    /**
     * Sets taskTypeEncryptedCustomImeiSpec
     *
     * @param \TencentAds\Model\AsyncTasksTaskTypeEncryptedCustomImeiSpec $taskTypeEncryptedCustomImeiSpec taskTypeEncryptedCustomImeiSpec
     *
     * @return $this
     */
    public function setTaskTypeEncryptedCustomImeiSpec($taskTypeEncryptedCustomImeiSpec)
    {
        $this->container['taskTypeEncryptedCustomImeiSpec'] = $taskTypeEncryptedCustomImeiSpec;

        return $this;
    }

    /**
     * Gets taskTypeEncryptedTencentImeiSpec
     *
     * @return \TencentAds\Model\AsyncTasksTaskTypeEncryptedTencentImeiSpec
     */
    public function getTaskTypeEncryptedTencentImeiSpec()
    {
        return $this->container['taskTypeEncryptedTencentImeiSpec'];
    }

    /**
     * Sets taskTypeEncryptedTencentImeiSpec
     *
     * @param \TencentAds\Model\AsyncTasksTaskTypeEncryptedTencentImeiSpec $taskTypeEncryptedTencentImeiSpec taskTypeEncryptedTencentImeiSpec
     *
     * @return $this
     */
    public function setTaskTypeEncryptedTencentImeiSpec($taskTypeEncryptedTencentImeiSpec)
    {
        $this->container['taskTypeEncryptedTencentImeiSpec'] = $taskTypeEncryptedTencentImeiSpec;

        return $this;
    }

    /**
     * Gets taskTypeClearTencentImeiSpec
     *
     * @return \TencentAds\Model\AsyncTasksTaskTypeClearTencentImeiSpec
     */
    public function getTaskTypeClearTencentImeiSpec()
    {
        return $this->container['taskTypeClearTencentImeiSpec'];
    }

    /**
     * Sets taskTypeClearTencentImeiSpec
     *
     * @param \TencentAds\Model\AsyncTasksTaskTypeClearTencentImeiSpec $taskTypeClearTencentImeiSpec taskTypeClearTencentImeiSpec
     *
     * @return $this
     */
    public function setTaskTypeClearTencentImeiSpec($taskTypeClearTencentImeiSpec)
    {
        $this->container['taskTypeClearTencentImeiSpec'] = $taskTypeClearTencentImeiSpec;

        return $this;
    }

    /**
     * Gets taskTypeClickForwardedDataSpec
     *
     * @return \TencentAds\Model\AsyncTasksTaskTypeClickForwardedDataSpec
     */
    public function getTaskTypeClickForwardedDataSpec()
    {
        return $this->container['taskTypeClickForwardedDataSpec'];
    }

    /**
     * Sets taskTypeClickForwardedDataSpec
     *
     * @param \TencentAds\Model\AsyncTasksTaskTypeClickForwardedDataSpec $taskTypeClickForwardedDataSpec taskTypeClickForwardedDataSpec
     *
     * @return $this
     */
    public function setTaskTypeClickForwardedDataSpec($taskTypeClickForwardedDataSpec)
    {
        $this->container['taskTypeClickForwardedDataSpec'] = $taskTypeClickForwardedDataSpec;

        return $this;
    }

    /**
     * Gets taskDeviceInfoSpec
     *
     * @return \TencentAds\Model\AsyncTasksTaskDeviceInfoSpec
     */
    public function getTaskDeviceInfoSpec()
    {
        return $this->container['taskDeviceInfoSpec'];
    }

    /**
     * Sets taskDeviceInfoSpec
     *
     * @param \TencentAds\Model\AsyncTasksTaskDeviceInfoSpec $taskDeviceInfoSpec taskDeviceInfoSpec
     *
     * @return $this
     */
    public function setTaskDeviceInfoSpec($taskDeviceInfoSpec)
    {
        $this->container['taskDeviceInfoSpec'] = $taskDeviceInfoSpec;

        return $this;
    }

    /**
     * Gets taskTypeRebateDetailSpec
     *
     * @return \TencentAds\Model\AsyncTasksTaskTypeRebateDetailSpec
     */
    public function getTaskTypeRebateDetailSpec()
    {
        return $this->container['taskTypeRebateDetailSpec'];
    }

    /**
     * Sets taskTypeRebateDetailSpec
     *
     * @param \TencentAds\Model\AsyncTasksTaskTypeRebateDetailSpec $taskTypeRebateDetailSpec taskTypeRebateDetailSpec
     *
     * @return $this
     */
    public function setTaskTypeRebateDetailSpec($taskTypeRebateDetailSpec)
    {
        $this->container['taskTypeRebateDetailSpec'] = $taskTypeRebateDetailSpec;

        return $this;
    }

    /**
     * Gets taskTypeCreateAndroidChannelPackageSpec
     *
     * @return \TencentAds\Model\AsyncTasksTaskTypeCreateAndroidChannelPackageSpec
     */
    public function getTaskTypeCreateAndroidChannelPackageSpec()
    {
        return $this->container['taskTypeCreateAndroidChannelPackageSpec'];
    }

    /**
     * Sets taskTypeCreateAndroidChannelPackageSpec
     *
     * @param \TencentAds\Model\AsyncTasksTaskTypeCreateAndroidChannelPackageSpec $taskTypeCreateAndroidChannelPackageSpec taskTypeCreateAndroidChannelPackageSpec
     *
     * @return $this
     */
    public function setTaskTypeCreateAndroidChannelPackageSpec($taskTypeCreateAndroidChannelPackageSpec)
    {
        $this->container['taskTypeCreateAndroidChannelPackageSpec'] = $taskTypeCreateAndroidChannelPackageSpec;

        return $this;
    }

    /**
     * Gets taskTypeUpdateAndroidChannelPackageSpec
     *
     * @return \TencentAds\Model\AsyncTasksTaskTypeUpdateAndroidChannelPackageSpec
     */
    public function getTaskTypeUpdateAndroidChannelPackageSpec()
    {
        return $this->container['taskTypeUpdateAndroidChannelPackageSpec'];
    }

    /**
     * Sets taskTypeUpdateAndroidChannelPackageSpec
     *
     * @param \TencentAds\Model\AsyncTasksTaskTypeUpdateAndroidChannelPackageSpec $taskTypeUpdateAndroidChannelPackageSpec taskTypeUpdateAndroidChannelPackageSpec
     *
     * @return $this
     */
    public function setTaskTypeUpdateAndroidChannelPackageSpec($taskTypeUpdateAndroidChannelPackageSpec)
    {
        $this->container['taskTypeUpdateAndroidChannelPackageSpec'] = $taskTypeUpdateAndroidChannelPackageSpec;

        return $this;
    }

    /**
     * Gets taskTypeUnionPositionReportSpec
     *
     * @return \TencentAds\Model\AsyncTasksTaskTypeUnionPositionReportSpec
     */
    public function getTaskTypeUnionPositionReportSpec()
    {
        return $this->container['taskTypeUnionPositionReportSpec'];
    }

    /**
     * Sets taskTypeUnionPositionReportSpec
     *
     * @param \TencentAds\Model\AsyncTasksTaskTypeUnionPositionReportSpec $taskTypeUnionPositionReportSpec taskTypeUnionPositionReportSpec
     *
     * @return $this
     */
    public function setTaskTypeUnionPositionReportSpec($taskTypeUnionPositionReportSpec)
    {
        $this->container['taskTypeUnionPositionReportSpec'] = $taskTypeUnionPositionReportSpec;

        return $this;
    }

    /**
     * Gets taskTypeDeviceDetailCpcSpec
     *
     * @return \TencentAds\Model\AsyncTasksTaskTypeDeviceDetailCpcSpec
     */
    public function getTaskTypeDeviceDetailCpcSpec()
    {
        return $this->container['taskTypeDeviceDetailCpcSpec'];
    }

    /**
     * Sets taskTypeDeviceDetailCpcSpec
     *
     * @param \TencentAds\Model\AsyncTasksTaskTypeDeviceDetailCpcSpec $taskTypeDeviceDetailCpcSpec taskTypeDeviceDetailCpcSpec
     *
     * @return $this
     */
    public function setTaskTypeDeviceDetailCpcSpec($taskTypeDeviceDetailCpcSpec)
    {
        $this->container['taskTypeDeviceDetailCpcSpec'] = $taskTypeDeviceDetailCpcSpec;

        return $this;
    }

    /**
     * Gets taskTypeOmAdvertisingInfoSpec
     *
     * @return \TencentAds\Model\AsyncTasksTaskTypeOmAdvertisingInfoSpec
     */
    public function getTaskTypeOmAdvertisingInfoSpec()
    {
        return $this->container['taskTypeOmAdvertisingInfoSpec'];
    }

    /**
     * Sets taskTypeOmAdvertisingInfoSpec
     *
     * @param \TencentAds\Model\AsyncTasksTaskTypeOmAdvertisingInfoSpec $taskTypeOmAdvertisingInfoSpec taskTypeOmAdvertisingInfoSpec
     *
     * @return $this
     */
    public function setTaskTypeOmAdvertisingInfoSpec($taskTypeOmAdvertisingInfoSpec)
    {
        $this->container['taskTypeOmAdvertisingInfoSpec'] = $taskTypeOmAdvertisingInfoSpec;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


