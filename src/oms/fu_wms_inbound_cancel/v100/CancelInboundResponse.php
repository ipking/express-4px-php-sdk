<?php
/**
 * 取消入库委托的响应
 */

namespace express_4px\oms\fu_wms_inbound_cancel\v100;
use express_4px\oms\OmsErrorMsg;
use express_4px\oms\OmsResponse;

/**
 * @property string consignment_no  入库委托单号
 * @property string ref_no  入库委托参考号
 */
class CancelInboundResponse extends OmsResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = OmsErrorMsg::getMsg(CancelInboundErrorCode::$codeMessageMap,$errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'consignment_no' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'ref_no'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
