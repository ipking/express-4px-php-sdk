<?php
/**
 * 批量查询申报产品示例
 */
use express_4px\oms\com_basis_declare_getlist\v100\GetDeclareListClient;
use express_4px\oms\com_basis_declare_getlist\v100\GetDeclareListParameter;

include_once dirname(dirname(dirname(dirname(__FILE__)))) . "/src/autoload.inc.php";
include_once dirname(dirname(__FILE__)) . "/config.inc.php";


$json =<<<EOL
{
	"declare_product_code": ["LSS001", "LSS-api000026"],
	"sku_code": [""]
}
EOL;

//构造请求参数
$parameter = new GetDeclareListParameter( json_decode($json,true));
//或者
$parameter->declare_product_code = array(
	"LSS001",
	"LSS-api000026"
);

$client = new GetDeclareListClient($parameter);   //构造请求对象，将请求参数传入

//发送请求，获取返回数据
$rsp = $client->send();

//处理返回数据
if ( $rsp->isSuccess() ) {
	$data = $rsp->getData();    //返回数据
	//var_dump($data);
	
	foreach($rsp->declare_product_list as $item){
		echo $item->declare_product_code.PHP_EOL;
		
	}
} else {
	var_dump( $rsp->errors );     //错误码
	var_dump( $rsp->msg );  //错误信息
}