<?php
/**
 * 查询仓库信息示例
 */
use express_4px\oms\com_basis_warehouse_getlist\v100\GetWarehouseListClient;
use express_4px\oms\com_basis_warehouse_getlist\v100\GetWarehouseListParameter;

include_once dirname(dirname(dirname(dirname(__FILE__)))) . "/src/autoload.inc.php";
include_once dirname(dirname(__FILE__)) . "/config.inc.php";



//构造请求参数
$parameter = new GetWarehouseListParameter();

$client = new GetWarehouseListClient($parameter);   //构造请求对象，将请求参数传入
$client->setAuthInfo(config::$APP_KEY, config::$APP_SECRET,config::$ACCESS_TOKEN); //设置认证信息：AppKey, AppSecret, access_token

//发送请求，获取返回数据
$rsp = $client->send();

//处理返回数据
if ( $rsp->isSuccess() ) {
	$data = $rsp->getData();    //返回数据
	//var_dump($data);
	
	foreach($rsp->warehouse_list as $item){
		echo $item->warehouse_code.PHP_EOL;
		echo $item->warehouse_name_cn.PHP_EOL;
		
	}
} else {
	var_dump( $rsp->errors );     //错误码
	var_dump( $rsp->msg );  //错误信息
}