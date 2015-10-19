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
	private function __construct() {}

	//处理新增数据请求
	public function add($_fields) {
		$_addData = array();
		if (Validate::isArray($_POST) && !Validate::isNullArray($_POST)) {
			if (!$this->_check->check($this->_model)) {
                $this->_tpl->assign('message', $this->_check->getMessage());
                $this->_tpl->assign('prev', Tool::getPrevPage());
                $this->_tpl->display(SMARTY_ADMIN.'public/error.html');
				exit();
			}
			foreach ($_POST as $_key=>$_value) {
				if (Validate::inArray($_key, $_fields)) {
					$_addData[$_key] = $_value;
				}
			}
		}
		return $_addData;
 	}
    //处理删除数据请求
    public  function delete($_fields){
        $_deleteData = array();
        if(Validate::isArray($_GET) && !Validate::isNullArray($_GET)){
            $_deleteData = $this->selectData($_GET,$_fields);
            if (!$this->_check->deleteCheck($this->_model, $_deleteData)) $this->check();
        }
            return $_deleteData;


    }
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
    private  function  check() {
        $this->_tpl->assign('message', $this->_check->getMessage());
        $this->_tpl->assign('prev', Tool::getPrevPage());
        $this->_tpl->display(SMARTY_ADMIN.'public/error.html');
        exit();


    }

}
