<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取商品系列(Product series)列表的简单示例
 */
class GetProductSeries
{
    public static $tads;
    public static $ACCESS_TOKEN = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID   = 'YOUR ACCOUNT ID';
    public static $CATALOG_ID   = 'YOUR CATALOG ID'; // 商品库ID

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
                'product_series_id', 'product_series_name', 'product_series_type', 'product_series_description',
                'product_series',
            ]; // 需要返回的字段

            $response = $tads->productSeries()
                             ->get([
                                 'account_id' => static::$ACCOUNT_ID,
                                 'catalog_id' => static::$CATALOG_ID,
                                 'fields'     => $fields,
                             ]);
            // 从返回里获得Product series信息
            foreach ($response->getList() as $seriesInfo) {
                // echo $seriesInfo . PHP_EOL;
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
        $example = new GetProductSeries();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
