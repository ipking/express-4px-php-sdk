<?php
/**
 * 获取SKU列表的响应
 */

namespace express_4px\oms\fu_wms_sku_getlist\v100;
use express_4px\oms\fu_wms_sku_getlist\v100\data_type\SkuList;
use express_4px\oms\OmsErrorCode;
use express_4px\oms\OmsResponse;

/**
 * @property SkuList[] skulist
 */
class GetSkuListResponse extends OmsResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = OmsErrorCode::getMsg(GetSkuListErrorCode::$codeMessageMap,$errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'skulist'   => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL,SkuList::class],
		));
	}
}
