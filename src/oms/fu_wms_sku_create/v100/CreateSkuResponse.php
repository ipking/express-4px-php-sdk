<?php
/**
 * 创建SKU的响应
 */

namespace express_4px\oms\fu_wms_sku_create\v100;
use express_4px\oms\OmsResponse;

/**
 * @property string sku_id
 * @property string sku_code
 */
class CreateSkuResponse extends OmsResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		parent::__construct($result,$errors, $message, $data, array(
			'sku_id'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sku_code' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
