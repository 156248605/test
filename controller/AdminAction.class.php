<?php
class AdminAction extends  Action{
    private  $_manager = null;
   public  function  __construct(){
       parent::__construct();
       $this->_manager = new ManagerModel();

   }
   public  function  index(){
       if(isset($_SESSION['admin'])){
           $this->_tpl->assign('admin',$_SESSION['admin']);
           $this->_tpl->display(SMARTY_ADMIN.'public/admin.html');
       }else{
           $this->_redirect->succ('?a=admin&m=login');
       }
   }
   //起始页
   public  function  main(){

       $this->_tpl->display(SMARTY_ADMIN.'public/main.html');
   }
    public  function  login(){
        if(isset($_POST['send'])){
            if($this->_manager->login()) $this->_redirect->succ('?a=admin','后台登录成功');

        }else {
            $this->_tpl->display(SMARTY_ADMIN . 'public/login.html');
        }
        }
}