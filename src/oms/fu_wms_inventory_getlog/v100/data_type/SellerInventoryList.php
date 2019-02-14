<?php

namespace express_4px\oms\fu_wms_inventory_getlog\v100\data_type;

use express_4px\oms\OmsParameter;

/**
 * @property String customer_code   客户代码
 * @property String warehouse_code  仓库代码
 * @property String sku_id  数字条码
 * @property String sku_code    SKU编码
 * @property String batch_no    批次号
 * @property String stock_quality   库存质量
 * @property String warehouse_stock 在库库存
 * @property String io_qty  出入库数量
 * @property String balance_stock   结余库存
 * @property String business_type   业务类型
 * @property String business_ref_no 委托单号
 * @property String create_time 出入库时间。*注：返回时间值格式为long类型，接收到值后需要对long类型值进行转换。
 * @property String journal_type    出入库标识
 */
class SellerInventoryList extends OmsParameter
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
			'warehouse_stock' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'io_qty'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'balance_stock'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'business_type'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'business_ref_no' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'create_time'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'journal_type'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

