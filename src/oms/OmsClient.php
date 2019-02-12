<?php
/**
 * 请求客户端
 */

namespace express_4px\oms;
use express_4px\core\Client;
use express_4px\core\Parameter;

class OmsClient extends Client{
	const ENV_DEV = 'DEV';
	const ENV_PROD = 'PROD';
	
	/**
	 * 默认为沙箱环境
	 */
	private static $env = self::ENV_DEV;
	/**
	 * 正式环境
	 */
	private static $host_prod = 'http://open.4px.com/router/api/service';
	/**
	 * 沙箱环境
	 */
	private static $host_dev = 'http://open.sandbox.4px.com/router/api/service';
	
	/**
	 * 生成环境
	 */
	public static function prodEnv(){
		self::$env = self::ENV_PROD;
	}
	
	public function __construct($version_name, Parameter $param = null){
		switch(self::$env)
		{
			case self::ENV_DEV:
				$this->url = self::$host_dev;
				break;
			case self::ENV_PROD:
				$this->url = self::$host_prod;
				break;
		}
		$this->param = $param;
	}
}