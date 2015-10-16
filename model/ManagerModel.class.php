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
         return parent::select(array('user','level','login_count','last_ip','last_time'),array('limit'=>$this->_limit));
     }
     public function total(){
         return parent::total();
     }
     public  function  add($_request,$b=0){
         $_addData = $_request->add($this->_fields);
         $_addData['pass'] = sha1($_addData['pass']);
         $_addData['last_ip'] = Tool::getIP();
         $_addData['reg_time'] = Tool::getDate();
         return parent::add($_addData, $this->_tables);
     }
     public  function  isOne($_where,$b=0) {
         return parent::isOne($_where,$this->_tables);
     }

 }