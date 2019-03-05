<?php

/**
 * 是否贴FBA商品标签标识。可选值：
 * Y（贴FBA标签）;
 * N（不贴FBA标签）;
 */
namespace express_4px\oms\data_type\outbound;

class FBAItemLabelSignEnum
{
	const FBA_ITEM_LABEL_SIGN_Y = 'Y';
	const FBA_ITEM_LABEL_SIGN_N = 'N';
	
	static $map = array(
		self::FBA_ITEM_LABEL_SIGN_Y => '贴FBA标签',
		self::FBA_ITEM_LABEL_SIGN_N => '不贴FBA标签',
		
	);
}