<?php
class IndexAction extends  Action {
    public  function  __construct(){
        parent::__construct();

    }
    public function  index(){
        $this->_tpl->display(SMARTY_FRONT.'public/index.html');
    }
   //验证码
    public  function  validateCode() {
        $_vc = new ValidateCode();
        $_vc->doimg();
        $_SESSION['code'] = $_vc->getCode();
    }
}