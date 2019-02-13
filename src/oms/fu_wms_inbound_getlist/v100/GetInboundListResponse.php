<?php
/**
 * 批量查询入库委托的响应
 */

namespace express_4px\oms\fu_wms_inbound_getlist\v100;
use express_4px\oms\fu_wms_inbound_getlist\v100\data_type\InboundConsignmentList;
use express_4px\oms\OmsErrorCode;
use express_4px\oms\OmsResponse;

/**
 * @property InboundConsignmentList[] data  入库委托集合信息
 * @property string page_no 页码
 * @property string page_size   每页记录数
 * @property string total   总记录数
 */
class GetInboundListResponse extends OmsResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = OmsErrorCode::getMsg(GetInboundListErrorCode::$codeMessageMap,$errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'data'      => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL, InboundConsignmentList::class],
			'page_no'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'page_size' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'total'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
