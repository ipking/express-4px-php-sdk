<?php
/**
 * 库存查询的响应
 */

namespace express_4px\oms\fu_wms_inventory_get\v100;

use express_4px\oms\fu_wms_inventory_get\v100\data_type\InventoryList;
use express_4px\oms\OmsErrorCode;
use express_4px\oms\OmsResponse;

/**
 * @property InventoryList[] data  库存信息集合
 * @property string page_no 页码
 * @property string page_size   每页记录数
 * @property string total   总记录数
 */
class GetInventoryResponse extends OmsResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = OmsErrorCode::getMsg(GetInventoryErrorCode::$codeMessageMap,$errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'data'      => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL, InventoryList::class],
			'page_no'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'page_size' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'total'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
