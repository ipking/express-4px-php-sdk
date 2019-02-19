<?php

namespace express_4px\oms\re_grs_rma_create\v100\data_type;

use express_4px\oms\OmsParameter;

/**
 * @property String sku_code    客户退到grs仓库商品的sku，必需在FB4订单宝中处于发布状态
 * @property Number plan_qty    商品数量
 * @property String sku_photograph_service  商品是否需要拍照服务：grs提供标准拍照服务， Y：都需要，N：不需要
 * @property String sku_photograph_service_type sku拍照服务类型，当选择需要对商品拍照时必填（预留，目前暂无此项服务）
 * @property String replace_product_code_service    商品是否需要更换条码服务：grs提供的更换条码服务， Y：需要，N：不需要
 * @property String replace_product_code_service_type   更换条码类型，当选择需要对商品更换条码时必填（预留，目前暂无此项服务）
 * @property String new_product_code    sku更换后的条码：此sku在订单中维护外部条码或数字条码，如果选择了更换条码，必需填写
 * @property String expired_date    sku商品过期时间：此sku在如果在订单宝中设置了过期时间管理，相应的需要设置商品过期时间 格式：yyyy-MM-dd，例如2019-01-01
 */
class RmaSku extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'sku_code'                          => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'plan_qty'                          => [self::PARAM_TYPE_NUMBER, self::PARAM_REQUIRED],
			'sku_photograph_service'            => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'sku_photograph_service_type'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'replace_product_code_service'      => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'replace_product_code_service_type' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'new_product_code'                  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'expired_date'                      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

