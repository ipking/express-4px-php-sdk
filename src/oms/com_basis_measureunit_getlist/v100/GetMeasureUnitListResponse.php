<?php
/**
 * 查询计量单位的响应
 */

namespace express_4px\oms\com_basis_measureunit_getlist\v100;
use express_4px\oms\com_basis_measureunit_getlist\v100\data_type\MeasureUnit;
use express_4px\oms\OmsErrorMsg;
use express_4px\oms\OmsResponse;

/**
 * @property MeasureUnit[] measure_unit_list    计量单位
 */
class GetMeasureUnitListResponse extends OmsResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = OmsErrorMsg::getMsg(GetMeasureUnitListCode::$codeMessageMap,$errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'measure_unit_list'    => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL,MeasureUnit::class],
		));
	}
}
