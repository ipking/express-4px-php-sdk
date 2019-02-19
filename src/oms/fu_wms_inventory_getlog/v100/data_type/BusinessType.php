<?php

namespace express_4px\oms\fu_wms_inventory_getlog\v100\data_type;

/**
 * 业务类型
 */
class BusinessType
{
	const BUSINESS_TYPE_O = 'O';
	const BUSINESS_TYPE_T = 'T';
	const BUSINESS_TYPE_R = 'R';
	const BUSINESS_TYPE_S = 'S';
	const BUSINESS_TYPE_D = 'D';
	const BUSINESS_TYPE_C = 'C';
	const BUSINESS_TYPE_A = 'A';
	const BUSINESS_TYPE_P = 'P';
	
	static $map = array(
		self::BUSINESS_TYPE_O => '其他委托单',
		self::BUSINESS_TYPE_T => '调拨委托单',
		self::BUSINESS_TYPE_R => '退仓委托单',
		self::BUSINESS_TYPE_S => '标准委托单',
		self::BUSINESS_TYPE_D => '销毁',
		self::BUSINESS_TYPE_C => '取消上架',
		self::BUSINESS_TYPE_A => '库存调整',
		self::BUSINESS_TYPE_P => '收货上架',
	);
}

