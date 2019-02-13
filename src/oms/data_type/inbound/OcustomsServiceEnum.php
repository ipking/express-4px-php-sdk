<?php

/**
 * 出口报关类型; 可选值：D1(一般贸易出口退税)； D2(一般贸易出口不退税)； D5(非一般贸易)； D6(手册报关)
 */
namespace express_4px\oms\data_type\inbound;

class OcustomsServiceEnum
{
	const OCUSTOMS_SERVICE_D1 = 'D1';
	const OCUSTOMS_SERVICE_D2 = 'D2';
	const OCUSTOMS_SERVICE_D5 = 'D5';
	const OCUSTOMS_SERVICE_D6 = 'D6';
	
	static $map = array(
		self::OCUSTOMS_SERVICE_D1 => '一般贸易出口退税',
		self::OCUSTOMS_SERVICE_D2 => '一般贸易出口不退税',
		self::OCUSTOMS_SERVICE_D5 => '非一般贸易',
		self::OCUSTOMS_SERVICE_D6 => '手册报关',
	);
}