<?php
//Model基类
class Model extends DB {
    protected $_db=null;
    protected $_fields = array();
    protected $_tables = array();
    protected $_check = null;
    protected $_request = null;
    protected $_limit = '';
    protected  function  __construct(){
        $this->_db = parent::getInstance($this->_tables);
        $this->_check = Factory::setCheck();
        $this->_request = Request::getInstance($this,$this->_check);
    }
    protected  function  add($_addData){
        return $this->_db->add($_addData);
    }
    protected  function update($_oneData,$_updateData){
        return $this->_db->update($_oneData,$_updateData);
    }
    protected  function  delete($_deleteData){
         return $this->_db->delete($_deleteData);
    }
    protected function isOne($_where) {
        return $this->_db->isOne($_where);
    }
    protected  function  select($_field, $_param = array()){
        return $this->_db->select($_field,$_param);
    }
    protected function total() {
        return $this->_db->total();
    }
    public  function setLimit($_limit){
        $this->_limit = $_limit;
    }
}