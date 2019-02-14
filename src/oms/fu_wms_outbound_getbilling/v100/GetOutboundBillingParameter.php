<?php
/**
 * 查询出库委托费用的参数
 */

namespace express_4px\oms\fu_wms_outbound_getbilling\v100;

use express_4px\oms\OmsParameter;

/**
 * @property string consignment_no  出库委托单号（参考号和委托单号必须传入一个。两个参数同时传入时，只支持托单号查询。）
 * @property string ref_no  参考号（参考号和委托单号必须传入一个。两个参数同时传入时，只支持托单号查询。）
 */
class GetOutboundBillingParameter extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'consignment_no' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'ref_no'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}