<?php
/**
 * 请求参数
 */

namespace express_4px\oms;
use express_4px\core\Parameter;

class OmsParameter extends Parameter {
	public function __construct($data, $defines = []) {
		parent::__construct($data, $defines);
	}
}