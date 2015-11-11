<?php
/**
 * Created by PhpStorm.
 * User: hugo.zhao
 * Date: 2015/10/24
 * Time: 11:32
 */
//导航条控制器
class NavAction extends  Action
{
    public function  __construct()
    {
        parent::__construct();
    }
    public  function  index(){
        parent::page();
        if(isset($_GET['sid'])) $this->_tpl->assign('OneNav',$this->_model->findOne());
        $this->_tpl->assign('AllNav',$this->_model->findAll());
        $this->_tpl->display(SMARTY_ADMIN.'nav/show.html');
    }

    public  function  add(){
        if (isset($_POST['send']))$this->_model->add(Request::getInstance($this->_model,$this->_check))?Redirect::getInstance($this->_tpl)->succ('?a=nav','导航新增成功！'): Redirect::getInstance($this->_tpl)->error('导航新增失败!');
        if (isset($_GET['id'])) $this->_tpl->assign('OneNav',$this->_model->findOne());
        $this->_tpl->display(SMARTY_ADMIN . 'nav/add.html');
    }
    public function update(){
        if (isset($_POST['send'])) $this->_model->update() ? $this->_redirect->succ(Tool::getPrevPage(), '导航名称修改成功！') : $this->_redirect->error('管理员修改失败！');
        if (isset($_GET['id'])){
            $this->_tpl->assign('OneNav',$this->_model->findOne());
            $this->_tpl->display(SMARTY_ADMIN.'nav/update.html');
        }
    }
    public function  delete(){
        if (isset($_GET['id'])) $this->_model->delete() ? $this->_redirect->succ(Tool::getPrevPage(), '导航名称删除成功！') : $this->_redirect->error('导航名称删除失败！');
    }
    public function  sort(){
        if (isset($_POST['send'])) $this->_model->sort()?$this->_redirect->succ(Tool::getPrevPage()):$this->_redirect->error('排序失败！');


    }
    //ajax
    public  function  ajax(){
        $this->_model->isName();
    }

}