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
    }
    public function add($_addData,$b=0) {
        $_addData = $this->getRequest()->add($this->_fields);
        $_addData['sort'] = $this->nextId();
        return parent::add($_addData);
    }
    public  function  findAll(){
        return parent::select(array('id','name','info','sort','sid'),array('limit'=>$this->_limit,'order'=>'sort ASC'));
    }
    public  function  findOne(){
        $_oneData = $this->getRequest()->one($this->_fields);
        return parent::select(array('id','name','info'),array('where'=>$_oneData, 'limit'=>'1'));
    }
    public function total($b=0){
        return parent::total();
    }
    public  function  delete($b=0,$a=0){
        $_deleteData = $this->getRequest()->delete($this->_fields);
        return parent::delete($_deleteData);
    }
    public  function  isOne($_where,$b=0) {
        return parent::isOne($_where);
    }
    public  function  update($a=0,$b=0,$c=0){
        $_oneData = $this->getRequest()->one($this->_fields);
        $_updateData = $this->getRequest()->update($this->_fields);
        return parent::update($_oneData, $_updateData);
    }
}
