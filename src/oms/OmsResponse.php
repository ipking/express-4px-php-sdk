<?php
/**
 * 响应
 */
namespace express_4px\oms;

use express_4px\core\Response;


class OmsResponse extends Response {
	public function __construct($result,$errors, $message, $data, $define){
		parent::__construct($result,$errors, $message, $data, $define);
	}
}