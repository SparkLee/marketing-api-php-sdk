<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取广告诊断信息(Ad diagnosis)列表的简单示例
 */
class GetAdDiagnosis
{
    public static $tads;
    public static $ACCESS_TOKEN = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID   = 'YOUR ACCOUNT ID';
    public static $ADGROUP_ID   = 'YOUR ADGROUP ID'; // 广告组ID

    public function init()
    {
        $tads = TencentAds::init([
            'access_token' => static::$ACCESS_TOKEN,
            'is_debug'     => true,
        ]);
        $tads->useSandbox(); // 默认访问沙箱环境，如访问正式环境，请切换为$tads->useProduction()
        static::$tads = $tads;

        return $tads;
    }

    public function main()
    {
        try {
            /* @var TencentAds $tads */
            $tads = static::$tads;

            $fields = [
                'adgroup_id', 'diagnose_time', 'operate_suggestion', 'learning_status', 'cost_guarantee_status',
                'cost_guarantee_money', 'exposure_compete_score', 'exposure_raise_rate', 'cpa_bias_today',
                'cpa_bias_overall', 'is_ocpx', 'conclusion_description', 'operate_suggestion_desc',
                'learning_status_desc', 'exposure_compete_score_desc', 'detail',
            ]; // 需要返回的字段
            $detail_fields = [
                'funnel', 'target_detail', 'compete_detail', 'exposure_detail', 'click_detail', 'conversion_detail',
                'cpa_detail', 'operation_log', 'optimization',
            ];
            $response = $tads->adDiagnosis()
                             ->get([
                                 'account_id'      => static::$ACCOUNT_ID,
                                 'adgroup_id_list' => [static::$ADGROUP_ID],
                                 'detail_fields'   => $detail_fields,
                                 'fields'          => $fields,
                             ]);

            // 从返回里获得Ad diagnosis信息
            foreach ($response->getList() as $diagnosisInfo) {
                // echo $diagnosisInfo . PHP_EOL;
            }

            return $response;
        } catch (TencentAdsResponseException $e) {
            // When Api returns an error
            echo 'Tencent ads returned an error: ' . $e->getMessage() . PHP_EOL;
            throw $e;
        } catch (TencentAdsSDKException $e) {
            // When validation fails or other local issues
            echo 'Tencent ads SDK returned an error: ' . $e->getMessage() . PHP_EOL;
            throw $e;
        } catch (Exception $e) {
            echo 'Other exception: ' . $e->getMessage() . PHP_EOL;
            throw $e;
        }
    }
}

if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    try {
        $example = new GetAdDiagnosis();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
