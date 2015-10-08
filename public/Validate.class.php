<?php
//验证类
class Validate {
	
	//判断是否是数组
	static public function isArray($_array) {
		return is_array($_array) ? true : false;
	}
	
	//判断数组是否有元素
	static public function isNullArray($_array) {
		return count($_array) == 0 ? true : false;
	}
	
	//判断数组是否存在此元素
	static public function inArray($_data, $_array) {
		return in_array($_data, $_array) ? true : false;
	}
	//判断字符串是否为空
	static public function isNullString($_string) {
		return empty($_string) ? true : false;
	}
}
