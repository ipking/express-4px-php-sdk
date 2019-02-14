<?php

namespace express_4px\oms\data_type\basis_declare;

/**
 * 国家申报状态。如：
 * N（草稿）；
 * S（已提交）；
 * C（已通过）；
 * E（异常）
 */

class DeclareCountryStatusEnum
{
	const DECLARE_COUNTRY_STATUS_N = 'N';
	const DECLARE_COUNTRY_STATUS_S = 'S';
	const DECLARE_COUNTRY_STATUS_C = 'C';
	const DECLARE_COUNTRY_STATUS_E = 'E';
	
	static $map = array(
		self::DECLARE_COUNTRY_STATUS_N     => '草稿',
		self::DECLARE_COUNTRY_STATUS_S     => '已提交',
		self::DECLARE_COUNTRY_STATUS_C     => '已通过',
		self::DECLARE_COUNTRY_STATUS_E     => '异常',
	);
}