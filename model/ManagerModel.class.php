<?php
 class ManagerModel extends  Model{
     public  $_setcheck=null;
     public function  __construct(){
         $this->_setcheck=Factory::setCheck();
         $this->_fields = array('id','user','pass','level','login_count','last_ip','last_time','reg_time');
         $this->_tables = array(DB_FREFIX.'manager');
         parent::__construct($this,$this->_setcheck,$this->_tables);
     }
     public  function  findAll(){
         return parent::select(array('id','user','level','login_count','last_ip','last_time'),array('limit'=>$this->_limit));
     }
     public function total(){
         return parent::total();
     }
     public  function  add($_request){
         $_addData = $_request->add($this->_fields);
         $_addData['pass'] = sha1($_addData['pass']);
         $_addData['last_ip'] = Tool::getIP();
         $_addData['reg_time'] = Tool::getDate();
         return parent::add($_addData);
     }
     public  function  delete($b=0){
         $_deleteData = $this->_request->delete($this->_fields);
         return parent::delete($_deleteData);


     }
     public  function  isOne($_where) {
         return parent::isOne($_where);
     }

 }