<?php

namespace express_4px\oms\re_grs_rmainfo_list\v100\data_type;

use express_4px\oms\OmsParameter;

/**
 * @property String rma_no  退货单（退货预报单）
 * @property String received_shipping_no    客户退到grs收货仓库商品的物流跟踪单号
 * @property String status  退货单状态（收货、清点、RO上架）每个业务状态都是一个固定值，详细可见于表《业务状态说明》
 * @property String warehouse   仓库代码（业务信息说明)
 * @property String received_weight grs实收重量（kg），精确到3位小数
 * @property String received_time   grs收货时间，格式：yyyy-MM-dd HH:mm:ss
 * @property String received_remark grs收货备注，仓库未填写的情况下为空
 */
class RmaInfo extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'rma_no'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'received_shipping_no' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'status'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'warehouse'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'received_weight'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'received_time'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'received_remark'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

