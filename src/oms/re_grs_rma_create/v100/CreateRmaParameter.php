<?php
/**
 * 创建退货预报单的参数
 */

namespace express_4px\oms\re_grs_rma_create\v100;

use express_4px\oms\OmsParameter;
use express_4px\oms\re_grs_rma_create\v100\data_type\RmaSku;

/**
 * @property String user_id  用户ID
 * @property String warehouse_code  GRS收货仓库代码，每个仓库的代码为固定值，详细可见于表《仓库服务产品说明》
 * @property String services_product_code   GRS仓库提供的服务产品代码，支持的服务产品详细可见于表《仓库服务产品说明》
 * @property String received_shipping_no    客户退到grs收货仓库商品的物流跟踪单号
 * @property String ref_no  客户自定义的预报参考号，通常是客户的内部单号如：客户内部的rma或调拨单等单号
 * @property String package_photograph_service  包裹（一票货）是否需要拍照服务： Y：需要，N：不需要（预留，目前暂无服务）
 * @property String package_photograph_service_type 包裹拍照服务的类型，当选择需要对包裹拍照时必填（预留，目前暂无此项服务）
 * @property String weight  客户退到grs收货仓库商品的重量，单位：千克(Kg)，精确到3位小数
 * @property String remark  客户备注
 * @property RmaSku[] lstsku
 */
class CreateRmaParameter extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'user_id'                         => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'warehouse_code'                  => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'services_product_code'           => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'received_shipping_no'            => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'ref_no'                          => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'package_photograph_service'      => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'package_photograph_service_type' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'weight'                          => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'remark'                          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'lstsku'                          => [self::PARAM_TYPE_LIST, self::PARAM_REQUIRED, RmaSku::class],
		));
	}
}