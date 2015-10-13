<?php
//管理员控制器
class ManagerAction extends  Action{
    public  $_setmodel=null;
    public  $_setcheck=null;
    public  function  __construct(){
        $this->_setmodel=Factory::setModel();
        $this->_setcheck=Factory::setCheck();
        parent::__construct($this->_setmodel,$this->_setcheck);
    }
    public  function  index(){
        $this->_tpl->display(SMARTY_ADMIN.'manager/manager.html');
    }
    //添加管理员
    public function add() {
        if (isset($_POST['send'])) echo $this->_model->add(Request::getInstance($this->_model,$this->_check));
        $this->_tpl->display(SMARTY_ADMIN.'manager/add.html');
    }
    //修改管理员
    public function update() {
        $this->_tpl->display(SMARTY_ADMIN.'manager/update.html');
    }
    //ajax
    public  function  ajax(){




    }

}


