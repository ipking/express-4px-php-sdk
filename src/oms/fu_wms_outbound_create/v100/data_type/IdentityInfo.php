<?php

namespace express_4px\oms\fu_wms_outbound_create\v100\data_type;

use express_4px\oms\OmsParameter;

/**
 * @property String id_type 收件人证件类型
 * @property String id_card 收件人证件号
 * @property String id_front_pic    收件人证件正面照。*注：文件需要转换成Base64编码格式，只支持Base64字符串格式。
 * @property String id_back_pic 收件人证件背面照。*注：文件需要转换成Base64编码格式，只支持Base64字符串格式。
 */
class IdentityInfo extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'id_type'                => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'id_card'                => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'id_front_pic'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'id_back_pic'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

