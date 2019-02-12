<?php

/**
 * 是否批次管理。可选值 : Y（是）;N （否）。*注：选择Y后，必须在入库预报进行批次的设置
 */
namespace express_4px\oms\fu_wms_sku_create\v100\data_type;

class IncludeBatchEnum
{
	const INCLUDE_BATCH_Y = 'Y';
	const INCLUDE_BATCH_N = 'N';
}