<?php
/**
 * 查询库存流水的参数
 */

namespace express_4px\oms\fu_wms_inventory_getlog\v100;

use express_4px\oms\OmsParameter;

/**
 * @property String customer_code   客户操作账号
 * @property String sku_code    货品编号
 * @property String consignment_no  入库委托单号
 * @property String batch_no    批次号
 * @property String warehouse_code  仓库代码（详细参考公共服务，获取仓库代码）
 * @property String create_time_start   创建时间-开始。*注：最大支持一个月（30天）数据进行查询。时间格式：传入时间值需要转换为long类型格式。
 * @property String create_time_end 创建时间-结束。*注：最大支持一个月（30天）数据进行查询。时间格式：传入时间值需要转换为long类型格式。
 * @property Number page_no 页码。默认为第1页。如：1。
 * @property Number page_size   每页记录数。默认记录数为：50。如：50。*注：单次查询最大支持500条，可小于500进行查询。
 */
class GetInventoryLogParameter extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'customer_code'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sku_code'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'consignment_no'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'batch_no'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'warehouse_code'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'create_time_start' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'create_time_end'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'page_no'           => [self::PARAM_TYPE_NUMBER, self::PARAM_OPTIONAL],
			'page_size'         => [self::PARAM_TYPE_NUMBER, self::PARAM_OPTIONAL],
		));
	}
}