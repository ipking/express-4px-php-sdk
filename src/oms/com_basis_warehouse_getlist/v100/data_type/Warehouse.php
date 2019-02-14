<?php

namespace express_4px\oms\com_basis_warehouse_getlist\v100\data_type;


use express_4px\oms\OmsParameter;

/**
 * @property string warehouse_code  仓库代码
 * @property string warehouse_name_cn   仓库中文名称
 * @property string warehouse_name_en   仓库英文名称
 * @property string country 仓库所在国家,国家二字码。
 */
class Warehouse extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'warehouse_code'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'warehouse_name_cn' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'warehouse_name_en' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'country'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

