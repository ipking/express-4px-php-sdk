<?php
/**
 * 创建退货预报单示例
 */
use express_4px\oms\re_grs_rma_create\v100\CreateRmaClient;
use express_4px\oms\re_grs_rma_create\v100\CreateRmaParameter;

include_once dirname(dirname(dirname(dirname(__FILE__)))) . "/src/autoload.inc.php";
include_once dirname(dirname(__FILE__)) . "/config.inc.php";

$json =<<<EOL
{
    "user_id":"d8b0a542b4fb4135a3e4eda6eb4c96c5",
    "ref_no":"u033411011111111127",
    "warehouse_code":"USLAXA",
    "services_product_code":"SS",
    "received_shipping_no":"m034313111101111611114",
    "package_photograph_service":"Y",
    "weight":"10.00",
    "remark":"0323002",
    "lstsku":[
        {
            "sku_code":"XL001",
            "plan_qty":2,
            "sku_photograph_service":"Y",
            "replace_product_code_service":"Y",
            "new_product_code":"XL001",
            "expired_date":""
        }
    ]
}
EOL;

//构造请求参数
$parameter = new CreateRmaParameter( json_decode($json,true));
//或者
$parameter->ref_no = 'u033411011111111127';

$client = new CreateRmaClient($parameter);   //构造请求对象，将请求参数传入
$client->setAuthInfo(config::$APP_KEY, config::$APP_SECRET,config::$ACCESS_TOKEN); //设置认证信息：AppKey, AppSecret, access_token

//发送请求，获取返回数据
$rsp = $client->send();

//处理返回数据
if ( $rsp->isSuccess() ) {
	$data = $rsp->getData();    //返回数据
	var_dump($data);
	
	echo $rsp->rma_no.PHP_EOL;
} else {
	var_dump( $rsp->errors );     //错误码
	var_dump( $rsp->msg );  //错误信息
}