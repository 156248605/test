<?php
class IndexAction extends  Action {
     private $_nav = null;
    public  function  __construct(){
        parent::__construct();
        $this->_nav=new NavModel();
    }
    public function  index(){
        $this->_tpl->assign('FrontTenNav', $this->_nav->findFrontTenNav());
        $this->_tpl->display(SMARTY_FRONT.'public/index.html');
    }

   //验证码
    public  function  validateCode() {
        $_vc = new ValidateCode();
        $_vc->doimg();
        $_SESSION['code'] = $_vc->getCode();
    }
}