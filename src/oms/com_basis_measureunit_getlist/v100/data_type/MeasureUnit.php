<?php

namespace express_4px\oms\com_basis_measureunit_getlist\v100\data_type;


use express_4px\oms\OmsParameter;

/**
 * @property string code    计量单位唯一编码
 * @property string name_cn 中文名
 * @property string name_en 英文名
 * @property string symbol  符号
 */
class MeasureUnit extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'code'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'name_cn' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'name_en' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'symbol'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

