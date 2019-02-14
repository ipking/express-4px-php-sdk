<?php
/**
 * 修改SKU图片的响应
 */

namespace express_4px\oms\fu_wms_sku_editpicture\v100;
use express_4px\oms\OmsErrorMsg;
use express_4px\oms\OmsResponse;

/**
 * @property string data  返回的sku_code结果数据
 */
class EditSkuPictureResponse extends OmsResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = OmsErrorMsg::getMsg(EditSkuPictureErrorCode::$codeMessageMap,$errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'data' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
