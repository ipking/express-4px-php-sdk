<?php

namespace express_4px\oms\tr_order_tracking_get\v100\data_type;


use express_4px\oms\OmsParameter;

/**
 * @property String businessLinkCode    轨迹代码，详见 基础数据字典
 * @property String occurDatetime   轨迹发生时间
 * @property String occurLocation   轨迹发生地
 * @property String trackingContent 轨迹描述
 * @property String destinationCountry  目的地国家
 */
class Tracking extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'businessLinkCode'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'occurDatetime'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'occurLocation'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'trackingContent'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'destinationCountry' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

