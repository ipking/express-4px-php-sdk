<?php
/**
 * 物流轨迹查询的参数
 */

namespace express_4px\oms\tr_order_tracking_get\v100;

use express_4px\oms\OmsParameter;

/**
 * @property string deliveryOrderNo 物流单号
 */
class GetTrackingParameter extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'deliveryOrderNo' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}