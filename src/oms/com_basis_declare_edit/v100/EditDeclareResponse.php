<?php
/**
 * 创建申报产品的响应
 */

namespace express_4px\oms\com_basis_declare_edit\v100;
use express_4px\oms\OmsErrorMsg;
use express_4px\oms\OmsResponse;

/**
 * @property string declare_product_code    申报产品信息code
 */
class EditDeclareResponse extends OmsResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = OmsErrorMsg::getMsg(EditDeclareErrorCode::$codeMessageMap,$errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'declare_product_code'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
