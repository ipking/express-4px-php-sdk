<?php

/**
 * 签名服务 可选值：Y(选择签名服务)；N(不选择签名服务)；
 */
namespace express_4px\oms\data_type\outbound;

class SignatureServiceEnum
{
	const SIGNATURE_SERVICE_Y = 'Y';
	const SIGNATURE_SERVICE_N = 'N';
	
	static $map = array(
		self::SIGNATURE_SERVICE_Y => '选择',
		self::SIGNATURE_SERVICE_N => '不选择',
	);
}