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
    protected  function  page($_total,$_pagesize = PAGE_SIZE){
        $_page = new Page($_total,$_pagesize);
        $this->_model->setLimit($_page->getLimit());
        $this->_tpl->assign('page',$_page->showpage());
        $this->_tpl->assign('num',($_page->getPage()-1)*$_pagesize);
    }
    public function  run(){
        $_m=isset($_GET['m'])?$_GET['m']:'index';
        method_exists($this, $_m)?eval('$this->'.$_m.'();') : exit($_m.'方法不存在！');
    }
}