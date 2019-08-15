<?php
/**
 * 查询物流产品信息示例
 */
use express_4px\oms\com_basis_logistics_product_getlist\v100\GetLogisticsProductListClient;
use express_4px\oms\com_basis_logistics_product_getlist\v100\GetLogisticsProductListParameter;

include_once dirname(dirname(dirname(dirname(__FILE__)))) . "/src/autoload.inc.php";
include_once dirname(dirname(__FILE__)) . "/config.inc.php";


$json =<<<EOL
{
	"service_code": "F",
	"category_code": "end",
	"source_position_code": "CNHKGB",
	"dest_position_code": "",
	"dest_country_code": "US",
	"dest_post_code": "",
	"dest_state_name": "",
	"dest_city_name": ""
}
EOL;

//构造请求参数
$parameter = new GetLogisticsProductListParameter( json_decode($json,true));
//或者
$parameter->service_code = \express_4px\oms\data_type\basis_declare\ServiceCodeEnum::SERVICE_CODE_F;

$client = new GetLogisticsProductListClient($parameter);   //构造请求对象，将请求参数传入

//发送请求，获取返回数据
$rsp = $client->send();

//处理返回数据
if ( $rsp->isSuccess() ) {
	$data = $rsp->getData();    //返回数据
	//var_dump($data);
	
	foreach($rsp->logistics_product_list as $item){
		echo $item->logistics_product_code."\t";
		echo $item->logistics_product_name_cn.PHP_EOL;
		
	}
} else {
	var_dump( $rsp->errors );     //错误码
	var_dump( $rsp->msg );  //错误信息
}