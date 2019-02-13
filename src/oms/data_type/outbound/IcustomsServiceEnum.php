<?php

/**
 * 进口报关类型;
 * 可选值：
 * D3(客户自有税号清关)；
 * D4(非客户自有税号清关)
 */
namespace express_4px\oms\data_type\outbound;

class IcustomsServiceEnum
{
	const ICUSTOMS_SERVICE_D3 = 'D3';
	const ICUSTOMS_SERVICE_D4 = 'D4';
	
	static $map = array(
		self::ICUSTOMS_SERVICE_D3 => '客户自有税号清关',
		self::ICUSTOMS_SERVICE_D4 => '非客户自有税号清关',
	);
}