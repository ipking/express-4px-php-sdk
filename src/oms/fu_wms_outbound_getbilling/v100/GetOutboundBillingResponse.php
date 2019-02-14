<?php
/**
 * 查询出库委托费用的响应
 */

namespace express_4px\oms\fu_wms_outbound_getbilling\v100;

use express_4px\oms\fu_wms_outbound_getbilling\v100\data_type\BillingList;
use express_4px\oms\OmsErrorCode;
use express_4px\oms\OmsResponse;

/**
 * @property BillingList[] billinglist
 */
class GetOutboundBillingResponse extends OmsResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = OmsErrorCode::getMsg(GetOutboundBillingErrorCode::$codeMessageMap,$errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'billinglist' => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL,BillingList::class],
		));
	}
}
