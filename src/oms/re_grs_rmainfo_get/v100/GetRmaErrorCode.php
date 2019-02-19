<?php

namespace express_4px\oms\re_grs_rmainfo_get\v100;

class GetRmaErrorCode{
	const CODE_2001 = '2001';
	const CODE_2002 = '2002';
	const CODE_22001 = '22001';
	
	static $codeMessageMap = array(
		self::CODE_2001  => '客户代码：{0}校验未通过，填写帐号对应的客户代码',
		self::CODE_2002  => '退货单：{0}不存在，请确认退货单是否正确或在GRS系统中是否存在',
		self::CODE_22001 => '退货单：{0}暂无收货信息',
	);
	
}