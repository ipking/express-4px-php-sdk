<?php
/**
 * 取消出库委托示例
 */
use express_4px\oms\fu_wms_outbound_cancel\v100\CancelOutboundClient;
use express_4px\oms\fu_wms_outbound_cancel\v100\CancelOutboundParameter;

include_once dirname(dirname(dirname(dirname(__FILE__)))) . "/src/autoload.inc.php";
include_once dirname(dirname(__FILE__)) . "/config.inc.php";

$json =<<<EOL
{
    
    "consignment_no": "",
	"ref_no": "201804120004",
	"cancel_type":"OT",
	"cancel_remark":"TEST"
}
EOL;
$array = json_decode($json,true);
//构造请求参数
$parameter = new CancelOutboundParameter($array);

$client = new CancelOutboundClient($parameter);   //构造请求对象，将请求参数传入
$client->setAuthInfo(config::$APP_KEY, config::$APP_SECRET,config::$ACCESS_TOKEN); //设置认证信息：AppKey, AppSecret, access_token

//发送请求，获取返回数据
$rsp = $client->send();

//处理返回数据
if ( $rsp->isSuccess() ) {
	$data = $rsp->getData();    //返回数据
	var_dump($data);
	
	echo $rsp->consignment_no.PHP_EOL;
	echo $rsp->ref_no.PHP_EOL;
} else {
	var_dump( $rsp->errors );     //错误码
	var_dump( $rsp->msg );  //错误信息
}