<?php
/**
 * 创建出库委托的响应
 */

namespace express_4px\oms\fu_wms_outbound_create\v100;
use express_4px\oms\OmsErrorMsg;
use express_4px\oms\OmsResponse;

/**
 * @property string consignment_no  出库委托单号
 * @property string tracking_no 出库委托跟踪号
 */
class CreateOutboundResponse extends OmsResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = OmsErrorMsg::getMsg(CreateOutboundErrorCode::$codeMessageMap,$errors);
		$msg and $message = $msg;
		$data['4px_tracking_no'] and $data['tracking_no'] = $data['4px_tracking_no'];
		parent::__construct($result,$errors, $message, $data, array(
			'consignment_no' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'tracking_no'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
