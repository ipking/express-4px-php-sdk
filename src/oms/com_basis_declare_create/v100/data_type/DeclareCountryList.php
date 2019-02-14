<?php

namespace express_4px\oms\com_basis_declare_create\v100\data_type;

use express_4px\oms\data_type\basis_declare\DeclareTypeEnum;
use express_4px\oms\data_type\common\CountryEnum;
use express_4px\oms\data_type\common\CurrencyEnum;
use express_4px\oms\OmsParameter;

/**
 * @property String declare_type    清关类型。可选值：I(进口)
 * @property String declare_country 清关国家。国家二字码，详细参考国际二字码。如：CN（中国）
 * @property String declare_unit_price  申报产品单价，精确到2位小数。如：12341.33
 * @property String currency    申报币别。采用国际ISO标准。可选值：USD(美元);CNY(人民币)。如：USD
 * @property String brand   申报产品品牌
 * @property CertificateList[] certificate_list    申报产品清关资料URL集合。证书资料支持多个。
 */
class DeclareCountryList extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'declare_type'         => [self::PARAM_TYPE_ENUM, self::PARAM_REQUIRED,DeclareTypeEnum::class],
			'declare_country'      => [self::PARAM_TYPE_ENUM, self::PARAM_REQUIRED,CountryEnum::class],
			'declare_unit_price'   => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'currency'             => [self::PARAM_TYPE_ENUM, self::PARAM_REQUIRED,CurrencyEnum::class],
			'brand'                => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'certificate_list'     => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL,CertificateList::class],
		));
	}
}

