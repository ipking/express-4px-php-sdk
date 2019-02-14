<?php

namespace express_4px\oms\fu_wms_outbound_getlist\v100\data_type;

use express_4px\oms\OmsParameter;

/**
 * @property String sku_code
 * @property String product_code
 * @property String qty
 * @property String stock_quality
 * @property String sku_id
 * @property String sku_name
 * @property String batch_no
 */
class OutboundListSku extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'sku_code'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'product_code'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'qty'                    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'stock_quality'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sku_id'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sku_name'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'batch_no'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

