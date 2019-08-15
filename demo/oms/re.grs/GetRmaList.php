<?php
/**
 * 批量查询退货单信息示例
 */
use express_4px\oms\re_grs_rmainfo_list\v100\GetRmaInfoListClient;
use express_4px\oms\re_grs_rmainfo_list\v100\GetRmaInfoListParameter;

include_once dirname(dirname(dirname(dirname(__FILE__)))) . "/src/autoload.inc.php";
include_once dirname(dirname(__FILE__)) . "/config.inc.php";

$json =<<<EOL
{
    "page_count": "",
    "page_start": "",
    "received_shipping_no": "",
    "recevier_time_end": "",
    "recevier_time_start": "",
    "rma_no": ""
}
EOL;

//构造请求参数
$parameter = new GetRmaInfoListParameter( json_decode($json,true));
//或者
$parameter->rma_no = '';

$client = new GetRmaInfoListClient($parameter);   //构造请求对象，将请求参数传入

//发送请求，获取返回数据
$rsp = $client->send();

//处理返回数据
if ( $rsp->isSuccess() ) {
	$data = $rsp->getData();    //返回数据
	var_dump($data);
	
} else {
	var_dump( $rsp->errors );     //错误码
	var_dump( $rsp->msg );  //错误信息
}