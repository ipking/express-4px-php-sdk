<?php

namespace express_4px\oms\com_basis_declare_skubinddeclare\v100;

class SkuBindDeclareErrorCode{
	const ERR_DECLARE_GOODS_CODE_EMPTY= 'ERR_DECLARE_GOODS_CODE_EMPTY';
	const ERR_SKU_CODE_EMPTY= 'ERR_SKU_CODE_EMPTY';
	const ERR_SKU_NOT_EXIST= 'ERR_SKU_NOT_EXIST';
	const ERR_DECLARE_GOODS_STATUS_ERR= 'ERR_DECLARE_GOODS_STATUS_ERR';
	const ERR_DECLARE_GOODS_NOT_FOUND= 'ERR_DECLARE_GOODS_NOT_FOUND';
	
	static $codeMessageMap = array(
		self::ERR_DECLARE_GOODS_CODE_EMPTY => '申报产品代码不能为空',
		self::ERR_SKU_CODE_EMPTY           => 'SKU编码不能为空',
		self::ERR_SKU_NOT_EXIST            => 'SKU不存在',
		self::ERR_DECLARE_GOODS_STATUS_ERR => '申报产品状态错误',
		self::ERR_DECLARE_GOODS_NOT_FOUND  => '申报产品不存在',
	);
	
}