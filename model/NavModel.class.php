<?php
/**
 * Created by PhpStorm.
 * User: hugo.zhao
 * Date: 2015/10/24
 * Time: 16:34
 */
class NavModel extends  Model
{
    private  $_sid = 0;
    public function  __construct()
    {
        parent::__construct();
        $this->_fields = array('id', 'name', 'info','sort','sid');
        $this->_tables = array(DB_FREFIX . 'nav');
        $this->_sid = isset($_GET['sid']) ? $_GET['sid'] : 0;
    }
    public function add($_addData,$b=0) {
        $_addData = $this->getRequest()->add($this->_fields);
        $_addData['sort'] = $this->nextId();
        return parent::add($_addData);
    }
    public  function  findAll(){
        return parent::select(array('id','name','info','sort','sid'),array('where'=>array('sid'=>$this->_sid),'limit'=>$this->_limit,'order'=>'sort ASC'));
    }
    public  function  findOne(){
        if(isset($_GET['sid'])){
            return parent::select(array('id','name','info'),array('where'=>array('id'=>$this->_sid),'limit'=>'1'));
        }
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
    public  function  sort(){
        foreach ($_POST['sort'] as $_key=>$_value) {
            if (!is_numeric($_value)) continue;
            parent::update(array('id' => $_key), array('sort' => $_value));
        }
            return true;
    }
}
