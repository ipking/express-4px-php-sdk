<?php

/**
 * 商品包装，商品包装的属性； 可选值 : H (硬包装)；S (软包装）。*注：如果包装形态是硬包装，则appearance （商品外观）必填。
 */
namespace express_4px\oms\fu_wms_sku_create\v100\data_type;

class WrappingEnum
{
	const WRAPPING_H = 'H';
	const WRAPPING_S = 'S';
}