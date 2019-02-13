<?php

/**
 * 到仓运输类型。
 * 如果委托类型是客户自发，则需要选择送到上架仓库的运输方式类型，可选值：A(空运);S(海运);E(快递);G(陆运)。
 * 如果委托类型是4PX承运，则需要选择送货到4PX承运起始仓库的运输方式类型，可选值：E(快递);G(陆运)。
 */
namespace express_4px\oms\data_type\inbound;

class TransportTypeEnum
{
	const TRANSPORT_TYPE_A = 'A';
	const TRANSPORT_TYPE_S = 'S';
	const TRANSPORT_TYPE_E = 'E';
	const TRANSPORT_TYPE_G = 'G';
	
	static $map = array(
		self::TRANSPORT_TYPE_A => '空运',
		self::TRANSPORT_TYPE_S => '海运',
		self::TRANSPORT_TYPE_E => '快递',
		self::TRANSPORT_TYPE_G => '陆运',
	);
}