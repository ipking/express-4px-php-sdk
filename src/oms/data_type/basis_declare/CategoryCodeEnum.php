<?php

namespace express_4px\oms\data_type\basis_declare;

/**
 * 产品分类代码。
 * 可选值：
 * first(头程);
 * warehouse(仓内);
 * end(尾程)。
 * 注：如果产品分类是first(头程)产品，则source_position_code(起始地仓库代码)为仓库代码,dest_position_code(目的地仓库代码)为仓库代码。起始地和目的地必填,其它参数为空。
 * 如果产品分类是warehouse(仓内产品)，则只需要source_position_code(起始地仓库代码)为仓库代码。起始地仓库代码必填,其它参数为空。
 * 如果产品分类是end(尾程)产品，则source_position_code(起始地)为仓库代码,其它参数可为空。
 */

class CategoryCodeEnum
{
	const CATEGORY_CODE_first = 'first';
	const CATEGORY_CODE_warehouse = 'warehouse';
	const CATEGORY_CODE_end = 'end';
	
	static $map = array(
		self::CATEGORY_CODE_first     => '头程',
		self::CATEGORY_CODE_warehouse => '仓内',
		self::CATEGORY_CODE_end       => '尾程',
	);
}