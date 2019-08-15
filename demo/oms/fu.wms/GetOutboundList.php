<?php
/**
 * 批量查询出库委托示例
 */

use express_4px\oms\fu_wms_outbound_getlist\v100\GetOutboundListClient;
use express_4px\oms\fu_wms_outbound_getlist\v100\GetOutboundListParameter;

include_once dirname(dirname(dirname(dirname(__FILE__)))) . "/src/autoload.inc.php";
include_once dirname(dirname(__FILE__)) . "/config.inc.php";

$json =<<<EOL
{
	"ref_no": "",
	"consignment_no": "",
	"4px_tracking_no": "",
	"status": "S",
	"sku_code": "",
	"from_warehouse_code": "CNDGMA",
	"logistics_product_code": "",
	"sales_platform": "",
	"seller_id": "",
	"sales_no": "",
	"shipping_no": "",
	"country": "",
	"page_no": 1,
	"page_size": 1
}
EOL;

//构造请求参数
$parameter = new GetOutboundListParameter( json_decode($json,true));
//或者
$parameter->ref_no = '';

$client = new GetOutboundListClient($parameter);   //构造请求对象，将请求参数传入

//发送请求，获取返回数据
$rsp = $client->send();

//处理返回数据
if ( $rsp->isSuccess() ) {
	$data = $rsp->getData();    //返回数据
	var_dump($data);
	
	foreach($rsp->data as $item){
		echo $item->consignment_no.PHP_EOL;
		
		foreach($item->outboundlist_sku as $sku_item){
			echo $sku_item->sku_code.PHP_EOL;
		}
	}
} else {
	var_dump( $rsp->errors );     //错误码
	var_dump( $rsp->msg );  //错误信息
}