<?php
/**
 * 查询仓库信息
 */

namespace express_4px\oms\com_basis_warehouse_getlist\v100;
use express_4px\oms\OmsClient;

class GetWarehouseListClient extends OmsClient {
	/**
	 * API接口名称
	 */
	protected $method = 'com.basis.warehouse.getlist';
	
	/**
	 * API协议版本，参考接口版本号
	 */
	protected $v = 'v1.0';
	
	public function __construct(GetWarehouseListParameter $parameter) {
		parent::__construct($parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new GetWarehouseListResponse($rsp_data['result'],$rsp_data['errors'], $rsp_data['msg'], ['warehouse_list' =>$rsp_data['data']]);
	}
}