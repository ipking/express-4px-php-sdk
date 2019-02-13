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
}