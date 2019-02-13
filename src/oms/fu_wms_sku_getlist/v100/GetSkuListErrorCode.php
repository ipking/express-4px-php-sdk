<?php

namespace express_4px\oms\fu_wms_sku_getlist\v100;

class GetSkuListErrorCode{
	const ERR_SKU_CODE_EMPTY= 'ERR_SKU_CODE_EMPTY';
	const ERR_SKU_COD_LARGE_THAN_100= 'ERR_SKU_COD_LARGE_THAN_100';
	
	static $codeMessageMap = array(
		self::ERR_SKU_CODE_EMPTY         => 'SKU CODE不能为空',
		self::ERR_SKU_COD_LARGE_THAN_100 => '每次只能查询最多100个',
	);
	
}