<?php

namespace express_4px\oms\com_basis_declare_create\v100\data_type;

use express_4px\oms\OmsParameter;

/**
 * @property String sku_code    SKU编码（创建申报产品时，可以关联已经创建SKU代码）
 */
class DeclareSkuList extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'sku_code'             => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

