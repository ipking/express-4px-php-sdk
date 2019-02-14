<?php

/**
 * 取消原因类型，客户取消时需要选择一个取消原因。可选值：
 * AP(地址问题);
 * RO(重复下单);
 * OS(商品缺货);
 * BC(买家取消);
 * CF(计费失败);
 * OT(其它原因)。*注:如果选择OT(其它原因)，支持传入参数cancel_remark（取消原因备注、自定义备注信息）。
 */
namespace express_4px\oms\data_type\outbound;

class CancelTypeEnum
{
	const CANCEL_TYPE_AP = 'AP';
	const CANCEL_TYPE_RO = 'RO';
	const CANCEL_TYPE_OS = 'OS';
	const CANCEL_TYPE_BC = 'BC';
	const CANCEL_TYPE_CF = 'CF';
	const CANCEL_TYPE_OT = 'OT';
	
	static $map = array(
		self::CANCEL_TYPE_AP => '地址问题',
		self::CANCEL_TYPE_RO => '重复下单',
		self::CANCEL_TYPE_OS => '商品缺货',
		self::CANCEL_TYPE_BC => '买家取消',
		self::CANCEL_TYPE_CF => '计费失败',
		self::CANCEL_TYPE_OT => '其它原因',
	);
}