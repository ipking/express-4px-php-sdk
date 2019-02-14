<?php

namespace express_4px\oms\fu_wms_inventory_get\v100\data_type;

use express_4px\oms\OmsParameter;

/**
 * @property String customer_code   客户操作账号
 * @property String warehouse_code  仓库代码。库存所在仓库代码。（详细参考公共服务，获取仓库代码）
 * @property String sku_id  数字条码。4PX系统针对SKU生成的唯一条码。
 * @property String sku_code    SKU编码。如：TEST001
 * @property String batch_no    SKU库存批次号
 * @property String available_stock 仓库可用库存
 * @property String pending_stock   仓库待出库存
 * @property String onway_stock 在途库存
 * @property String stock_quality   库存质量
 */
class InventoryList extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'customer_code'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'warehouse_code'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sku_id'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sku_code'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'batch_no'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'available_stock' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'pending_stock'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'onway_stock'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'stock_quality'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

