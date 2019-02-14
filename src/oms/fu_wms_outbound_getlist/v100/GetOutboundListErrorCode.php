<?php

namespace express_4px\oms\fu_wms_outbound_getlist\v100;

class GetOutboundListErrorCode{
	const MISS_PARAM_RESOURCE= 'MISS_PARAM_RESOURCE';
	
	static $codeMessageMap = array(
		self::MISS_PARAM_RESOURCE     => '查询创建时间跨度最长为30天',
	);
	
}