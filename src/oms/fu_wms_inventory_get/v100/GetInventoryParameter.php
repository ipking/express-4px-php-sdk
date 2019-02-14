<?php
/**
 * 库存查询的参数
 */

namespace express_4px\oms\fu_wms_inventory_get\v100;

use express_4px\oms\OmsParameter;

/**
 * @property String customer_code   客户操作账号
 * @property array lstsku    sku编号。注：单次最大支持100种SKU种类查询，如超出请分批查询。
 * @property array lstbatch_no   批次号。注：单次最大支持100个批次号查询，如超出请分批查询。
 * @property String warehouse_code  仓库代码。需要查询库存的仓库代码。（详细参考公共服务，获取仓库代码）
 * @property Number page_no 页码。默认为第1页。如：1。
 * @property Number page_size   每页记录数。默认记录数为：50。如：50。*注：单次查询最大支持500条，可小于500进行查询。
 */
class GetInventoryParameter extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'customer_code'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'lstsku'         => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL,self::PARAM_TYPE_STRING],
			'lstbatch_no'    => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL,self::PARAM_TYPE_STRING],
			'warehouse_code' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'page_no'        => [self::PARAM_TYPE_NUM, self::PARAM_OPTIONAL],
			'page_size'      => [self::PARAM_TYPE_NUM, self::PARAM_OPTIONAL],
		));
	}
}