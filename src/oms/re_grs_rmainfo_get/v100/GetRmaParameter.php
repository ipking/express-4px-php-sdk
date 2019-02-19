<?php
/**
 * 查询退货单信息的参数
 */

namespace express_4px\oms\re_grs_rmainfo_get\v100;

use express_4px\oms\OmsParameter;

/**
 * @property string rma_no 退货单（退货预报单）
 */
class GetRmaParameter extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'rma_no' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}