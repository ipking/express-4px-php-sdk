<?php
/**
 * 创建申报产品的参数
 */

namespace express_4px\oms\com_basis_declare_create\v100;


use express_4px\oms\com_basis_declare_create\v100\data_type\DeclareCountryList;
use express_4px\oms\com_basis_declare_create\v100\data_type\DeclareSkuList;
use express_4px\oms\data_type\common\CountryEnum;
use express_4px\oms\OmsParameter;

/**
 * @property String declare_product_code    申报产品代码（客户自定义申报产品代码）
 * @property Number declare_category_id 申报品名类目ID(参考获取申报产品类目ID方法)
 * @property String uses    申报产品用途
 * @property String specification   申报产品规格
 * @property String model   申报产品型号
 * @property String material    申报产品材质
 * @property String origin_country  申报产品原产地。国家二字码，详细参考国际二字码。如：CN（中国）
 * @property DeclareCountryList[] declare_country_list    申报国家列表
 * @property DeclareSkuList[] declare_sku_list    申报SKU列表
 */
class CreateDeclareParameter extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'declare_product_code' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'declare_category_id'  => [self::PARAM_TYPE_NUMBER, self::PARAM_REQUIRED],
			'uses'                 => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'specification'        => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'model'                => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'material'             => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'origin_country'       => [self::PARAM_TYPE_ENUM, self::PARAM_REQUIRED,CountryEnum::class],
			'declare_country_list' => [self::PARAM_TYPE_LIST, self::PARAM_REQUIRED,DeclareCountryList::class],
			'declare_sku_list'     => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL,DeclareSkuList::class],
		));
	}
}