<?php

/**
 * 扣费类型。如：
 * CA(现金);
 * CR(信用额度)。
 */
namespace express_4px\oms\data_type\outbound;

class DeductionTypeEnum
{
	const DEDUCTION_TYPE_CA = 'CA';
	const DEDUCTION_TYPE_CR = 'CR';
	
	static $map = array(
		self::DEDUCTION_TYPE_CA => '现金',
		self::DEDUCTION_TYPE_CR => '信用额度',
	);
}