<?php
//HTTP请求类
class Request {
	//用于存放实例化的对象
	static private $_instance = null;
	
	//公共静态方法获取实例化的对象
	static public function getInstance() {
		if (!(self::$_instance instanceof self)) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	
	//私有克隆
	private function __clone() {}
	
	//私有构造
	private function __construct() {}
	
	//处理新增数据请求
	public function add($_fields) {
		$_addData = array();
		if (Validate::isArray($_POST) && !Validate::isNullArray($_POST)) {
			foreach ($_POST as $_key=>$_value) {
				if (Validate::inArray($_key, $_fields)) {
					$_addData[$_key] = $_value;
				}
			}
		}
		return $_addData;
 	}
}
