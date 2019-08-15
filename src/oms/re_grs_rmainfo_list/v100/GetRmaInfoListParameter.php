<?php
/**
 * 批量查询退货单信息的参数
 */

namespace express_4px\oms\re_grs_rmainfo_list\v100;


use express_4px\oms\OmsParameter;

/**
 * @property string rma_no  退货单（退货预报单）
 * @property string received_shipping_no    退货物流单号
 * @property string recevier_time_start 收货的开始时间 2019-08-08
 * @property string recevier_time_end   收货的结束时间 2019-08-08
 * @property string page_start  分页开始页，默认值为0
 * @property string page_count  分页面数量，默认值为100
 */
class GetRmaInfoListParameter extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'rma_no'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'received_shipping_no' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'recevier_time_start'  => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'recevier_time_end'    => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'page_start'           => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'page_count'           => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}