<?php
/**
 * 获取错误信息  统一处理错误信息
 */
namespace express_4px\oms;


class OmsErrorMsg {
	
	private static function handleErrorList($errors){
		$list = [];
		foreach($errors?:[] as $error){
			$tmp = [];
			foreach($error as $key=>$value){
				$t_key = strtolower($key);
				$t_key = str_replace('error','error_',$t_key);
				$t_key = str_replace('__','_',$t_key);
				$tmp[$t_key] = $value;
			}
			$list[]=$tmp;
		}
		!$list and $list = $errors;
		return $list;
	}
	
	public static function getMsg($code_message,&$errors){
		$msg = '';
		if(!$errors){
			return $msg;
		}
		$errors = self::handleErrorList($errors);
		$msg_array = [];
		foreach($errors as $error){
			$tmp_msg = '';
			$error_code = strtoupper($error['error_code']);
			$error_data = $error['error_data'];
			$error_msg = strtoupper($error['error_msg']);
			!empty($code_message[$error_code]) && ($tmp_msg = $code_message[$error_code].($error_data?':'.$error_data:''));
			
			if($error_code != $error_msg){
				$tmp_msg = $error_msg.($error_data?':'.$error_data:'');
			}
			
			$tmp_msg and $msg_array[] = $tmp_msg;
		}
		
		return $msg_array?join('丨',$msg_array):'';
	}
}