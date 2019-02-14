<?php

namespace express_4px\core;

use express_4px\exception\ParamValidateException;

class Parameter extends DataProto{
	const PARAM_REQUIRED = 'required';
	const PARAM_OPTIONAL = 'optional';
	
	const PARAM_TYPE_NUMBER = 'number';
	const PARAM_TYPE_STRING = 'string';
	const PARAM_TYPE_OBJECT = 'object';
	const PARAM_TYPE_ARRAY = 'array';
	const PARAM_TYPE_LIST = self::PARAM_TYPE_ARRAY;
	const PARAM_TYPE_ENUM = 'enum';

	private $defines;
	
	public function __construct($data = array(), $defines = array()){
		$this->defines = $defines;
		
		foreach($defines as $field=>list($type, $required, $ext_type)){
			switch($type){
				case self::PARAM_TYPE_ARRAY:
					$items = [];
					switch($ext_type){
						case self::PARAM_TYPE_NUMBER:
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
	
	public function defineAll($defines){
		$this->defines = array_merge_recursive($this->defines, $defines);
	}
	
	public function define($field, $define){
		$this->defines[$field] = $define;
	}
	
	/**
	 * 校验全部参数
	 * @throws ParamValidateException
	 */
	public function validateAll(){
		foreach($this->defines as $field => $define){
			$this->validate($this->defines[$field], $this->data[$field], $field);
		}
	}
	
	/**
	 * @param $define
	 * @param $value
	 * @param $field
	 * @throws \Exception
	 * @throws ParamValidateException
	 */
	public function validate($define, $value, $field){
		list($type, $required, $ext_define_type) = $define;
		
		if($required == self::PARAM_REQUIRED && (!isset($value) || $value==='')){
			throw new ParamValidateException($field.' parameter required');
		}
		if($required == self::PARAM_REQUIRED && in_array($type, [self::PARAM_TYPE_NUMBER, self::PARAM_TYPE_STRING]) && strlen($value)<0){
			throw new ParamValidateException($field.'('.$value.') : scala parameters required');
		}
		if(!isset($value)){
			return;
		}
		switch($type){
			case self::PARAM_TYPE_NUMBER:
				if(!is_numeric($value)){
					throw new ParamValidateException('parameter ['.$field.'] type error, <number> required, <'.gettype($value).'> given');
				}
				break;
				
			case self::PARAM_TYPE_STRING:
				if(!is_string($value)){
					throw new ParamValidateException('parameter ['.$field.'] type error, <string> required, <'.gettype($value).'> given');
				}
				break;
				
			case self::PARAM_TYPE_ARRAY:
				if($value && !is_array($value)){
					throw new ParamValidateException('array parameter type error');
				}
				switch($ext_define_type){
					case self::PARAM_TYPE_NUMBER:
					case self::PARAM_TYPE_STRING:
						foreach($value as $k=>$val){
							$this->validate([$ext_define_type, $required], $val, $k);
						}
						break 2;
					
					default:
						if(!is_subclass_of($ext_define_type, Parameter::class)){
							throw new \Exception('field define type error, must inherit from Parameter');
						}
						$tmp = new $ext_define_type();
						/** @var Parameter $tmp */
						$defines = $tmp->getDefines();
						foreach($defines as $field => $define){
							foreach($value as $val){
								$this->validate($define, $val[$field], $field);
							}
						}
						break 2;
				}
				break;
			case self::PARAM_TYPE_ENUM:
				$refClass = new \ReflectionClass($ext_define_type);
				$enumValues = $refClass->getConstants();

				if ($required == self::PARAM_REQUIRED && !in_array($value, $enumValues)) {
					throw new ParamValidateException('parameter ['.$field.'] is not a valid enum value');
				}
				break;
		}
		return;
	}
	
	/**
	 * getter
	 * @param $name
	 * @return mixed|null
	 */
	public function __get($name){
		$this->validate($this->defines[$name], $this->data[$name], $name);
		return $this->data[$name];
	}
	
	public function setDataByKey($key, $val){
		$this->data[$key] = $val;
	}
	
	/**
	 * @return array
	 */
	public function getDefines(){
		return $this->defines;
	}
}