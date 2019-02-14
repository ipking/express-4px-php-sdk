<?php
/**
 * 批量查询申报产品的参数
 */

namespace express_4px\oms\com_basis_declare_getlist\v100;

use express_4px\oms\OmsParameter;

/**
 * @property array declare_product_code 申报产品代码（客户自定义产品代码）。申报产品和SKU编码必须传入一个。申报产品代码和SKU编码只能支持一个查询,两个参数同时传入时，只支持申报产品代码查询。*注：最大支持传入100个申报产品代码查询
 * @property array sku_code SKU编号。申报产品和SKU编码必须传入一个。申报产品代码和SKU编码只能支持一个查询,两个参数同时传入时，只支持申报产品代码查询。*注：最大支持传人100个SKU查询。
 */
class GetDeclareListParameter extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'declare_product_code' => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL,self::PARAM_TYPE_STRING],
			'sku_code'             => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL,self::PARAM_TYPE_STRING],
		));
	}
}