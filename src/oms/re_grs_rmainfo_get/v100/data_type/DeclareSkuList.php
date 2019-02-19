<?php

namespace express_4px\oms\re_grs_rmainfo_get\v100\data_type;


use express_4px\oms\OmsParameter;

/**
 * @property String sku_code    SKU编码（创建申报产品时，可以关联已经创建SKU代码）
 * @property String declare_sku_status    SKU申报状态。如：N（草稿）；S（已提交）；C（已通过）；E（异常）
 */
class DeclareSkuList extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'sku_code'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'declare_sku_status' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

