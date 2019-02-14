<?php
/**
 * 申报产品关联SKU
 */

namespace express_4px\oms\com_basis_declare_skubinddeclare\v100;
use express_4px\oms\OmsClient;

class SkuBindDeclareClient extends OmsClient {
	/**
	 * API接口名称
	 */
	protected $method = 'com.basis.declare.skubinddeclare';
	
	/**
	 * API协议版本，参考接口版本号
	 */
	protected $v = '1.0.0';
	
	public function __construct(SkuBindDeclareParameter $parameter) {
		parent::__construct($parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new SkuBindDeclareResponse($rsp_data['result'],$rsp_data['errors'], $rsp_data['msg'], $rsp_data['data']);
	}
}