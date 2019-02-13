<?php
/**
 * 取消入库委托的参数
 */

namespace express_4px\oms\fu_wms_inbound_cancel\v100;

use express_4px\oms\OmsParameter;

/**
 * @property string consignment_no  入库委托单号 （入库委托或参考号必须填写一个）
 * @property string ref_no  入库委托参考号 （入库委托或参考号必须填写一个）
 */
class CancelInboundParameter extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'consignment_no' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'ref_no'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}