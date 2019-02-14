<?php

namespace express_4px\oms\data_type\common;

class CurrencyEnum
{
	const CURRENCY_CNY = 'CNY';
	const CURRENCY_USD = 'USD';
	const CURRENCY_EUR = 'EUR';
	
	static $map = array(
		self::CURRENCY_CNY => '人民币',
		self::CURRENCY_USD => '美元',
		self::CURRENCY_EUR => '欧元',
	);
}