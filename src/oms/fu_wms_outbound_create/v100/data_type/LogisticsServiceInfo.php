<?php

namespace express_4px\oms\fu_wms_outbound_create\v100\data_type;

use express_4px\oms\data_type\outbound\ReturnServiceEnum;
use express_4px\oms\data_type\outbound\SignatureServiceEnum;
use express_4px\oms\OmsParameter;

/**
 * @property String logistics_product_code  物流产品代码。详细参考基础数据-获取物流产品代码
 * @property String return_service   退件服务。 可选值：Y(选择退件服务)；N(不选择退件服务)；默认为N。
 * @property String signature_service 签名服务。 可选值：Y(选择签名服务)；N(不选择签名服务)；默认为N。
 */
class LogisticsServiceInfo extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'logistics_product_code' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'return_service'         => [self::PARAM_TYPE_ENUM, self::PARAM_OPTIONAL, ReturnServiceEnum::class],
			'signature_service'      => [self::PARAM_TYPE_ENUM, self::PARAM_OPTIONAL, SignatureServiceEnum::class],
		));
	}
}

