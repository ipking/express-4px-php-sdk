<?php

/**
 * 委托类型
 * 可选值：
 * S(标准出库);
 * D(下架销毁);
 * R(退仓出库);
 * O(其他出库)。 *注：如果选择是标准出库，SKU的库存质量只能选择良好。
 */
namespace express_4px\oms\data_type\outbound;

class ConsignmentTypeEnum
{
	const CONSIGNMENT_TYPE_S = 'S';
	const CONSIGNMENT_TYPE_D = 'D';
	const CONSIGNMENT_TYPE_R = 'R';
	const CONSIGNMENT_TYPE_O = 'O';
	
	static $map = array(
		self::CONSIGNMENT_TYPE_S => '标准出库',
		self::CONSIGNMENT_TYPE_D => '下架销毁',
		self::CONSIGNMENT_TYPE_R => '退仓出库',
		self::CONSIGNMENT_TYPE_O => '其他出库',
	);
}