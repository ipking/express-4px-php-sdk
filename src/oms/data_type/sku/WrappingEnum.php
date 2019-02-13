<?php

/**
 * 商品包装，商品包装的属性； 可选值 : H (硬包装)；S (软包装）。*注：如果包装形态是硬包装，则appearance （商品外观）必填。
 */
namespace express_4px\oms\data_type\sku;

class WrappingEnum
{
	const WRAPPING_H = 'H';
	const WRAPPING_S = 'S';
	
	static $map = array(
		self::WRAPPING_H => '硬包装',
		self::WRAPPING_S => '软包装',
	);
}