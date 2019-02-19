<?php
/**
 * 物流轨迹查询
 */

namespace express_4px\oms\tr_order_tracking_get\v100;
use express_4px\oms\OmsClient;

class GetTrackingClient extends OmsClient {
	/**
	 * API接口名称
	 */
	protected $method = 'tr.order.tracking.get';
	
	/**
	 * API协议版本，参考接口版本号
	 */
	protected $v = 'v1.0';
	
	public function __construct(GetTrackingParameter $parameter) {
		parent::__construct($parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new GetTrackingResponse($rsp_data['result'],$rsp_data['error'], $rsp_data['msg'], $rsp_data['data']);
	}
}