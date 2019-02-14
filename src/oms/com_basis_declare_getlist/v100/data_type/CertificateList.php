<?php

namespace express_4px\oms\com_basis_declare_getlist\v100\data_type;

use express_4px\oms\data_type\basis_declare\CertificateTypeEnum;
use express_4px\oms\OmsParameter;

/**
 * @property String certificate_type    申报产品证书类型。
 * @property String certificate_url    申报产品清关资料URL。上传文件资料限定格式，文件格式可选值：rar、zip、Excel(xls和xlsx）、word文档(doc和docx)、pdf。
 * @property String expiration_date 证书失效日期。由4PX审核后填写。
 * @property String is_long_term    证书是否长期有效。如：Y（是）；N（否）。由4PX审核后填写。
 */
class CertificateList extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'certificate_type' => [self::PARAM_TYPE_ENUM, self::PARAM_OPTIONAL, CertificateTypeEnum::class],
			'certificate_url'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'expiration_date'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'is_long_term'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

