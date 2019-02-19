<?php
/**
 * 创建退货预报单的响应
 */

namespace express_4px\oms\re_grs_rma_create\v100;
use express_4px\oms\OmsErrorMsg;
use express_4px\oms\OmsResponse;

/**
 * @property string rma_no    退货单号
 */
class CreateRmaResponse extends OmsResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = OmsErrorMsg::getMsg(CreateRmaErrorCode::$codeMessageMap,$errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'rma_no'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
