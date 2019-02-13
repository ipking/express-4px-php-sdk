<?php

namespace express_4px\core;


class Response extends DataProto{
	const RESULT_SUCCESS = '1';
	const RESULT_FAIL = '0';
	
	public $result;
	public $errors;
	public $msg;
	
	const PARAM_REQUIRED = 'required';
	const PARAM_OPTIONAL = 'optional';
	
	const PARAM_TYPE_NUM = 'num';
	const PARAM_TYPE_STRING = 'string';
	const PARAM_TYPE_OBJECT = 'object';
	const PARAM_TYPE_ARRAY = 'array';
	const PARAM_TYPE_LIST = self::PARAM_TYPE_ARRAY;
	
	private $defines;
	
	public function __construct($result,$errors, $message = '', $data = array(), $defines = array()){
		$this->result = $result;
		$this->errors = $errors;
		$this->msg = $message;
		$this->defines = $defines;
		if(empty($data)){
			return;
		}
		foreach($defines as $field => list($type, $required, $ext_type)){
			switch($type){
				case self::PARAM_TYPE_ARRAY:
					$items = [];
					switch($ext_type){
						case self::PARAM_TYPE_NUM:
						case self::PARAM_TYPE_STRING:
							$items = (array)$data[$field];
							break;

						default:
							foreach($data[$field] ?:[] as $d){
								$items[] = new $ext_type($d);
							}
							break;
					}
					$this->addData($field, $items);
					break;
				
				case self::PARAM_TYPE_OBJECT:
					$this->addData($field, new $ext_type($data[$field]));
					break;
				
				default:
					$this->addData($field, $data[$field]);
			}
		}
	}
	
	/**
	 * 输出响应
	 * @return string
	 */
	public function __toString(){
		return json_encode(array(
			'result' => $this->result,
			'errors' => $this->errors,
			'msg'    => $this->msg,
			'data'   => $this->getData()
		));
	}
	
	/**
	 * 界定成功状态
	 * @return mixed
	 */
	public function isSuccess(){
		return $this->result == self::RESULT_SUCCESS;
	}
	
	public function isFailure(){
		return !$this->isSuccess();
	}
}