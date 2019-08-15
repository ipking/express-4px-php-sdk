<?php
/**
 * 物流轨迹查询示例
 */
use express_4px\oms\tr_order_tracking_get\v100\GetTrackingClient;
use express_4px\oms\tr_order_tracking_get\v100\GetTrackingParameter;

include_once dirname(dirname(dirname(dirname(__FILE__)))) . "/src/autoload.inc.php";
include_once dirname(dirname(__FILE__)) . "/config.inc.php";

$json =<<<EOL
{
    "deliveryOrderNo":"1Z8E26Y00366094077"
}
EOL;

//构造请求参数
$parameter = new GetTrackingParameter( json_decode($json,true));
//或者
$parameter->deliveryOrderNo = '753562447606';

$client = new GetTrackingClient($parameter);   //构造请求对象，将请求参数传入


//发送请求，获取返回数据
$rsp = $client->send();

//处理返回数据
if ( $rsp->isSuccess() ) {
	$data = $rsp->getData();    //返回数据
	var_dump($data);
	
	echo $rsp->deliveryOrderNo.PHP_EOL;
	
	foreach($rsp->trackingList as $item){
		echo $item->businessLinkCode.PHP_EOL;
		echo $item->occurDatetime.PHP_EOL;
		echo $item->occurLocation.PHP_EOL;
		echo $item->trackingContent.PHP_EOL;
	}
} else {
	var_dump( $rsp->errors );     //错误码
	var_dump( $rsp->msg );  //错误信息
}