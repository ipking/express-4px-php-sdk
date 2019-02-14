<?php
/**
 * 批量查询申报产品的响应
 */

namespace express_4px\oms\com_basis_declare_getlist\v100;
use express_4px\oms\com_basis_declare_getlist\v100\data_type\DeclareProduct;
use express_4px\oms\OmsErrorMsg;
use express_4px\oms\OmsResponse;

/**
 * @property DeclareProduct[] declare_product_list    申报产品列表
 */
class GetDeclareListResponse extends OmsResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = OmsErrorMsg::getMsg(GetDeclareListCode::$codeMessageMap,$errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'declare_product_list'    => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL,DeclareProduct::class],
		));
	}
}
