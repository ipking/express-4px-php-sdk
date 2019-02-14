<?php
/**
 * 查询出库委托费用
 */

namespace express_4px\oms\fu_wms_outbound_getbilling\v100;
use express_4px\oms\OmsClient;

class GetOutboundBillingClient extends OmsClient {
	/**
	 * API接口名称
	 */
	protected $method = 'fu.wms.outbound.getbilling';
	
	/**
	 * API协议版本，参考接口版本号
	 */
	protected $v = '1.0.0';
	
	public function __construct(GetOutboundBillingParameter $parameter) {
		parent::__construct($parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new GetOutboundBillingResponse($rsp_data['result'],$rsp_data['errors'], $rsp_data['msg'], $rsp_data['data']);
	}
}