<?php
/**
 * 查询计量单位
 */

namespace express_4px\oms\com_basis_measureunit_getlist\v100;
use express_4px\oms\OmsClient;

class GetMeasureUnitListClient extends OmsClient {
	/**
	 * API接口名称
	 */
	protected $method = 'com.basis.measureunit.getlist';
	
	/**
	 * API协议版本，参考接口版本号
	 */
	protected $v = 'v1.0';
	
	public function __construct(GetMeasureUnitListParameter $parameter) {
		parent::__construct($parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new GetMeasureUnitListResponse($rsp_data['result'],$rsp_data['errors'], $rsp_data['msg'], ['measure_unit_list' =>$rsp_data['data']]);
	}
}