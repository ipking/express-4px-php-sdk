<?php

namespace express_4px\oms\re_grs_rma_create\v100;

class CreateRmaErrorCode{
	const CODE_1001= '1001';
	const CODE_1002= '1002';
	const CODE_1003= '1003';
	const CODE_1004= '1004';
	const CODE_1005= '1005';
	const CODE_1006= '1006';
	const CODE_2001= '2001';
	const CODE_12001= '12001';
	const CODE_12002= '12002';
	const CODE_12003= '12003';
	const CODE_12004= '12004';
	const CODE_12005= '12005';
	const CODE_12006= '12006';
	const CODE_12007= '12007';
	const CODE_12008= '12008';
	const CODE_12009= '12009';
	const CODE_12010= '12010';
	const CODE_12011= '12011';
	const CODE_12012= '12012';
	
	static $codeMessageMap = array(
		self::CODE_1001  => '系统繁忙，请稍后再试或联系我们',
		self::CODE_1002  => '系统异常，请联系我们',
		self::CODE_1003  => '未知系统错误，请联系我们',
		self::CODE_1004  => '{0}参数长度错误，请查看接口文档',
		self::CODE_1005  => '{0}参数不能为空，请查看接口文档',
		self::CODE_1006  => '{0}参数填写错误，请查看接口文档',
		self::CODE_2001  => '客户代码：{0}校验未通过，填写帐号对应的客户代码',
		self::CODE_12001 => '物流跟踪号：{0}重复，不能创建退货预报单',
		self::CODE_12002 => 'sku：{0}在FB4订单宝中不存在，请修改或在FB4订单宝中维护sku信息',
		self::CODE_12003 => 'sku：{0}在订单宝中非发布状态，请在FB4订单宝中维护sku状态',
		self::CODE_12004 => 'sku：{0}商品数量超限制错误，必须为大于0的整数',
		self::CODE_12005 => 'sku：{0}更换后的条码非此sku在FB4订单宝中对应的数字条码或外部条码',
		self::CODE_12006 => 'sku：{0}中的{1}参数长度错误，请查看接口文档',
		self::CODE_12007 => 'sku：{0}中的{1}参数不能为空，请查看接口文档',
		self::CODE_12008 => 'sku：{0}中的{1}参数填写错误，请查看接口文档',
		self::CODE_12009 => 'sku：{0}无需填写更换后的条码，请查看接口文档',
		self::CODE_12010 => 'sku：{0}商品有效期填写错误，必须大于当前日期',
		self::CODE_12011 => 'sku：{0}在GRS订单系统中不存在，请修改或在GRS订单系统中维护sku信息',
		self::CODE_12012 => 'sku：{0}无需填写商品有效期，请查看接口文档',
	);
	
}