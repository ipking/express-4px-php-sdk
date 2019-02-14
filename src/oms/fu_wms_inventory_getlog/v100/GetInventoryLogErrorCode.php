<?php

namespace express_4px\oms\fu_wms_inventory_getlog\v100;

class GetInventoryLogErrorCode{
	const BETWEEN_TO0_LARGE= 'BETWEEN_TO0_LARGE';
	
	static $codeMessageMap = array(
		self::BETWEEN_TO0_LARGE     => '查询时间跨度最长为30天',
	);
	
}