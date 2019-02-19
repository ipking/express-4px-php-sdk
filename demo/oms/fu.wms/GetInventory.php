<?php
/**
 * 查询库存库龄示例
 */
use express_4px\oms\fu_wms_inventory_get\v100\GetInventoryClient;
use express_4px\oms\fu_wms_inventory_get\v100\GetInventoryParameter;

include_once dirname(dirname(dirname(dirname(__FILE__)))) . "/src/autoload.inc.php";
include_once dirname(dirname(__FILE__)) . "/config.inc.php";

$json =<<<EOL
{
	"customer_code": "",
	"lstsku": [
		"SKUCODE",
		"SKUCODE1"
	],
	"page_no": 1,
	"page_size": 10
}
EOL;
$array = json_decode($json,true);
//构造请求参数
$parameter = new GetInventoryParameter($array);
//或者
$parameter->customer_code = '';
$parameter->lstsku = array(
	"SKUCODE",
	"SKUCODE1"
);

$client = new GetInventoryClient($parameter);   //构造请求对象，将请求参数传入
$client->setAuthInfo(config::$APP_KEY, config::$APP_SECRET,config::$ACCESS_TOKEN); //设置认证信息：AppKey, AppSecret, access_token

//发送请求，获取返回数据
$rsp = $client->send();

//处理返回数据
if ( $rsp->isSuccess() ) {
	$data = $rsp->getData();    //返回数据
	var_dump($data);
	
	foreach($rsp->data as $item){
		echo $item->sku_code.PHP_EOL;
	}
} else {
	var_dump( $rsp->errors );     //错误码
	var_dump( $rsp->msg );  //错误信息
}