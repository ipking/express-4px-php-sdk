<?php
/**
 * 创建申报产品示例
 */
use express_4px\oms\com_basis_declare_create\v100\CreateDeclareClient;
use express_4px\oms\com_basis_declare_create\v100\CreateDeclareParameter;

include_once dirname(dirname(dirname(dirname(__FILE__)))) . "/src/autoload.inc.php";
include_once dirname(dirname(__FILE__)) . "/config.inc.php";

$json =<<<EOL
{
	"declare_category_id": "303120",
	"declare_country_list": [{
			"brand": "出口品牌",
			"currency": "USD",
			"declare_country": "CN",
			"declare_type": "I",
			"declare_unit_price": "2.33"
	}],
	"declare_product_code": "LSS-api0000261",
	"declare_sku_list": [{
		"sku_code": "SKUCODE2"
	}],
	"material": "塑料",
	"model": "型号",
	"origin_country": "CN",
	"specification": "球状",
	"uses": "运动健身"
}
EOL;

//构造请求参数
$parameter = new CreateDeclareParameter( json_decode($json,true));
//或者
$parameter->declare_product_code = 'LSS-api0000261';

$client = new CreateDeclareClient($parameter);   //构造请求对象，将请求参数传入

//发送请求，获取返回数据
$rsp = $client->send();

//处理返回数据
if ( $rsp->isSuccess() ) {
	$data = $rsp->getData();    //返回数据
	var_dump($data);
	
	echo $rsp->declare_product_code.PHP_EOL;
} else {
	var_dump( $rsp->errors );     //错误码
	var_dump( $rsp->msg );  //错误信息
}