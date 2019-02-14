<?php

namespace express_4px\oms\fu_wms_inventory_get\v100;

class GetInventoryErrorCode{
	const MISS_PARAM_RESOURCE= 'MISS_PARAM_RESOURCE';
	
	static $codeMessageMap = array(
		self::MISS_PARAM_RESOURCE     => '单次最大支持100种SKU种类查询或100个批次号查询',
	);
	
}