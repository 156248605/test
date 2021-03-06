<?php
//Model基类
class Model extends DB {
    protected $_db=null;
    protected $_fields = array();
    protected $_tables = array();
    protected $_R = array();
    protected $_check = null;
    protected $_request = null;
    protected $_limit = '';
    protected  function  __construct(){
        $this->_db = parent::getInstance();
    }
    protected  function  add($_addData,$b=0){
        return $this->_db->add($this->_tables,$_addData);
    }
    protected  function update(array $_param,array $_updateData,array $b=array()){
        return $this->_db->update($this->_tables,$_param,$_updateData);
    }
    protected  function  delete($b=0,array $_param){
         return $this->_db->delete($this->_tables,$_param);
    }
    public function isOne($b=0,array $_param) {
      return  $this->_db->isOne($this->_tables,$_param);
    }
    protected  function  select(array $_field, array $_param = array(),array $b=array()){
        return $this->_db->select($this->_tables,$_field,$_param);
    }
    protected function total($b=0) {
        return $this->_db->total($this->_tables);
    }
    protected function  nextId($b=0){
        return $this->_db->nextId($this->_tables);


    }
    protected  function  getRequest(){
        return Request::getInstance($this,$this->_check);

    }
    public  function setLimit($_limit){
        $this->_limit = $_limit;
    }
}