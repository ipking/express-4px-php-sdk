<?php

namespace express_4px\oms\fu_wms_outbound_getbilling\v100\data_type;

use express_4px\oms\data_type\outbound\BillingTypeEnum;
use express_4px\oms\data_type\outbound\DeductionTypeEnum;
use express_4px\oms\OmsParameter;

/**
 * @property string consignment_no  出库委托单号
 * @property string billing_type    费用项
 * @property string deduction_type  扣费类型。如：CA(现金);CR(信用额度)。
 * @property string billing_date    计费时间。*注：时间格式：传入时间值需要转换为long类型格式。
 * @property string currency    计费币种。如：USD(美元);CNY(人民币)。如：CNY
 * @property string billing_amount  计费金额
 */
class BillingList extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'consignment_no' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'billing_type'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL,BillingTypeEnum::class],
			'deduction_type' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL,DeductionTypeEnum::class],
			'billing_date'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'currency'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'billing_amount' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

