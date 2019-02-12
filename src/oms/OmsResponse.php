<?php
/**
 * 响应
 */
namespace express_4px\oms;

use express_4px\core\Response;
use express_4px\core\ResponseCode;


class OmsResponse extends Response {
	public function __construct($code, $message, $data, $define){
		$code_message = ResponseCode::$codeMessageMap;
		!empty($code_message[$code]) && ($message = $code_message[$code]);

		parent::__construct($code, $message, $data, $define);
	}
}