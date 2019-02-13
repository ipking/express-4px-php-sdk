<?php

/**
 * 退件服务。 可选值：Y(选择退件服务)；N(不选择退件服务)；
 */
namespace express_4px\oms\data_type\outbound;

class ReturnServiceEnum
{
	const RETURN_SERVICE_Y = 'Y';
	const RETURN_SERVICE_N = 'N';
	
	static $map = array(
		self::RETURN_SERVICE_Y => '选择',
		self::RETURN_SERVICE_N => '不选择',
	);
}