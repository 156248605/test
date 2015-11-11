<?php
class Check extends  Validate{
    protected  $_flag = true;
    protected  $_message = array();
    //模版对象
    private $_tpl = null;
    public function __construct()
    {
        $this->_tpl=TPl::getinstance();


    }

    public  function  oneCheck(&$_model, array $_param){

        if (!$_model->isOne('',$_param)) {
            $this->_message[] = '找不到指定的数据！';
            $this->_flag = false;
        }
        return $this->_flag;
    }

    public  function  error() {
        $this->_tpl->assign('message', $this->_message);
        $this->_tpl->assign('prev', Tool::getPrevPage());
        $this->_tpl->display(SMARTY_ADMIN.'public/error.html');
        exit();
    }



}