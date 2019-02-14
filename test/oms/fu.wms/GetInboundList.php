<?php
/**
 * 批量查询入库委托示例
 */

use express_4px\oms\fu_wms_inbound_getlist\v100\GetInboundListClient;
use express_4px\oms\fu_wms_inbound_getlist\v100\GetInboundListParameter;

include_once dirname(dirname(dirname(dirname(__FILE__)))) . "/src/autoload.inc.php";
include_once dirname(dirname(__FILE__)) . "/config.inc.php";

$json =<<<EOL
{
	"consignment_no": "",
	"ref_no": "",
	"4px_tracking_no": " ",
	"warehouse_code": "",
	"logistics_product_code": "",
	"status": "",
	"create_time_start": "1530288000000",
	"create_time_end": "1532880000000",
	"page_no": 1,
	"page_size": 10

}
EOL;

//构造请求参数
$parameter = new GetInboundListParameter( json_decode($json,true));
//或者
$parameter->ref_no = '';

$client = new GetInboundListClient($parameter);   //构造请求对象，将请求参数传入
$client->setAuthInfo(config::$APP_KEY, config::$APP_SECRET,config::$ACCESS_TOKEN); //设置认证信息：AppKey, AppSecret, access_token

//发送请求，获取返回数据
$rsp = $client->send();

//处理返回数据
if ( $rsp->isSuccess() ) {
	$data = $rsp->getData();    //返回数据
	var_dump($data);
	
	foreach($rsp->data as $item){
		echo $item->consignment_no.PHP_EOL;
		
		foreach($item->lstsku as $sku_item){
			echo $sku_item->sku_code.PHP_EOL;
		}
	}
} else {
	var_dump( $rsp->errors );     //错误码
	var_dump( $rsp->msg );  //错误信息
}