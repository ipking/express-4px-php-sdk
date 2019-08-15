<?php
/**
 * 申报产品关联SKU示例
 */
use express_4px\oms\com_basis_declare_skubinddeclare\v100\SkuBindDeclareClient;
use express_4px\oms\com_basis_declare_skubinddeclare\v100\SkuBindDeclareParameter;

include_once dirname(dirname(dirname(dirname(__FILE__)))) . "/src/autoload.inc.php";
include_once dirname(dirname(__FILE__)) . "/config.inc.php";


$json =<<<EOL
{
	"declare_product_code": "LSS-api000026",
	"declare_sku_list": [{
		"sku_code": "LSS010"
	}, {
		"sku_code": "LSS009"
	}]
}
EOL;

//构造请求参数
$parameter = new SkuBindDeclareParameter( json_decode($json,true));
//或者
$parameter->declare_product_code = "LSS-api000026";

$client = new SkuBindDeclareClient($parameter);   //构造请求对象，将请求参数传入

//发送请求，获取返回数据
$rsp = $client->send();

//处理返回数据
if ( $rsp->isSuccess() ) {
	$data = $rsp->getData();    //返回数据
	//var_dump($data);
	
	echo $rsp->declare_product_code.PHP_EOL;
	
} else {
	var_dump( $rsp->errors );     //错误码
	var_dump( $rsp->msg );  //错误信息
}