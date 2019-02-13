<?php

/**
 * 是否上门提货；可选值：Y (上门提货) ；N （送货到仓）。
 */
namespace express_4px\oms\data_type\inbound;

class IsPickupEnum
{
	const IS_PICKUP_Y = 'Y';
	const IS_PICKUP_N = 'N';
	
	static $map = array(
		self::IS_PICKUP_Y => '上门提货',
		self::IS_PICKUP_N => '送货到仓',
	);
}