<?php

/**
 * alias for debug
 * @param mixed $vars 要输出的变量
 * @param null $var1
 * @return string
 *
 */
if(!function_exists('dump')) {
	function dump($vars, $var1 = null)
	{
		$params = func_get_args();
		$tmp = $params;
		$cli = PHP_SAPI == 'cli';

		//normal debug
		if (count($params) > 0) {
			$act = array_pop($tmp) === 1;
			$params = $act ? array_slice($params, 0, -1) : $params;
			echo $cli ? "\n" : '<pre style="font-size:12px; background-color:#eee; color:green; margin:0 0 10px 0; padding:0.5em; border-bottom:1px solid gray; width:100%; left:0; top:0; text-transform: none;">' . "\n";
			$comma = '';
			foreach ($params as $var) {
				echo $comma;
				var_dump($var);
				$trace = debug_backtrace();
				echo "File:" . ($cli ? '' : '<b style="color:gray">') . $trace[0]['file'] . ($cli ? '' : '</b><br/>') . " Line: " . ($cli ? '' : '<b>') . $trace[0]['line'] . ($cli ? "\n" : '"</b><br/>"');
				$comma = $cli ? "\n" : '<div style="height:0; line-height:1px; font-size:1px; border-bottom:1px solid white; border-top:1px solid #ccc; margin:10px 0"></div>';
			}
			echo $cli ? '' : '</pre>';
			if ($act) {
				die();
			}
		} //for tick debug
		else {
			if (++$GLOBALS['ONLY_FOR_DEBUG_INDEX'] >= $GLOBALS['TICK_DEBUG_START_INDEX']) {
				$trace = debug_backtrace();
				echo '<pre style="display:block; font-size:12px; color:green; padding:2px 0; border-bottom:1px solid #ddd; clear:both;">' . '[' . ($GLOBALS['ONLY_FOR_DEBUG_INDEX']) . '] <b>' . $trace[0]['file'] . '</b> line:' . $trace[0]['line'] . '</pre>';
			}
		}
	}
}