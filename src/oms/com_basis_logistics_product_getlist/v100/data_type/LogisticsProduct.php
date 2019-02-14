<?php

namespace express_4px\oms\com_basis_logistics_product_getlist\v100\data_type;


use express_4px\oms\OmsParameter;

/**
 * @property string logistics_product_code  物流产品代码
 * @property string logistics_product_name_cn   物流产品中文名称
 * @property string logistics_product_name_en   物流产品英文名称
 */
class LogisticsProduct extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'logistics_product_code'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'logistics_product_name_cn' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'logistics_product_name_en' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

