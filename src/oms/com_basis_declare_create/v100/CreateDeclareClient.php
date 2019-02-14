<?php
/**
 * 创建申报产品
 */

namespace express_4px\oms\com_basis_declare_create\v100;
use express_4px\oms\OmsClient;

class CreateDeclareClient extends OmsClient {
	/**
	 * API接口名称
	 */
	protected $method = 'com.basis.declare.create';
	
	/**
	 * API协议版本，参考接口版本号
	 */
	protected $v = '1.0.0';
	
	public function __construct(CreateDeclareParameter $parameter) {
		parent::__construct($parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new CreateDeclareResponse($rsp_data['result'],$rsp_data['errors'], $rsp_data['msg'], $rsp_data['data']);
	}
}