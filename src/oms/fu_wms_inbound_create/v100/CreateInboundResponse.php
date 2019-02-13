<?php
/**
 * 创建入库委托的响应
 */

namespace express_4px\oms\fu_wms_inbound_create\v100;
use express_4px\oms\OmsErrorCode;
use express_4px\oms\OmsResponse;

/**
 * @property string consignment_no
 * @property string tracking_no
 */
class CreateInboundResponse extends OmsResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = OmsErrorCode::getMsg(CreateInboundErrorCode::$codeMessageMap,$errors);
		$msg and $message = $msg;
		$data['4px_tracking_no'] and $data['tracking_no'] = $data['4px_tracking_no'];
		parent::__construct($result,$errors, $message, $data, array(
			'consignment_no' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'tracking_no'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
