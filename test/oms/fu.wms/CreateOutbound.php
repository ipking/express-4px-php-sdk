<?php
/**
 * 创建出库委托示例
 */
use express_4px\oms\fu_wms_outbound_create\v100\CreateOutboundClient;
use express_4px\oms\fu_wms_outbound_create\v100\CreateOutboundParameter;

include_once dirname(dirname(dirname(dirname(__FILE__)))) . "/src/autoload.inc.php";
include_once dirname(dirname(__FILE__)) . "/config.inc.php";

$json =<<<EOL
{
	"customer_code": "",
	"ref_no": "REF20181031000002",
	"from_warehouse_code": "CNDGMA",
	"consignment_type": "S",
	"logistics_service_info": {
		"logistics_product_code": "API-TEST",
		"return_service": "N",
		"signature_service": "N"
	},
	"oda": "N",
	"sales_platform": "AE",
	"seller_id": "seller id",
	"sales_no": "SB456123",
	"insure_services": "8Y",
	"currency": "USD",
	"insure_value": 100,
	"ocustoms_service": "D1",
	"icustoms_service": "D3",
	"remark": "order remark",
	"oconsignment_desc": {
		"country": "US",
		"state": "AL",
		"city": "CECIL",
		"district": "District",
		"post_code": "21544",
		"street": "JDHSDHFSDHFKS",
		"house_number": "138",
		"company": "4PX",
		"last_name": "Last Name",
		"first_name": "Jack",
		"phone": "15644556258",
		"email": "test@163.com"
	},
	"identity_info": {
		"id_type": "ID CARD TYPE",
		"id_card": "430524199111052479",
		"id_front_pic": "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wBDAAMCAgMCAgMDAwMEAwMEBQgFBQQ==",
		"id_back_pic": "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wBDAAMCAgMCAgMDAwMEAwMEBQgFBQQ=="
	},
	"oconsignment_sku": [{
		"sku_code": "SKUCODE1",
		"qty": 1,
		"stock_quality": "G"
	}]
}
EOL;
$array = json_decode($json,true);
//构造请求参数
$parameter = new CreateOutboundParameter($array);
//或者
$parameter->ref_no = 'REF20181031000002';

$client = new CreateOutboundClient($parameter);   //构造请求对象，将请求参数传入
$client->setAuthInfo(config::$APP_KEY, config::$APP_SECRET,config::$ACCESS_TOKEN); //设置认证信息：AppKey, AppSecret, access_token

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