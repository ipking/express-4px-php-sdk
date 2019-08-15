<?php
/**
 * 创建入库委托示例
 */
use express_4px\oms\fu_wms_inbound_create\v100\CreateInboundClient;
use express_4px\oms\fu_wms_inbound_create\v100\CreateInboundParameter;

include_once dirname(dirname(dirname(dirname(__FILE__)))) . "/src/autoload.inc.php";
include_once dirname(dirname(__FILE__)) . "/config.inc.php";

$json =<<<EOL
{
	"customer_code": "",
	"ref_no": "REF2018082906",
	"is_pickup": "N",
	"from_warehouse_code": "CNDGMA",
	"to_warehouse_code": "CNHKGB",
	"transport_type": "G",
	"tracking_no": "",
	"license_plate": "",
	"supplier_address": {
		"country": "CN",
		"state": "广东省",
		"city": "深圳市",
		"district": "",
		"post_code": "",
		"street": "",
		"house_number": "",
		"company": " ",
		"contack_name": "",
		"phone": "",
		"pickup_time": "1530610925000",
		"plan_arrive_time": "1530610925000"
	},
	"total_volume": "11",
	"total_weight": "10",
	"weight_unit": "",
	"logistics_service_info": {
		"logistics_product_code": "API-TEST",
		"signature_service": "N"
	},
	"insure_services": "8Y",
	"ocustoms_service": "D1",
	"icustoms_service": "D4",
	"currency": "USD",
	"insure_value": "10",
	"remark": "",
	"iconsignment_sku": [{
		"box_no": "1",
		"sku_code": "SKUCODE1",
		"plan_qty": "10",
		"batch_no": "1111"
	}]
}
EOL;
$array = json_decode($json,true);
//构造请求参数
$parameter = new CreateInboundParameter($array);
//或者
$parameter->ref_no = 'REF2018082906';

$client = new CreateInboundClient($parameter);   //构造请求对象，将请求参数传入

//发送请求，获取返回数据
$rsp = $client->send();

//处理返回数据
if ( $rsp->isSuccess() ) {
	$data = $rsp->getData();    //返回数据
	var_dump($data);
	
	echo $rsp->consignment_no.PHP_EOL;
	echo $rsp->tracking_no.PHP_EOL;
} else {
	var_dump( $rsp->errors );     //错误码
	var_dump( $rsp->msg );  //错误信息
}