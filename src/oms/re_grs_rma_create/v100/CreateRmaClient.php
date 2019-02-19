<?php
/**
 * 创建退货预报单
 */

namespace express_4px\oms\re_grs_rma_create\v100;
use express_4px\oms\OmsClient;

class CreateRmaClient extends OmsClient {
	/**
	 * API接口名称
	 */
	protected $method = 're.grs.rma.create';
	
	/**
	 * API协议版本，参考接口版本号
	 */
	protected $v = '1.0.0';
	
	public function __construct(CreateRmaParameter $parameter) {
		parent::__construct($parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new CreateRmaResponse($rsp_data['result'],$rsp_data['error'], $rsp_data['msg'], ['rma_no'=>$rsp_data['data']]);
	}
}