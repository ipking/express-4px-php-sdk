<?php
/**
 * 查询退货单信息的响应
 */

namespace express_4px\oms\re_grs_rmainfo_get\v100;

use express_4px\oms\OmsErrorMsg;
use express_4px\oms\OmsResponse;

/**
 * @property string rma_no    退货单（退货预报单）
 * @property string received_shipping_no    客户退到grs收货仓库商品的物流跟踪单号
 * @property string status    退货单状态（收货、清点、RO上架）每个业务状态都是一个固定值，详细可见于表《业务状态说明》
 */
class GetRmaResponse extends OmsResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = OmsErrorMsg::getMsg(GetRmaErrorCode::$codeMessageMap,$errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'rma_no'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'received_shipping_no' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'status'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
