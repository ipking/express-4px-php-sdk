<?php
/**
 * 查询物流产品信息的参数
 */

namespace express_4px\oms\com_basis_logistics_product_getlist\v100;


use express_4px\oms\data_type\basis_declare\CategoryCodeEnum;
use express_4px\oms\data_type\basis_declare\ServiceCodeEnum;
use express_4px\oms\OmsParameter;

/**
 * @property string service_code    服务代码。4PX服务代码，可选值：F(订单履约)。
 * @property string category_code   产品分类代码。可选值：first(头程);warehouse(仓内);end(尾程)。
 * @property string source_position_code    起始地仓库代码。传值请参考category_code（产品分类代码）描述定义。
 * @property string dest_position_code  目的地仓库代码。传值请参考category_code（产品分类代码）描述定义。
 * @property string dest_country_code   目的地-国家二字码。传值请参考category_code（产品分类代码）描述定义。
 * @property string dest_state_name 目的地-省名称。传值请参考category_code（产品分类代码）描述定义。
 * @property string dest_city_name  目的地-市名称。传值请参考category_code（产品分类代码）描述定义。
 * @property string dest_post_code  目的地-邮编。传值请参考category_code（产品分类代码）描述定义。
 */
class GetLogisticsProductListParameter extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'service_code'         => [self::PARAM_TYPE_ENUM, self::PARAM_REQUIRED,ServiceCodeEnum::class],
			'category_code'        => [self::PARAM_TYPE_ENUM, self::PARAM_REQUIRED,CategoryCodeEnum::class],
			'source_position_code' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'dest_position_code'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'dest_country_code'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'dest_state_name'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'dest_city_name'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'dest_post_code'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}