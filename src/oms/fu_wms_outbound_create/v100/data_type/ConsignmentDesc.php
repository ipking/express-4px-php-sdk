<?php

namespace express_4px\oms\fu_wms_outbound_create\v100\data_type;

use express_4px\oms\OmsParameter;

/**
 * @property String country 收件人所在国家;国家二字码，详细参考国际二字码
 * @property String state   收件人所在州/省
 * @property String city    收件人所在城市
 * @property String district    收件人所在区/县
 * @property String post_code   收件人的邮编
 * @property String street  收件人所在街道/详细地址
 * @property String house_number    收件人的门牌号
 * @property String company 收件人的公司
 * @property String last_name   收件人姓。
 * @property String first_name  收件人名。
 * @property String phone   收件人的电话号码/手机号
 * @property String email   收件人的Email;
 */
class ConsignmentDesc extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'country'                => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'state'                  => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'city'                   => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'district'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'post_code'              => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'street'                 => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'house_number'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'company'                => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'last_name'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'first_name'             => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'phone'                  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'email'                  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

