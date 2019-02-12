<?php
/**
 * 创建SKU的响应
 */

namespace express_4px\oms\fu_wms_sku_create\v100;
use express_4px\oms\OmsResponse;
use express_4px\core\ResponseCode;

/**
 * @property string sku
 */
class CreateSkuResponse extends OmsResponse{
	public function __construct($code = ResponseCode::CODE_OK, $message = 'success', $data = []) {
		parent::__construct($code, $message, $data, array(
			'sku' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
