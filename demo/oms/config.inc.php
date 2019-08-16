<?php

use express_4px\oms\OmsClient;


//开启调试
OmsClient::$debug = true;
$is_dev = true;//使用测试环境的配置信息

if($is_dev){
	OmsClient::devEnv();
	/**
	 * 应用接入申请的AppKey
	 */
	$APP_KEY = 'f63914c1-5559-4762-b561-7f759aa849d9';
	/**
	 * 应用接入申请的AppSecret
	 */
	$APP_SECRET = '30eb6b31-ad6f-4281-8292-83c00aa96891';
	/**
	 * access_token 通过OAuth授权方式获得，要求平台服务商、第三方软件商必须传入，4PX客户（B类客户）可不传
	 */
	$ACCESS_TOKEN = '';
	
}else{
	//使用正式环境
	OmsClient::prodEnv();
	/**
	 * 应用接入申请的AppKey
	 */
	$APP_KEY = 'f63914c1-5559-4762-b561-7f759aa849d9';
	/**
	 * 应用接入申请的AppSecret
	 */
	$APP_SECRET = '30eb6b31-ad6f-4281-8292-83c00aa96891';
	/**
	 * access_token 通过OAuth授权方式获得，要求平台服务商、第三方软件商必须传入，4PX客户（B类客户）可不传
	 */
	$ACCESS_TOKEN = '';
}

OmsClient::setAuthInfo($APP_KEY, $APP_SECRET,$ACCESS_TOKEN); //设置认证信息：AppKey, AppSecret, access_token

//设置 请求成功时的 回调函数 可以用于收集日志记录 给请求加上请求 ID  用于跟踪
//根据自己的系统 业务需要 保存到 文件 数据库等等地方
OmsClient::setSendCallback(function(OmsClient $client){
	echo $client->getMethod().PHP_EOL;
	echo $client->getVersion().PHP_EOL;
	echo $client->getFormat().PHP_EOL;
	echo $client->getTimestamp().PHP_EOL;
	
	echo json_encode($client->getParam()->getDataAsArray()).PHP_EOL;
	echo $client->getResponse().PHP_EOL;
	
	//收集记录
});