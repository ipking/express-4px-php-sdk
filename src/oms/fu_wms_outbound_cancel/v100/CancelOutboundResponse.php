<?php
/**
 * 取消出库委托的响应
 */

namespace express_4px\oms\fu_wms_outbound_cancel\v100;
use express_4px\oms\OmsErrorMsg;
use express_4px\oms\OmsResponse;

/**
 * @property string consignment_no  出库委托单号
 * @property string status  出库委托状态
 * @property string ref_no  出库委托参考号
 */
class CancelOutboundResponse extends OmsResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = OmsErrorMsg::getMsg(CancelOutboundErrorCode::$codeMessageMap,$errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'consignment_no' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'status'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'ref_no'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
