<?php

namespace express_4px\oms\fu_wms_inventory_getdetail\v100\data_type;

use express_4px\oms\OmsParameter;

/**
 * @property String customer_code   客户代码,客户助记码。如：900278
 * @property String warehouse_code  仓库代码。需要查询库存的仓库代码。（详细参考公共服务，获取仓库代码）
 * @property String sku_id  数字条码。4PX系统针对SKU生成的唯一条码。
 * @property String sku_code    SKU编码。如：TEST001
 * @property String batch_no    SKU库存批次号
 * @property String stock_quality   库存质量
 * @property String consignment_no  委托单号
 * @property String warehouse_stock 仓库在库库存（仓库库存）
 * @property String putaway_time    SKU上架时间。 *注：返回时间值格式为long类型，接收到值后需要对long类型值进行转换。
 * @property String inventory_age   SKU库龄/在库时间（天）
 */
class InventoryDetailList extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'customer_code'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'warehouse_code'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sku_id'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sku_code'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'batch_no'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'stock_quality'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'consignment_no'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'warehouse_stock' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'putaway_time'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'inventory_age'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

