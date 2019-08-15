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
    "user_id":"69da7738d17c40fb8bb98b207ceede01",
    "ref_no":"u033411011111111127",
    "warehouse_code":"USLAXA",
    "services_product_code":"CS",
    "received_shipping_no":"",
    "package_photograph_service":"Y",
    "weight":"10.00",
    "remark":"0323002",
    "lstsku":[
        {
            "sku_code":"06-LK826 ",
            "plan_qty":2,
            "sku_photograph_service":"Y",
            "replace_product_code_service":"Y",
            "new_product_code":"06-LK826 ",
            "expired_date":""
        }
    ]
}
EOL;

//构造请求参数
$parameter = new CreateRmaParameter( json_decode($json,true));
//或者
$parameter->ref_no = 'u033411011111111129';

$client = new CreateRmaClient($parameter);   //构造请求对象，将请求参数传入

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