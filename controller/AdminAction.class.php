<?php
class AdminAction extends  Action{
   public  function  __construct(){
       parent::__construct();

   }
   public  function  index(){
       $this->_tpl->display(SMARTY_ADMIN.'public/admin.html');
   }
   //起始页
   public  function  main(){

       $this->_tpl->display(SMARTY_ADMIN.'public/main.html');


   }
}