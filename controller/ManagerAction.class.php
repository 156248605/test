<?php
//管理员控制器
class ManagerAction extends  Action{
    private  $_level = null;
    public  function  __construct(){
        parent::__construct();
        $this->_level = new LevelModel();
    }
    public  function  index(){
        parent::page();
        $this->_tpl->assign('AllManager',$this->_model->findAll());
        $this->_tpl->display(SMARTY_ADMIN.'manager/manager.html');
    }
    //添加管理员
    public function add() {
        if (isset($_POST['send']))$this->_model->add(Request::getInstance())?Redirect::getInstance($this->_tpl)->succ('?a=manager','管理员新增成功！'): Redirect::getInstance($this->_tpl)->error('管理员新增失败!');
        $this->_tpl->assign('AllLevel',Tool::setFormItem($this->_level->findAll(),'id', 'level_name'));
        $this->_tpl->display(SMARTY_ADMIN.'manager/add.html');
    }
    //删除管理员
    public function delete() {
        if (isset($_GET['id'])) $this->_model->delete() ? $this->_redirect->succ(Tool::getPrevPage(), '管理员删除成功！') : $this->_redirect->error('管理员删除失败！');
    }
    //修改管理员
    public function update() {
        if (isset($_POST['send'])) $this->_model->update() ? $this->_redirect->succ(Tool::getPrevPage(), '管理员修改成功！') : $this->_redirect->error('管理员修改失败！');
         if (isset($_GET['id'])){
             $this->_tpl->assign('AllLevel',Tool::setFormItem($this->_level->findAll(),'id', 'level_name'));
             $this->_tpl->assign('OneManage',$this->_model->findOne());
             $this->_tpl->display(SMARTY_ADMIN.'manager/update.html');
         }
    }
 public  function  ajaxUser(){
  $this->_model->isUser();
 }
}


