<?php

/**
 * 保险服务
 * 可选值：
 * 8Y(平邮保价);
 * 5Y(挂号-快递保价);
 * 6P(0.6%保险)。*注：如果选择保险服务后，insure_value（投保金额）必填。如果选择8Y(平邮保价)或5Y(挂号-快递保价)，投保金额必须在1.00到100.00之间。如果选择6P(0.6%保险），投保金额必须在200.00到9999999.00之间。
 */
namespace express_4px\oms\data_type\inbound;

class InsureServicesEnum
{
	const INSURE_SERVICES_8Y = '8Y';
	const INSURE_SERVICES_5Y = '5Y';
	const INSURE_SERVICES_6P = '6P';
	
	static $map = array(
		self::INSURE_SERVICES_8Y => '平邮保价',
		self::INSURE_SERVICES_5Y => '挂号-快递保价',
		self::INSURE_SERVICES_6P => '0.6%保险',
	);
}