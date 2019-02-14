<?php
/**
 * 修改SKU图片
 */

namespace express_4px\oms\fu_wms_sku_editpicture\v100;
use express_4px\oms\OmsClient;

class EditSkuPictureClient extends OmsClient {
	/**
	 * API接口名称
	 */
	protected $method = 'fu.wms.sku.editpicture';
	
	/**
	 * API协议版本，参考接口版本号
	 */
	protected $v = '1.0.0';
	
	public function __construct(EditSkuPictureParameter $parameter) {
		parent::__construct($parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new EditSkuPictureResponse($rsp_data['result'],$rsp_data['errors'], $rsp_data['msg'], ['data'=>$rsp_data['data']]);
	}
}