<?php
/**
 * 取消出库委托的参数
 */

namespace express_4px\oms\fu_wms_outbound_cancel\v100;

use express_4px\oms\data_type\outbound\CancelTypeEnum;
use express_4px\oms\OmsParameter;

/**
 * @property string consignment_no  出库委托单号 （出库委托或参考号必须填写一个）
 * @property string ref_no  出库委托参考号 （出库委托或参考号必须填写一个）
 * @property string cancel_type  取消原因类型，客户取消时需要选择一个取消原因。
 * @property string cancel_remark  取消原因备注，自定义备注信息。*注:如果选择OT(其它原因)，支持传入参数cancel_remark（取消原因备注），自定义备注信息。
 */
class CancelOutboundParameter extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'consignment_no' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'ref_no'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'cancel_type'    => [self::PARAM_TYPE_ENUM, self::PARAM_REQUIRED,CancelTypeEnum::class],
			'cancel_remark'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}