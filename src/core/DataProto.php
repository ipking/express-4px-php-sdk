<?php

namespace express_4px\core;

use ArrayAccess;
use Iterator;

abstract class DataProto implements Iterator, ArrayAccess, \JsonSerializable {
	protected $data;
	
	/**
	 * set data
	 * @param $data
	 */
	public function setData($data){
		$this->data = $data;
	}
	
	/**
	 * @param $key
	 * @param $val
	 */
	public function addData($key, $val){
		$this->data[$key] = $val;
	}
	
	/**
	 * get data
	 * @param null $key
	 * @return mixed
	 */
	public function getData($key = null){
		if(!$key){
			return $this->data;
		} else{
			return $this->data[$key];
		}
	}
	
	/**
	 * setter
	 * @param $name
	 * @param $value
	 */
	public function __set($name, $value){
		$this->data[$name] = $value;
	}
	
	public function __get($name){
		return $this->data[$name];
	}
	
	/**
	 * convert to array
	 * @return array
	 */
	public function getDataAsArray(){
		$tmp = [];
		foreach($this->data?:[] as $k=>$item){
			if($item instanceof Parameter){
				$tmp[$k] = $item->getDataAsArray();
			}
			else if(is_array($item)){
				$sub_tmp = [];
				foreach($item as $sub_k=>$sub_item){
					if($sub_item instanceof Parameter){
						$data = $sub_item->getDataAsArray();
						$sub_tmp[$sub_k] = $data;
					} else {
						$sub_tmp[$sub_k] = $sub_item;
					}
				}
				$tmp[$k] = $sub_tmp;
			} else {
				$tmp[$k] = $item;
			}
		}
		return $tmp;
	}
	
	/**
	 * 反序列化
	 * @param $str
	 * @return $this
	 */
	public function setDataFromJSON($str){
		if($str){
			$d = json_decode($str, true);
			$this->setData($d);
		}
		return $this;
	}
	
	public function jsonSerialize(){
		return ($this->data);
	}
	
	final public function rewind() {
		reset($this->data);
	}
	
	final public function current() {
		$var = current($this->data);
		return $var;
	}
	
	final public function key() {
		$var = key($this->data);
		return $var;
	}
	
	final public function next() {
		$var = next($this->data);
		return $var;
	}
	
	final public function valid() {
		$var = $this->current() !== false;
		return $var;
	}
	
	final public function offsetSet($offset, $value) {
		if (is_null($offset)) {
			$this->data[] = $value;
		} else {
			$this->data[$offset] = $value;
		}
	}
	
	final public function offsetExists($offset) {
		return isset($this->data[$offset]);
	}
	
	final public function offsetUnset($offset) {
		unset($this->data[$offset]);
	}
	
	final public function offsetGet($offset) {
		return isset($this->data[$offset]) ? $this->data[$offset] : null;
	}
}