<?php

namespace express_4px\oms\data_type\basis_declare;

/**
 * 清关类型。
 * 可选值：
 * I(进口)
 */

class DeclareTypeEnum
{
	const DECLARE_TYPE_I = 'I';
	
	static $map = array(
		self::DECLARE_TYPE_I => '进口',
	);
}