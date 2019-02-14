<?php
/**
 * 查询仓库信息的响应
 */

namespace express_4px\oms\com_basis_warehouse_getlist\v100;
use express_4px\oms\com_basis_warehouse_getlist\v100\data_type\Warehouse;
use express_4px\oms\OmsErrorMsg;
use express_4px\oms\OmsResponse;

/**
 * @property Warehouse[] warehouse_list    仓库列表
 */
class GetWarehouseListResponse extends OmsResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = OmsErrorMsg::getMsg(GetWarehouseListCode::$codeMessageMap,$errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'warehouse_list'    => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL,Warehouse::class],
		));
	}
}
