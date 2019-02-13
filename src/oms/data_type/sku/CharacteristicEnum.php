<?php

/**
 * 商品特性。
 * 支持多选。多选值 : 01: 带插座；
 * 02 (带液体)；
 * 03 (带光盘)；
 * 04 (易碎品)；
 * 05 (带粉末)；
 * 06 (膏状)；
 * 07 (贵重货品)；
 * 08 (恒温保存)；
 * 09 (危险货品)
 */
namespace express_4px\oms\data_type\sku;

class CharacteristicEnum
{
	const CHARACTERISTIC_01 = '01';
	const CHARACTERISTIC_02 = '02';
	const CHARACTERISTIC_03 = '03';
	const CHARACTERISTIC_04 = '04';
	const CHARACTERISTIC_05 = '05';
	const CHARACTERISTIC_06 = '06';
	const CHARACTERISTIC_07 = '07';
	const CHARACTERISTIC_08 = '08';
	const CHARACTERISTIC_09 = '09';
	
	static $map = array(
		self::CHARACTERISTIC_01 => '带插座',
		self::CHARACTERISTIC_02 => '带液体',
		self::CHARACTERISTIC_03 => '带光盘',
		self::CHARACTERISTIC_04 => '易碎品',
		self::CHARACTERISTIC_05 => '带粉末',
		self::CHARACTERISTIC_06 => '膏状',
		self::CHARACTERISTIC_07 => '贵重货品',
		self::CHARACTERISTIC_08 => '恒温保存',
		self::CHARACTERISTIC_09 => '危险货品',
	);
}