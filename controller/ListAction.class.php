<?php
class ListAction extends Action {
    private $_nav =null;
    public function  __construct()
    {
      parent::__construct();
      $this->_nav = new NavModel();
    }
   public function  index(){
       $this->_tpl->assign('FrontTenNav', $this->_nav->findFrontTenNav());
       $this->_tpl->display(SMARTY_FRONT.'public/list.html');


   }
}