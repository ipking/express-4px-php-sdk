<?php

/**
 * SKU库存质量。可选值：
 * G（良好）;
 * B（破损）;
 * C（违禁品）;
 * W（淋湿）;
 * M（霉变）;
 * E（异常）。*注：如果选择是标准出库，SKU的库存质量只能选择良好。
 */
namespace express_4px\oms\data_type\outbound;

class StockQualityEnum
{
	const STOCK_QUALITY_G = 'G';
	const STOCK_QUALITY_B = 'B';
	const STOCK_QUALITY_C = 'C';
	const STOCK_QUALITY_W = 'W';
	const STOCK_QUALITY_M = 'M';
	const STOCK_QUALITY_E = 'E';
	
	static $map = array(
		self::STOCK_QUALITY_G => '良好',
		self::STOCK_QUALITY_B => '破损',
		self::STOCK_QUALITY_C => '违禁品',
		self::STOCK_QUALITY_W => '淋湿',
		self::STOCK_QUALITY_M => '霉变',
		self::STOCK_QUALITY_E => '异常',
	);
}