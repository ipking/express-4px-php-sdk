<?php
/**
 * 库存查询
 */

namespace express_4px\oms\fu_wms_inventory_get\v100;
use express_4px\oms\OmsClient;

class GetInventoryClient extends OmsClient {
	/**
	 * API接口名称
	 */
	protected $method = 'fu.wms.inventory.get';
	
	/**
	 * API协议版本，参考接口版本号
	 */
	protected $v = '1.0.0';
	
	public function __construct(GetInventoryParameter $parameter) {
		parent::__construct($parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new GetInventoryResponse($rsp_data['result'],$rsp_data['errors'], $rsp_data['msg'], $rsp_data['data']);
	}
}