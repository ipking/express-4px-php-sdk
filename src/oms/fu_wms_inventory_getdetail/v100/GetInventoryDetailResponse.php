<?php
/**
 * 查询库存库龄的响应
 */

namespace express_4px\oms\fu_wms_inventory_getdetail\v100;

use express_4px\oms\fu_wms_inventory_getdetail\v100\data_type\InventoryDetailList;
use express_4px\oms\OmsErrorMsg;
use express_4px\oms\OmsResponse;

/**
 * @property InventoryDetailList[] inventorydetaillist  库存信息集合
 */
class GetInventoryDetailResponse extends OmsResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = OmsErrorMsg::getMsg(GetInventoryDetailErrorCode::$codeMessageMap,$errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'inventorydetaillist'      => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL, InventoryDetailList::class],
		));
	}
}
