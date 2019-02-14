<?php
/**
 * 申报产品关联SKU的参数
 */

namespace express_4px\oms\com_basis_declare_skubinddeclare\v100;

use express_4px\oms\com_basis_declare_skubinddeclare\v100\data_type\DeclareSkuList;
use express_4px\oms\OmsParameter;

/**
 * @property String declare_product_code    申报产品代码（客户自定义申报产品代码）
 * @property DeclareSkuList[] declare_sku_list    申报SKU列表
 */
class SkuBindDeclareParameter extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'declare_product_code' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'declare_sku_list'     => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL,DeclareSkuList::class],
		));
	}
}