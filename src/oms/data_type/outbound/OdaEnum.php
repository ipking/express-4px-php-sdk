<?php

/**
 * ODA委托单走货标识。可选值：Y(只接收非ODA单)；N(默认都接单)；
 */
namespace express_4px\oms\data_type\outbound;

class OdaEnum
{
	const ODA_Y = 'Y';
	const ODA_N = 'N';
	
	static $map = array(
		self::ODA_Y => '只接收非ODA单',
		self::ODA_N => '默认都接单',
	);
}