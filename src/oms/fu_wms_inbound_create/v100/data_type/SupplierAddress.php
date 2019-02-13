<?php

namespace express_4px\oms\fu_wms_inbound_create\v100\data_type;

use express_4px\oms\OmsParameter;

/**
 * @property String country 国家;国家二字码，详细参考国际二字码。如：CN（中国）
 * @property String state   州/省 ; 如 ：广东省
 * @property String city    城市 ; 如 ：深圳市
 * @property String district    区/县 ; 如 ：宝安区
 * @property String post_code   邮编 ; 如 ：518000
 * @property String street  街道/详细地址 ; 如：西乡街道西乡宝源路
 * @property String house_number    门牌号; 如 ：138
 * @property String company 公司; 如 ：4PX
 * @property String contack_name    联系人; 如 ：阿斯顿
 * @property String phone   手机/电话; 如 ：0755-29771100
 * @property String pickup_time 上门提货的时间。 *注：时间格式：传入时间值需要转换为long类型格式。
 * @property String plan_arrive_time    预计送货到仓时间。*注：时间格式：传入时间值需要转换为long类型格式。
 */
class SupplierAddress extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'country'                => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'state'                  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'city'                   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'district'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'post_code'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'street'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'house_number'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'company'                => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'contack_name'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'phone'                  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'pickup_time'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'plan_arrive_time'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

