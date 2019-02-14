<?php

namespace express_4px\oms\data_type\basis_declare;

/**
 * 服务代码。4PX服务代码，
 * 可选值：
 * F(订单履约)。
 */

class ServiceCodeEnum
{
	const SERVICE_CODE_F = 'F';
	
	static $map = array(
		self::SERVICE_CODE_F => '订单履约',
	);
}