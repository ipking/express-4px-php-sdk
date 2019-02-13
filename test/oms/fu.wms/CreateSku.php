<?php
/**
 * 创建SKU示例
 */
use express_4px\oms\fu_wms_sku_create\v100\CreateSkuClient;
use express_4px\oms\fu_wms_sku_create\v100\CreateSkuParameter;

include_once dirname(dirname(dirname(dirname(__FILE__)))) . "/src/autoload.inc.php";

$json =<<<EOL
{
	"product_code": "",
	"specification": "",
	"appearance": "",
	"characteristic": [""],
	"sn_rule_code": "",
	"expired_date": "",
	"sales_link": "",
	"include_batch": "",
	"include_battery": "N",
	"battery_config": "",
	"battery_type": "",
	"battery_power": "",
	"battery_number": null,
	"battery_resource": "",
	"remark": "create sku",
	"release_flag": "",
	"customer_code": "",
	"declare_product_code": "",
	"sku_code": "SKUCODE",
	"sku_name": "SKUNAME",
	"uom": "KGM",
	"wrapping": "S",
	"weight": "1",
	"weight_unit": "g",
	"length": "1",
	"width": "1",
	"height": "1",
	"logistics_package": "N",
	"package_material": "WO",
	"picture_url": [
		"https://fpx-wms-fb4-storage.s3-ap-northeast-1.amazonaws.com/fpx-pro/344c09fa-a792-42ee-8953-a2793015c2c9.jpg",
		"https://fpx-wms-fb4-storage.s3-ap-northeast-1.amazonaws.com/fpx-pro/344c09fa-a792-42ee-8953-a2793015c2c9.jpg",
		"https://fpx-wms-fb4-storage.s3-ap-northeast-1.amazonaws.com/fpx-pro/344c09fa-a792-42ee-8953-a2793015c2c9.jpg",
		"http://wx2.sinaimg.cn/mw690/ac38503ely1fesz8m0ov6j20qo140dix.jpg",
		"https://fpx-wms-fb4-storage.s3-ap-northeast-1.amazonaws.com/fpx-pro/344c09fa-a792-42ee-8953-a2793015c2c9.jpg",
		"https://fpx-wms-fb4-storage.s3-ap-northeast-1.amazonaws.com/fpx-pro/344c09fa-a792-42ee-8953-a2793015c2c9.jpg"
	]
}
EOL;

//构造请求参数
$parameter = new CreateSkuParameter( json_decode($json,true));
CreateSkuClient::$debug = true;
$client = new CreateSkuClient($parameter);   //构造请求对象，将请求参数传入
$client->setAuthInfo('f63914c1-5559-4762-b561-7f759aa849d9', '30eb6b31-ad6f-4281-8292-83c00aa96891'); //设置认证信息：AppKey, AppSecret

//发送请求，获取返回数据
$rsp = $client->send();

//处理返回数据
if ( $rsp->isSuccess() ) {
	$data = $rsp->getData();    //返回数据
	var_dump($data);
	
	echo $rsp->sku_code.PHP_EOL;
	echo $rsp->sku_id.PHP_EOL;
} else {
	var_dump( $rsp->errors );     //错误码
	var_dump( $rsp->msg );  //错误信息
}