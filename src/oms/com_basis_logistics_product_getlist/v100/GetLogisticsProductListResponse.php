<?php
/**
 * 查询物流产品信息的响应
 */

namespace express_4px\oms\com_basis_logistics_product_getlist\v100;

use express_4px\oms\com_basis_logistics_product_getlist\v100\data_type\LogisticsProduct;
use express_4px\oms\OmsErrorMsg;
use express_4px\oms\OmsResponse;

/**
 * @property LogisticsProduct[] logistics_product_list    物流产品列表
 */
class GetLogisticsProductListResponse extends OmsResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = OmsErrorMsg::getMsg(GetLogisticsProductListCode::$codeMessageMap,$errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'logistics_product_list'    => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL,LogisticsProduct::class],
		));
	}
}
