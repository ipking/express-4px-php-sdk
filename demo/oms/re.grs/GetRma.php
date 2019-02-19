<?php
/**
 * 查询退货单信息示例
 */
use express_4px\oms\re_grs_rmainfo_get\v100\GetRmaClient;
use express_4px\oms\re_grs_rmainfo_get\v100\GetRmaParameter;

include_once dirname(dirname(dirname(dirname(__FILE__)))) . "/src/autoload.inc.php";
include_once dirname(dirname(__FILE__)) . "/config.inc.php";

$json =<<<EOL
{
    "rma_no":"GRSRAASCN180327SB2510"
}
EOL;

//构造请求参数
$parameter = new GetRmaParameter( json_decode($json,true));
//或者
$parameter->rma_no = 'GRSRAASCN180327SB2510';

$client = new GetRmaClient($parameter);   //构造请求对象，将请求参数传入
$client->setAuthInfo(config::$APP_KEY, config::$APP_SECRET,config::$ACCESS_TOKEN); //设置认证信息：AppKey, AppSecret, access_token

//发送请求，获取返回数据
$rsp = $client->send();

//处理返回数据
if ( $rsp->isSuccess() ) {
	$data = $rsp->getData();    //返回数据
	var_dump($data);
	
	echo $rsp->rma_no.PHP_EOL;
	echo $rsp->received_shipping_no.PHP_EOL;
	echo $rsp->status.PHP_EOL;
} else {
	var_dump( $rsp->errors );     //错误码
	var_dump( $rsp->msg );  //错误信息
}