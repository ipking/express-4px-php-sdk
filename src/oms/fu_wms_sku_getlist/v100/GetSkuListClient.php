<?php
/**
 * 获取SKU列表
 */

namespace express_4px\oms\fu_wms_sku_getlist\v100;
use express_4px\oms\OmsClient;

class GetSkuListClient extends OmsClient {
	/**
	 * API接口名称
	 */
	protected $method = 'fu.wms.sku.getlist';
	
	/**
	 * API协议版本，参考接口版本号
	 */
	protected $v = '1.0.0';
	
	public function __construct(GetSkuListParameter $parameter) {
		parent::__construct($parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new GetSkuListResponse($rsp_data['result'],$rsp_data['errors'], $rsp_data['msg'], $rsp_data['data']);
	}
}