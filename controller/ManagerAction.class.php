<?php
//管理员控制器
class ManagerAction extends  Action{
    public  function  __construct(){
        parent::__construct(new ManagerModel());
    }
    public  function  index(){
        $this->_tpl->display(SMARTY_ADMIN.'manager/manager.html');
    }
    //添加管理员
    public function add() {
        if (isset($_POST['send'])) echo $this->_model->add(Request::getInstance());
        $this->_tpl->display(SMARTY_ADMIN.'manager/add.html');
    }
    //修改管理员
    public function update() {
        $this->_tpl->display(SMARTY_ADMIN.'manager/update.html');
    }
}


