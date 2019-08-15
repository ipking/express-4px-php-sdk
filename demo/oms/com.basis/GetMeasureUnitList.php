<?php
/**
 * 查询计量单位示例
 */
use express_4px\oms\com_basis_measureunit_getlist\v100\GetMeasureUnitListClient;
use express_4px\oms\com_basis_measureunit_getlist\v100\GetMeasureUnitListParameter;

include_once dirname(dirname(dirname(dirname(__FILE__)))) . "/src/autoload.inc.php";
include_once dirname(dirname(__FILE__)) . "/config.inc.php";



//构造请求参数
$parameter = new GetMeasureUnitListParameter();

$client = new GetMeasureUnitListClient($parameter);   //构造请求对象，将请求参数传入

//发送请求，获取返回数据
$rsp = $client->send();

//处理返回数据
if ( $rsp->isSuccess() ) {
	$data = $rsp->getData();    //返回数据
	//var_dump($data);
	
	foreach($rsp->measure_unit_list as $item){
		echo $item->code.PHP_EOL;
		echo $item->name_cn.PHP_EOL;
		
	}
} else {
	var_dump( $rsp->errors );     //错误码
	var_dump( $rsp->msg );  //错误信息
}