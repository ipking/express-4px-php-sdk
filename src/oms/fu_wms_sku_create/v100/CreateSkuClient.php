<?php
/**
 * 创建SKU
 */

namespace express_4px\oms\fu_wms_sku_create\v100;
use express_4px\oms\OmsClient;

class CreateSkuClient extends OmsClient {
	/**
	 * API接口名称
	 */
	protected $method = 'fu.wms.sku.create';
	
	/**
	 * API协议版本，参考接口版本号
	 */
	protected $v = '1.0.0';
	
	public function __construct(CreateSkuParameter $parameter) {
		parent::__construct($parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new CreateSkuResponse($rsp_data['result'],$rsp_data['errors'], $rsp_data['msg'], $rsp_data['data']);
	}
}