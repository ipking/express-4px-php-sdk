<?php

namespace express_4px\oms\fu_wms_outbound_getlist\v100\data_type;

use express_4px\oms\OmsParameter;

/**
 * @property String sku_serial_no
 * @property String sku_code
 * @property String sku_id
 */
class OutboundListSerialNo extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'sku_serial_no'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sku_code'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sku_id'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

