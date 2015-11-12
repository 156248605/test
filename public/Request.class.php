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
	private function __construct() {
        Tool::setRequest();
    }

	//获取新增和修改的字段
	public function filter(array $_fields) {
		$_selectData = array();
		if (Validate::isArray($_POST) && !Validate::isNullArray($_POST)) {
            foreach ($_POST as $_key=>$_value){
                if(Validate::inArray($_key,$_fields)){
                    $_selectData[$_key] = $_value;
                }
            }
    }
		return $_selectData;
 	}
  /*  //处理修改数据请求
    public function update(array $_fields) {
        $_updateData = array();
        if (Validate::isArray($_POST) && !Validate::isNullArray($_POST)) {
            $_updateData = $this->selectData($_POST, $_fields);
        }
        return $_updateData;
    }*/
    //获取参数处理
    public  function getParam(Array $_param){
        $_getParam = array();
         foreach ($_param as $_key=>$_value){
             if($_key=='in')$_value = str_replace(',', "','", $_value);
             $_getParam[]=$_value;
         }
           return $_getParam;
    }
  /*  //处理一条数据
    public  function  one(array $_param){
        return $this->_check->oneCheck($this->_model, $_param);
    }*/
 /*   //处理登录数据请求
    public function login($_param) {
        if (Validate::isArray($_POST) && !Validate::isNullArray($_POST)) {
            if (!$this->_check->loginCheck($this->_model, $_POST,$_param)) $this->check();
        }
        return true;
    }*/

 /*   //筛选数据
    private  function  selectData($_requestData,$_fields) {
        $_selectData = array();
        foreach ($_requestData as $_key=>$_value){
            if(Validate::inArray($_key,$_fields)){
                $_selectData[$_key] = $_value;
            }
        }
        return $_selectData;
    }*/

}
