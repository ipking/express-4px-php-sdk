<?php
/**
 * 查询库存流水的响应
 */

namespace express_4px\oms\fu_wms_inventory_getlog\v100;

use express_4px\oms\fu_wms_inventory_getlog\v100\data_type\SellerInventoryList;
use express_4px\oms\OmsErrorMsg;
use express_4px\oms\OmsResponse;

/**
 * @property SellerInventoryList[] data  库存信息集合
 * @property string page_no 页码
 * @property string page_size   每页记录数
 * @property string total   总记录数
 */
class GetInventoryLogResponse extends OmsResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = OmsErrorMsg::getMsg(GetInventoryLogErrorCode::$codeMessageMap,$errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'data'      => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL, SellerInventoryList::class],
			'page_no'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'page_size' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'total'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
