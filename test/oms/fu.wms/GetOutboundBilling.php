<?php
/**
 * 查询出库委托费用示例
 */

use express_4px\oms\fu_wms_outbound_getbilling\v100\GetOutboundBillingClient;
use express_4px\oms\fu_wms_outbound_getbilling\v100\GetOutboundBillingParameter;

include_once dirname(dirname(dirname(dirname(__FILE__)))) . "/src/autoload.inc.php";
include_once dirname(dirname(__FILE__)) . "/config.inc.php";

$json =<<<EOL
{
	"consignment_no": "OC9117151805020002",
	"ref_no":""
}
EOL;

//构造请求参数
$parameter = new GetOutboundBillingParameter( json_decode($json,true));
//或者
$parameter->ref_no = '';

$client = new GetOutboundBillingClient($parameter);   //构造请求对象，将请求参数传入
$client->setAuthInfo(config::$APP_KEY, config::$APP_SECRET,config::$ACCESS_TOKEN); //设置认证信息：AppKey, AppSecret, access_token

//发送请求，获取返回数据
$rsp = $client->send();

//处理返回数据
if ( $rsp->isSuccess() ) {
	$data = $rsp->getData();    //返回数据
	var_dump($data);
	
	foreach($rsp->billinglist as $item){
		echo $item->consignment_no.PHP_EOL;
	}
} else {
	var_dump( $rsp->errors );     //错误码
	var_dump( $rsp->msg );  //错误信息
}