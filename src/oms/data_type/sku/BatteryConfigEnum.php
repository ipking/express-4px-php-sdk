<?php

/**
 * 电池配置。 可选值 : EB (配套)；PB (纯电)；IB (内置)；NB (其他)
 */
namespace express_4px\oms\data_type\sku;

class BatteryConfigEnum
{
	const BATTERY_CONFIG_EB = 'EB';
	const BATTERY_CONFIG_PB = 'PB';
	const BATTERY_CONFIG_IB = 'IB';
	const BATTERY_CONFIG_NB = 'NB';
	
	static $map = array(
		self::BATTERY_CONFIG_EB => '配套',
		self::BATTERY_CONFIG_PB => '纯电',
		self::BATTERY_CONFIG_IB => '内置',
		self::BATTERY_CONFIG_NB => '其他',
	);
}