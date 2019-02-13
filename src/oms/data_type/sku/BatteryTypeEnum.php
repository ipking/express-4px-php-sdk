<?php

/**
 * 电池类型。 可选值 : LI (锂电池)；NI (镍氢电池)；DR (干电池)；BU (纽扣电池)；OT (其他）
 */
namespace express_4px\oms\data_type\sku;

class BatteryTypeEnum
{
	const BATTERY_TYPE_LI = 'LI';
	const BATTERY_TYPE_NI = 'NI';
	const BATTERY_TYPE_DR = 'DR';
	const BATTERY_TYPE_BU = 'BU';
	const BATTERY_TYPE_OT = 'OT';
	
	static $map = array(
		self::BATTERY_TYPE_LI => '锂电池',
		self::BATTERY_TYPE_NI => '镍氢电池',
		self::BATTERY_TYPE_DR => '干电池',
		self::BATTERY_TYPE_BU => '纽扣电池',
		self::BATTERY_TYPE_OT => '其他',
	);
}