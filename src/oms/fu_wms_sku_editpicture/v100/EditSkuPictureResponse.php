<?php
/**
 * 修改SKU图片的响应
 */

namespace express_4px\oms\fu_wms_sku_editpicture\v100;
use express_4px\oms\OmsErrorCode;
use express_4px\oms\OmsResponse;

/**
 */
class EditSkuPictureResponse extends OmsResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = OmsErrorCode::getMsg(EditSkuPictureErrorCode::$codeMessageMap,$errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
		));
	}
}
