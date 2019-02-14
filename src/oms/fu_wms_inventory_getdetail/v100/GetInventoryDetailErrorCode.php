<?php

namespace express_4px\oms\fu_wms_inventory_getdetail\v100;

class GetInventoryDetailErrorCode{
	const ERR_SKU_CODE_EMPTY= 'ERR_SKU_CODE_EMPTY';
	const MISS_PARAM_RESOURCE= 'MISS_PARAM_RESOURCE';
	
	static $codeMessageMap = array(
		self::ERR_SKU_CODE_EMPTY  => 'SKU CODE不能为空',
		self::MISS_PARAM_RESOURCE => '单次最大支持100种SKU种类查询或100个批次号查询',
	);
	
}