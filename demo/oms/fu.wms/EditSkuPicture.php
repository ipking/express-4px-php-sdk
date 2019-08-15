<?php
/**
 * 修改SKU图片示例
 */
use express_4px\oms\fu_wms_sku_editpicture\v100\EditSkuPictureClient;
use express_4px\oms\fu_wms_sku_editpicture\v100\EditSkuPictureParameter;

include_once dirname(dirname(dirname(dirname(__FILE__)))) . "/src/autoload.inc.php";
include_once dirname(dirname(__FILE__)) . "/config.inc.php";

$json =<<<EOL
{
	"sku_code": "SKUCODE1",
	"picture_url": [
		"http://wx2.sinaimg.cn/mw690/ac38503ely1fesz8m0ov6j20qo140dix.jpg",
		"http://wx2.sinaimg.cn/mw690/ac38503ely1fesz8m0ov6j20qo140dix.jpg",
		"http://wx2.sinaimg.cn/mw690/ac38503ely1fesz8m0ov6j20qo140dix.jpg",
		"http://wx2.sinaimg.cn/mw690/ac38503ely1fesz8m0ov6j20qo140dix.jpg"
	],
	"customer_code": ""
}
EOL;

//构造请求参数
$parameter = new EditSkuPictureParameter( json_decode($json,true));
//或者
$parameter->sku_code = 'SKUCODE1';

$client = new EditSkuPictureClient($parameter);   //构造请求对象，将请求参数传入

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