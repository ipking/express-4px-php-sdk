<?php
/**
 * 创建申报产品
 */

namespace express_4px\oms\com_basis_declare_edit\v100;
use express_4px\oms\OmsClient;

class EditDeclareClient extends OmsClient {
	/**
	 * API接口名称
	 */
	protected $method = 'com.basis.declare.edit';
	
	/**
	 * API协议版本，参考接口版本号
	 */
	protected $v = '1.0.0';
	
	public function __construct(EditDeclareParameter $parameter) {
		parent::__construct($parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new EditDeclareResponse($rsp_data['result'],$rsp_data['errors'], $rsp_data['msg'], $rsp_data['data']);
	}
}