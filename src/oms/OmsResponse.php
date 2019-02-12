<?php
/**
 * 响应
 */
namespace express_4px\oms;

use express_4px\core\Response;
use express_4px\core\ResponseCode;


class OmsResponse extends Response {
	public function __construct($result,$errors, $message, $data, $define){
		$code_message = ResponseCode::$codeMessageMap;
		!empty($code_message[$errors['error_code']]) && ($message = $code_message[$errors['error_code']]);

		parent::__construct($result,$errors, $message, $data, $define);
	}
}