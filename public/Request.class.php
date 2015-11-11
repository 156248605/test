<?php
//HTTP请求类
class Request {
	//用于存放实例化的对象
	static private $_instance = null;
	//验证对象
	private  $_check = null;
    private  $_tpl = null;
    //实体对象
    private $_model = null;
	
	//公共静态方法获取实例化的对象
	static public function getInstance(&$_model,&$_check) {
		if (!(self::$_instance instanceof self)) {
			self::$_instance = new self();
            self::$_instance->_model = $_model;
			self::$_instance->_check = $_check;
            self::$_instance->_tpl = TPL::getInstance();
		}
		return self::$_instance;
	}
	
	//私有克隆
	private function __clone() {}
	
	//私有构造
	private function __construct() {
        Tool::setRequest();
    }

	//处理新增数据请求
	public function add(array $_fields) {
		$_addData = array();
		if (Validate::isArray($_POST) && !Validate::isNullArray($_POST)) {
        $_addData = $this->selectData($_POST,$_fields);
    }
		return $_addData;
 	}
    //处理修改数据请求
    public function update(array $_fields) {
        $_updateData = array();
        if (Validate::isArray($_POST) && !Validate::isNullArray($_POST)) {
            if (!$this->_check->updateCheck($this->_model, $_POST)) $this->check();
            $_updateData = $this->selectData($_POST, $_fields);
        }
        return $_updateData;
    }
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

    //筛选数据
    private  function  selectData($_requestData,$_fields) {
        $_selectData = array();
        foreach ($_requestData as $_key=>$_value){
            if(Validate::inArray($_key,$_fields)){
                $_selectData[$_key] = $_value;
            }
        }
        return $_selectData;
    }

}
