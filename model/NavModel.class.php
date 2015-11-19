<?php
/**
 * Created by PhpStorm.
 * User: hugo.zhao
 * Date: 2015/10/24
 * Time: 16:34
 */
class NavModel extends  Model
{
    public function  __construct()
    {
        parent::__construct();
        $this->_fields = array('id', 'name', 'info','sort','sid');
        $this->_tables = array(DB_FREFIX . 'nav');
        $this->_check = new NavCheck();
        list(
            $this->_R['id'],
            $this->_R['sid'],
            $this->_R['name']
            ) = $this->getRequest()->getParam(array(
            isset($_GET['id']) ? $_GET['id'] : null,
            isset($_GET['sid']) ? $_GET['sid'] : 0,
            isset($_POST['name']) ? $_POST['name'] : null
        ));
    }
    public function add($_addData,$b=0) {
        $_where = array("name='{$this->_R['name']}'");
        if(!$this->_check->addCheck($this,$_where))$this->_check->error();
        $_addData = $this->getRequest()->filter($this->_fields);
        $_addData['sort'] = $this->nextId();
        return parent::add($_addData);
    }
    public function  findFrontNav(){
          $_where = array("id='{$this->_R['id']}'");
          if(!$this->_check->oneCheck($this,$_where))$this->_check->error('./');
         //$_childNav = $_resultNav=array();
          $_allNav=parent::select(array('id','name','sid'));
          return Tree::getInstance()->getTree($_allNav,$this->_R['id']);
    }
    public function findFrontTenNav(){
       return parent::select(array('id','name'),
              array('where'=>array('sid=0'),'limit'=>'10','order'=>'sort ASC'));
    }
    public  function  findAll(){
        return parent::select(array('id','name','info','sort','sid'),array('where'=>array("sid='{$this->_R['sid']}'"),'limit'=>$this->_limit,'order'=>'sort ASC'));
    }
    public  function  findOne(){
        if(isset($_GET['sid'])){

            return parent::select(array('id','name','info'),array('where'=>array("id='{$this->_R['sid']}'"),'limit'=>'1'));
        }
        $_where = array("id='{$this->_R['id']}'");
          if(!$this->_check->oneCheck($this,$_where)) $this->_check->error();
        return parent::select(array('id','name','info'),array('where'=>$_where, 'limit'=>'1'));
    }
    public function total($b=0){
        return parent::total();
    }
    public  function  delete($b=0,array $a=array()){
        $_where = array("id='{$this->_R['id']}'");
        return parent::delete('',$_where);
    }
    public  function  update(array$a=array(),array$b=array(),array$c=array()){
        $_where = array("id='{$this->_R['id']}'");
        if(!$this->_check->oneCheck($this,$_where)) $this->_check->error();
        if(!$this->_check->updateCheck($this)) $this->_check->error();
        $_updateData = $this->getRequest()->filter($this->_fields);
        return parent::update($_where, $_updateData);
    }
    public  function  sort(){
        foreach ($_POST['sort'] as $_key=>$_value) {
            if (!is_numeric($_value)) continue;
            $_setField= array('sort'=>$_value);
            $_where = array("id='$_key'");
            parent::update($_where,$_setField);
        }
            return true;
    }
    public  function  isName(){
        $_where = array("name='{$this->_R['name']}'");
        $this->_check->ajax($this,$_where);


    }
}
