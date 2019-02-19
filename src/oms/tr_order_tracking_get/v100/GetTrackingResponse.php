<?php
/**
 * 物流轨迹查询的响应
 */

namespace express_4px\oms\tr_order_tracking_get\v100;

use express_4px\oms\OmsErrorMsg;
use express_4px\oms\OmsResponse;
use express_4px\oms\tr_order_tracking_get\v100\data_type\Tracking;

/**
 * @property String deliveryOrderNo 返回传入的物流单号
 * @property Tracking[] trackingList  物流轨迹信息集合
 */
class GetTrackingResponse extends OmsResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = OmsErrorMsg::getMsg(GetTrackingErrorCode::$codeMessageMap,$errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'deliveryOrderNo'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'trackingList'       => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL,Tracking::class],
		));
	}
}
