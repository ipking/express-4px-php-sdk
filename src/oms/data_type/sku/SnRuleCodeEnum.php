<?php

/**
 * SN码规则编码。 可选值 : 01 (15位数字)；02 (18位数字)；03 (12位字符)。如果SKU无SN码管理则为空。
 */
namespace express_4px\oms\data_type\sku;

class SnRuleCodeEnum
{
	const SN_RULE_CODE_01 = '01';
	const SN_RULE_CODE_02 = '02';
	const SN_RULE_CODE_03 = '03';
}