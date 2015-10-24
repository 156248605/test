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
        $this->_tpl->display(SMARTY_ADMIN.'nav/show.html');


    }

    public  function  add(){
        if (isset($_POST['send']))$this->_model->add(Request::getInstance($this->_model,$this->_check))?Redirect::getInstance($this->_tpl)->succ('?a=nav','导航新增成功！'): Redirect::getInstance($this->_tpl)->error('导航新增失败!');
        $this->_tpl->display(SMARTY_ADMIN.'nav/add.html');


    }
    public function update(){

        $this->_tpl->display(SMARTY_ADMIN.'nav/update.html');


    }
    public function  delete(){



    }
}