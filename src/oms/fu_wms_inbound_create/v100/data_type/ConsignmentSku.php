<?php

namespace express_4px\oms\fu_wms_inbound_create\v100\data_type;

use express_4px\oms\OmsParameter;

/**
 * @property String box_no  箱序号；客户定义的箱序号，同一箱可存放多种SKU和多个SKU数量。如：1001
 * @property String sku_code    SKU编码；当前箱对应的SKU信息。如：TEST001
 * @property Number plan_qty    SKU预报数量，当前箱内SKU的预报数量。
 * @property String batch_no    批次号;根据SKU是否设置批次号。如果在创建SKU的时候设置了批次管理，则客户必须填写SKU批次号。
 */
class ConsignmentSku extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'box_no'                 => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'sku_code'               => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'plan_qty'               => [self::PARAM_TYPE_NUM, self::PARAM_REQUIRED],
			'batch_no'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

