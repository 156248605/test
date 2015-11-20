<?php
/**
 * Created by piaomiao.
 * User: zhonglu
 * Date: 2015/11/20
 * Time: 15:13
 */
class BrandModel extends  Model{
    public  function  __construct()
    {
        parent::__construct();
        $this->_fields=array('id','name','url','info','reg_time');
        $this->_tables = array(DB_FREFIX.'brand');
        $this->_check = new BrandCheck();
        list(
            $this->_R['id'],
            $this->_R['name']
            ) = $this->getRequest()->getParam(array(
            isset($_GET['id']) ? $_GET['id'] : null,
            isset($_POST['name']) ? $_POST['name'] : null
        ));
    }
        public  function  findAll(){
            return parent::select(array('id','name','url','info'),
                array('order'=>'reg_time DESC'));

        }
        public function  total($b=0){
            return parent::total();
        }
    public function findOne() {
        $_where = array("id='{$this->_R['id']}'");
        if (!$this->_check->oneCheck($this, $_where)) $this->_check->error();
        return parent::select(array('id','name','url','info'),
            array('where'=>$_where, 'limit'=>'1'));
    }
    public function add ($_addData,$b=0) {
        $_where = array("name='{$this->_R['name']}'");
        if (!$this->_check->addCheck($this, $_where)) $this->_check->error();
        $_addData = $this->getRequest()->filter($this->_fields);
        $_addData['reg_time'] = Tool::getDate();
        return parent::add($_addData);
    }

    public function delete($b=0,array $a=array()) {
        $_where = array("id='{$this->_R['id']}'");
        return parent::delete('',$_where);
    }

    public function update(array$a=array(),array$b=array(),array$c=array()) {
        $_where = array("id='{$this->_R['id']}'");
        if (!$this->_check->oneCheck($this, $_where)) $this->_check->error();
        if (!$this->_check->updateCheck($this)) $this->_check->error();
        $_updateData = $this->getRequest()->filter($this->_fields);
        return parent::update($_where, $_updateData);
    }

}
