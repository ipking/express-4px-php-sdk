<?php
/**
 * 库存查询示例
 */
use express_4px\oms\fu_wms_inventory_getdetail\v100\GetInventoryDetailClient;
use express_4px\oms\fu_wms_inventory_getdetail\v100\GetInventoryDetailParameter;

include_once dirname(dirname(dirname(dirname(__FILE__)))) . "/src/autoload.inc.php";
include_once dirname(dirname(__FILE__)) . "/config.inc.php";

$json =<<<EOL
{
	"warehouse_code": "",
	"customer_code": "",
	"lstsku": [
		"SKUCODE",
		"SKUCODE1"
	]
}
EOL;
$array = json_decode($json,true);
//构造请求参数
$parameter = new GetInventoryDetailParameter($array);
//或者
$parameter->customer_code = '';
$parameter->lstsku = array(
	"SKUCODE",
	"SKUCODE1"
);

$client = new GetInventoryDetailClient($parameter);   //构造请求对象，将请求参数传入

//发送请求，获取返回数据
$rsp = $client->send();

//处理返回数据
if ( $rsp->isSuccess() ) {
	$data = $rsp->getData();    //返回数据
	var_dump($data);
	
	foreach($rsp->inventorydetaillist as $item){
		echo $item->sku_code.PHP_EOL;
	}
} else {
	var_dump( $rsp->errors );     //错误码
	var_dump( $rsp->msg );  //错误信息
}