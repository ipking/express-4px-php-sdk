<?php

/**
 * 商品外观。 可选值 : SS (正方体)；RS (长方体)；CS (圆锥体)；TS (三角形)；LS (L形)；OS (其它)；DS (圆柱体)。*注：如果包装形态是硬包装，则appearance （商品外观）必填。
 */
namespace express_4px\oms\data_type\sku;

class AppearanceEnum
{
	const APPEARANCE_SS = 'SS';
	const APPEARANCE_RS = 'RS';
	const APPEARANCE_CS = 'CS';
	const APPEARANCE_TS = 'TS';
	const APPEARANCE_LS = 'LS';
	const APPEARANCE_OS = 'OS';
	const APPEARANCE_DS = 'DS';
}