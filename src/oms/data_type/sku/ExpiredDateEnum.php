<?php

/**
 * 是否有效期管理。 可选值 : Y（是）；N （否）。*注：选择Y后，必须在入库预报进行商品有效期的设置
 */
namespace express_4px\oms\data_type\sku;

class ExpiredDateEnum
{
	const EXPIRED_DATE_Y = 'Y';
	const EXPIRED_DATE_N = 'N';
}