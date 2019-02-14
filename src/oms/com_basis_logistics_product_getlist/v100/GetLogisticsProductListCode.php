<?php

namespace express_4px\oms\com_basis_logistics_product_getlist\v100;

class GetLogisticsProductListCode{
	const CODE_2017 = '2017';
	const CODE_2018 = '2018';
	const CODE_2019 = '2019';
	const CODE_2020 = '2020';
	const CODE_2021 = '2021';
	const CODE_2022 = '2022';
	
	static $codeMessageMap = array(
		self::CODE_2017=> '服务代码或者产品分类代码不能为空',
		self::CODE_2018=> 'first(头程)产品的起始地和目的地必填',
		self::CODE_2019=> 'warehouse(仓内产品)的起始地必填',
		self::CODE_2020=> 'end(尾程)产品的起始地必填,目的地仓库编码、国家二字码+邮编、国家二字码+省名称+市名称其中的一个组合必须填',
		self::CODE_2021=> '分类代码不在可选值中，可选值为（first、warehouse、end）',
		self::CODE_2022=> '服务代码不在可选值中，可选值为F',
	);
	
}