<?php
//管理员控制器
class ManagerAction extends  Action{
    public  function  __construct(){
        parent::__construct();
    }
    public  function  index(){
        parent::page($this->_model->total());
        $this->_tpl->assign('AllManager',$this->_model->findAll());
        $this->_tpl->display(SMARTY_ADMIN.'manager/manager.html');
    }
    //添加管理员
    public function add() {
        if (isset($_POST['send'])) {
           if($this->_model->add(Request::getInstance($this->_model,$this->_check))){
               Redirect::getInstance($this->_tpl)->succ('?a=manager','管理员新增成功！');
           }else{
               Redirect::getInstance($this->_tpl)->error('管理员新增失败!');
           }
        };
        $this->_tpl->display(SMARTY_ADMIN.'manager/add.html');
    }
    //删除管理员
    public function delete() {
        if (isset($_GET['id'])) $this->_model->delete() ? $this->_redirect->succ(Tool::getPrevPage(), '管理员删除成功！') : $this->_redirect->error('管理员删除失败！');
    }
    //修改管理员
    public function update() {
        $this->_tpl->display(SMARTY_ADMIN.'manager/update.html');
    }
    //ajax
    public  function  ajax($b=0){
        $this->_check->ajax($this->_model);
    }
}


