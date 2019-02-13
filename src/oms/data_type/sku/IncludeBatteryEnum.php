<?php

/**
 * 是否带电。可选值 :  Y（是）;N （否）。  * 注：如果选择Y（是）带电，电池类型、电池配置、电池功率、电池功率、电池数量、电池资料为必填项
 */
namespace express_4px\oms\data_type\sku;

class IncludeBatteryEnum
{
	const INCLUDE_BATTERY_Y = 'Y';
	const INCLUDE_BATTERY_N = 'N';
	
	static $map = array(
		self::INCLUDE_BATTERY_Y => '是',
		self::INCLUDE_BATTERY_N => '否',
	);
}