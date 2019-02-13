<?php

use express_4px\oms\OmsClient;

class config {
	const ENV_DEV = 'DEV';
	const ENV_PROD = 'PROD';
	
	/**
	 * 应用所接入环境 默认为沙箱环境  如果测试通过可以转到正式环境
	 */
	public static $APP_ENV = self::ENV_DEV;
	
	/**
	 * 应用接入申请的AppKey
	 */
	public static $APP_KEY = 'f63914c1-5559-4762-b561-7f759aa849d9';
	
	/**
	 * 应用接入申请的AppSecret
	 */
	public static $APP_SECRET = '30eb6b31-ad6f-4281-8292-83c00aa96891';
	
	/**
	 * access_token 通过OAuth授权方式获得，要求平台服务商、第三方软件商必须传入，4PX客户（B类客户）可不传
	 */
	public static $ACCESS_TOKEN = '';
	
}

//开启调试
OmsClient::$debug = true;

//通过OAuth授权方式获得，要求平台服务商、第三方软件商必须传入，4PX客户（B类客户）可不传
config::$ACCESS_TOKEN = '';

if(config::$APP_ENV == config::ENV_PROD){
	//使用正式环境  默认为沙箱环境
	OmsClient::prodEnv();
}
