<?php
/**
 * 创建SKU
 */

namespace express_4px\oms\fu_wms_sku_create\v100;
use express_4px\oms\OmsClient;

class CreateSkuClient extends OmsClient {
	public function __construct(CreateSkuParameter $parameter) {
		parent::__construct('1.0.0',$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new CreateSkuResponse($rsp_data['code'], $rsp_data['message'], $rsp_data['data']);
	}
}