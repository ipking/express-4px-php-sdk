<?php

namespace express_4px\oms\com_basis_declare_getlist\v100;

class GetDeclareListCode{
	const MISS_PARAM_RESOURCE = 'MISS_PARAM_RESOURCE';
	
	static $codeMessageMap = array(
		self::MISS_PARAM_RESOURCE=> '单次最大支持100个申报产品代码/SKU编码查询',
	);
	
}