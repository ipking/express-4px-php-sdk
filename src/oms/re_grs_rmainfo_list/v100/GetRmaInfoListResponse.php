<?php
/**
 * 批量查询退货单信息的响应
 */

namespace express_4px\oms\re_grs_rmainfo_list\v100;

use express_4px\oms\OmsErrorMsg;
use express_4px\oms\OmsResponse;
use express_4px\oms\re_grs_rmainfo_list\v100\data_type\RmaInfo;

/**
 * @property RmaInfo[] list  入库委托集合信息
 * @property string page_no 页码
 * @property string page_size   每页记录数
 * @property string total   总记录数
 */
class GetRmaInfoListResponse extends OmsResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = OmsErrorMsg::getMsg(GetRmaInfoListErrorCode::$codeMessageMap,$errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'list'    => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL, RmaInfo::class],
			'pages'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'pageNum' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'total'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
