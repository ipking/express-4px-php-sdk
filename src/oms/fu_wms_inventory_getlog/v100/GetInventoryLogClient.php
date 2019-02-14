<?php
/**
 * 查询库存流水
 */

namespace express_4px\oms\fu_wms_inventory_getlog\v100;
use express_4px\oms\OmsClient;

class GetInventoryLogClient extends OmsClient {
	/**
	 * API接口名称
	 */
	protected $method = 'fu.wms.inventory.getlog';
	
	/**
	 * API协议版本，参考接口版本号
	 */
	protected $v = '1.0.0';
	
	public function __construct(GetInventoryLogParameter $parameter) {
		parent::__construct($parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new GetInventoryLogResponse($rsp_data['result'],$rsp_data['errors'], $rsp_data['msg'], $rsp_data['data']);
	}
}