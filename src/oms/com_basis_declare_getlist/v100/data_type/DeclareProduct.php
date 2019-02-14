<?php

namespace express_4px\oms\com_basis_declare_getlist\v100\data_type;


use express_4px\oms\OmsParameter;

/**
 * @property String declare_product_code    申报产品代码（客户自定义申报产品代码）
 * @property String declare_product_id  申报品名类目ID(参考获取申报产品类目ID方法)
 * @property String uses    申报产品用途
 * @property String specification   申报产品规格
 * @property String model   申报产品型号
 * @property String material    申报产品材质
 * @property String declare_product_status  申报产品状态。如：N(草稿)；S(已提交)；C(已通过)；E(异常)；X(已作废)
 * @property String origin_country  申报产品原产地。国家二字码，详细参考国际二字码。如：CN（中国）
 * @property DeclareCountryList[] declare_country_list  申报国家列表
 * @property List declare_sku_list  申报SKU列表
 * @property String exception_reason    审核异常原因
 */
class DeclareProduct extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'declare_product_code'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'declare_product_id'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'uses'                   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'specification'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'model'                  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'material'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'declare_product_status' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'origin_country'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'declare_country_list'   => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL,DeclareCountryList::class],
			'declare_sku_list'       => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL,DeclareSkuList::class],
			'exception_reason'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

