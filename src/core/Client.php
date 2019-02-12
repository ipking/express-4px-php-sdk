<?php

namespace express_4px\core;

abstract class Client{
	public static $debug = false;
	protected $url;

	/** @var Parameter $param */
	protected $param;

	/** @var string $authorization */
	private static $authorization;

	/**
	 * 设置客户鉴权信息
	 * @param $client_id
	 * @param $client_secret
	 */
	public static function setAuthInfo($client_id, $client_secret){
		self::$authorization = self::setAuthTokenString($client_id, $client_secret);
	}

	/**
	 * 获取鉴权字符串
	 * @return mixed
	 */
	public static function getAuthorization(){
		return self::$authorization;
	}

	/**
	 * 设置用户鉴权字符串
	 * @param $client_id
	 * @param $client_secret
	 * @return string
	 */
	private static function setAuthTokenString($client_id, $client_secret){
		$cipher = new Cipher($client_secret);
		$ts = time();
		$encrypt = $cipher->encrypt($client_secret.$ts);
		return $client_id.'-'.$encrypt.'-'.$ts;
	}

	/**
	 * @param \express_4px\core\Parameter $param
	 * @return $this
	 */
	public function setParam(Parameter $param){
		$this->param = $param;
		return $this;
	}

	/**
	 * 发送数据
	 * @return array
	 */
	protected function send(){
		//校验数据
		$this->param->validateAll();

		//设置鉴权数据
		if(!$this->param->getData('authorization')){
			$this->param->setDataByKey('authorization', self::$authorization);
		}
		if(self::$debug){
			echo "\n+++++++++++++++++++ REQ +++++++++++++++++++\n";
		}
		$str = Curl::postInJSON($this->url, $this->param->getDataAsArray());
		if(self::$debug){
			echo "\n============== RSP START ==============\n";
			echo stripos(PHP_OS, 'win') !== false ? mb_convert_encoding($str, 'gb2312', 'utf8') : $str;
			echo "\n============== RSP END ==============\n";
		}
		return \json_decode($str, true);
	}
}