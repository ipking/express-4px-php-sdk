<?php
/**
 * 批量查询申报产品
 */

namespace express_4px\oms\com_basis_declare_getlist\v100;
use express_4px\oms\OmsClient;

class GetDeclareListClient extends OmsClient {
	/**
	 * API接口名称
	 */
	protected $method = 'com.basis.declare.getlist';
	
	/**
	 * API协议版本，参考接口版本号
	 */
	protected $v = '1.0.0';
	
	public function __construct(GetDeclareListParameter $parameter) {
		parent::__construct($parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new GetDeclareListResponse($rsp_data['result'],$rsp_data['errors'], $rsp_data['msg'], $rsp_data['data']);
	}
}