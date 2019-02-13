<?php

namespace express_4px\oms\fu_wms_inbound_create\v100\data_type;

use express_4px\oms\data_type\inbound\InsureServicesEnum;
use express_4px\oms\data_type\inbound\SignatureServiceEnum;
use express_4px\oms\OmsParameter;

/**
 * @property String logistics_product_code  物流产品代码。详细参考基础数据-获取物流产品代码
 * @property String signature_service   签名服务 可选值：Y(选择签名服务)；N(不选择签名服务)；默认为N。
 * @property String insure_services 保险服务
 */
class LogisticsServiceInfo extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'logistics_product_code' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'signature_service'      => [self::PARAM_TYPE_ENUM, self::PARAM_OPTIONAL,SignatureServiceEnum::class],
			'insure_services'        => [self::PARAM_TYPE_ENUM, self::PARAM_OPTIONAL,InsureServicesEnum::class],
		));
	}
}

