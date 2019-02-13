<?php
/**
 * 创建SKU的响应
 */

namespace express_4px\oms\fu_wms_sku_getlist\v100;
use express_4px\oms\fu_wms_sku_getlist\v100\data_type\SkuList;
use express_4px\oms\OmsResponse;

/**
 * @property SkuList[] skulist
 */
class GetSkuListResponse extends OmsResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$code_message = GetSkuListErrorCode::$codeMessageMap;
		$error_code = strtoupper($errors[0]['error_code']);
		$error_data = $errors[0]['error_data'];
		!empty($code_message[$error_code]) && ($message = $code_message[$error_code].($error_data?':'.$error_data:''));
		parent::__construct($result,$errors, $message, $data, array(
			'skulist'   => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL,SkuList::class],
		));
	}
}
