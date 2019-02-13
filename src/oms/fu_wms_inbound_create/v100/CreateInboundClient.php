<?php
/**
 * 创建入库委托
 */

namespace express_4px\oms\fu_wms_inbound_create\v100;
use express_4px\oms\OmsClient;

class CreateInboundClient extends OmsClient {
	/**
	 * API接口名称
	 */
	protected $method = 'fu.wms.inbound.create';
	
	/**
	 * API协议版本，参考接口版本号
	 */
	protected $v = '1.0.0';
	
	public function __construct(CreateInboundParameter $parameter) {
		parent::__construct($parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new CreateInboundResponse($rsp_data['result'],$rsp_data['errors'], $rsp_data['msg'], $rsp_data['data']);
	}
}