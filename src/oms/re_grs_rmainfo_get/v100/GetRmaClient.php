<?php
/**
 * 查询退货单信息
 */

namespace express_4px\oms\re_grs_rmainfo_get\v100;
use express_4px\oms\OmsClient;

class GetRmaClient extends OmsClient {
	/**
	 * API接口名称
	 */
	protected $method = 're.grs.rmainfo.get';
	
	/**
	 * API协议版本，参考接口版本号
	 */
	protected $v = '1.0.0';
	
	public function __construct(GetRmaParameter $parameter) {
		parent::__construct($parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new GetRmaResponse($rsp_data['result'],$rsp_data['error'], $rsp_data['msg'], $rsp_data['data']);
	}
}