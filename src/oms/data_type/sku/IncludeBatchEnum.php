<?php

/**
 * 是否批次管理。可选值 : Y（是）;N （否）。*注：选择Y后，必须在入库预报进行批次的设置
 */
namespace express_4px\oms\data_type\sku;

class IncludeBatchEnum
{
	const INCLUDE_BATCH_Y = 'Y';
	const INCLUDE_BATCH_N = 'N';
	
	static $map = array(
		self::INCLUDE_BATCH_Y => '是',
		self::INCLUDE_BATCH_N => '否',
	);
}