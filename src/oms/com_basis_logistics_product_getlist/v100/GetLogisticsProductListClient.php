<?php
/**
 * 查询物流产品信息
 */

namespace express_4px\oms\com_basis_logistics_product_getlist\v100;
use express_4px\oms\OmsClient;

class GetLogisticsProductListClient extends OmsClient {
	/**
	 * API接口名称
	 */
	protected $method = 'com.basis.logistics_product.getlist';
	
	/**
	 * API协议版本，参考接口版本号
	 */
	protected $v = '1.0.0';
	
	public function __construct(GetLogisticsProductListParameter $parameter) {
		parent::__construct($parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new GetLogisticsProductListResponse($rsp_data['result'],$rsp_data['errors'], $rsp_data['msg'], ['logistics_product_list' =>$rsp_data['data']]);
	}
}