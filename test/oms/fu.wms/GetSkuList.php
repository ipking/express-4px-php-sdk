<?php
/**
 * 获取SKU列表示例
 */
use express_4px\oms\fu_wms_sku_getlist\v100\GetSkuListClient;
use express_4px\oms\fu_wms_sku_getlist\v100\GetSkuListParameter;

include_once dirname(dirname(dirname(dirname(__FILE__)))) . "/src/autoload.inc.php";

$json =<<<EOL
{
	"lstsku": [
		"SKUCODE",
		"CES-ST1"
	]
}
EOL;

//构造请求参数
$parameter = new GetSkuListParameter( json_decode($json,true));
GetSkuListClient::$debug = true;
$client = new GetSkuListClient($parameter);   //构造请求对象，将请求参数传入
$client->setAuthInfo('f63914c1-5559-4762-b561-7f759aa849d9', '30eb6b31-ad6f-4281-8292-83c00aa96891'); //设置认证信息：AppKey, AppSecret

//发送请求，获取返回数据
$rsp = $client->send();

//处理返回数据
if ( $rsp->isSuccess() ) {
	$data = $rsp->getData();    //返回数据
	var_dump($data);
	
	foreach($rsp->skulist as $sku){
		echo $sku->sku_id.PHP_EOL;
		var_dump($sku);
	}
} else {
	var_dump( $rsp->errors );     //错误码
	var_dump( $rsp->msg );  //错误信息
}
