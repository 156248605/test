<?php
class Action {
    protected  $_tpl  = null;
    protected  $_model= null;
    protected  $_check = null;
    protected function  __construct(&$_model=null,&$_check = null){
             $this->_tpl=TPL::getinstance();
             $this->_model =$_model;
             $this->_check = $_check;
    }
    public function  run(){
        $_m=isset($_GET['m'])?$_GET['m']:'index';
        method_exists($this, $_m)?eval('$this->'.$_m.'();') : exit($_m.'方法不存在！');
    }
}