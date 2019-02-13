<?php

use express_4px\oms\OmsClient;

class config {
	const ENV_DEV = 'DEV';
	const ENV_PROD = 'PROD';
	
	/**
	 * 应用所接入环境 默认为沙箱环境  如果测试通过可以转到正式环境
	 */
	const APP_ENV = self::ENV_DEV;
	
	/**
	 * 应用接入申请的AppKey
	 */
	const APP_KEY = 'f63914c1-5559-4762-b561-7f759aa849d9';
	
	/**
	 * 应用接入申请的AppSecret
	 */
	const APP_SECRET = '30eb6b31-ad6f-4281-8292-83c00aa96891';
	
}

//开启调试
OmsClient::$debug = true;

if(config::APP_ENV == config::ENV_PROD){
	//使用正式环境
	OmsClient::prodEnv();
}
