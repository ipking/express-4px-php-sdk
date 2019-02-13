<?php

namespace express_4px\oms\fu_wms_outbound_create\v100\data_type;

use express_4px\oms\data_type\outbound\StockQualityEnum;
use express_4px\oms\OmsParameter;

/**
 * @property String sku_code    出库SKU编码
 * @property Number qty 出库SKU数量
 * @property String stock_quality   SKU库存质量
 * @property String batch_no    批次号;根据SKU是否设置批次号。如果在创建SKU的时候设置了批次管理，则客户必须填写SKU批次号。
 * @property String unit_price  SKU单价
 */
class ConsignmentSku extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'sku_code'               => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'qty'                    => [self::PARAM_TYPE_NUM, self::PARAM_REQUIRED],
			'stock_quality'          => [self::PARAM_TYPE_ENUM, self::PARAM_REQUIRED,StockQualityEnum::class],
			'batch_no'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'unit_price'             => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

