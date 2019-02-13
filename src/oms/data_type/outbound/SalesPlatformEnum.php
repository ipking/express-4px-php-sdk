<?php

/**
 * 销售平台。
 * 可选值：
 * AE(速卖通);
 * WS(Wish);
 * EB(eBay);
 * AM(亚马逊);
 * TM(天猫国际);
 * JD(京东)
 */
namespace express_4px\oms\data_type\outbound;

class SalesPlatformEnum
{
	const SALES_PLATFORM_AE = 'AE';
	const SALES_PLATFORM_WS = 'WS';
	const SALES_PLATFORM_EB = 'EB';
	const SALES_PLATFORM_AM = 'AM';
	const SALES_PLATFORM_TM = 'TM';
	const SALES_PLATFORM_JD = 'JD';
	
	static $map = array(
		self::SALES_PLATFORM_AE => '速卖通',
		self::SALES_PLATFORM_WS => 'Wish',
		self::SALES_PLATFORM_EB => 'eBay',
		self::SALES_PLATFORM_AM => '亚马逊',
		self::SALES_PLATFORM_TM => '天猫国际',
		self::SALES_PLATFORM_JD => '京东',
	);
}