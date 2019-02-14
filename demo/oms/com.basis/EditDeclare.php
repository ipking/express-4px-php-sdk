<?php
/**
 * 修改申报产品示例
 */
use express_4px\oms\com_basis_declare_edit\v100\EditDeclareClient;
use express_4px\oms\com_basis_declare_edit\v100\EditDeclareParameter;

include_once dirname(dirname(dirname(dirname(__FILE__)))) . "/src/autoload.inc.php";
include_once dirname(dirname(__FILE__)) . "/config.inc.php";

$json =<<<EOL
{
	"declare_category_id": "303120",
	"declare_country_list": [{
			"brand": "出口品牌",
			"certificate_url": "https://imgsa.baidu.com/baike/pic/item/00e93901213fb80e2f604bc43dd12f2eb938946b.jpg",
			"currency": "USD",
			"declare_country": "CN",
			"declare_type": "I",
			"declare_unit_price": "2.33"
		},
		{
			"brand": "进口品牌",
			"certificate_url": "https://imgsa.baidu.com/baike/pic/item/00e93901213fb80e2f604bc43dd12f2eb938946b.jpg",
			"currency": "USD",
			"declare_country": "GB",
			"declare_type": "I",
			"declare_unit_price": "1.11"
		}
	],
	"declare_product_code": "LSS-api000026",
	"declare_sku_list": [{
		"sku_code": "SKUCODE1"
	}, {
		"sku_code": "SKUCODE"
	}],
	"material": "塑料1",
	"model": "型号",
	"origin_country": "CN",
	"specification": "球状1",
	"uses": "运动健身"
}
EOL;

//构造请求参数
$parameter = new EditDeclareParameter( json_decode($json,true));
//或者
$parameter->declare_product_code = 'LSS-api000026';

$client = new EditDeclareClient($parameter);   //构造请求对象，将请求参数传入
$client->setAuthInfo(config::$APP_KEY, config::$APP_SECRET,config::$ACCESS_TOKEN); //设置认证信息：AppKey, AppSecret, access_token

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