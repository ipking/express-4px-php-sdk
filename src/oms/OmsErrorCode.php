<?php
/**
 * 获取错误信息
 */
namespace express_4px\oms;


class OmsErrorCode {
	
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
		$error_code = strtoupper($errors[0]['error_code']);
		$error_data = $errors[0]['error_data'];
		$error_msg = $errors[0]['error_msg'];
		!empty($code_message[$error_code]) && ($msg = $code_message[$error_code].($error_data?':'.$error_data:''));
		
		if($error_code != $error_msg){
			$msg = $error_msg.($error_data?':'.$error_data:'');
		}
		return $msg;
	}
}