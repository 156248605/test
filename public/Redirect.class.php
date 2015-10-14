<?php
/**
 * Created by PhpStorm.
 * User: zhonglu
 * Date: 2015/10/14
 * Time: 10:34
 */
class Redirect {
    //用于存放实例化的对象
    static private $_instance = null;
    //公共静态方法获取实例化的对象
    static public function getInstance(&$_tpl) {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
            self::$_instance->_tpl = $_tpl;
        }
        return self::$_instance;
    }
    //私有克隆
    private function __clone() {}
    //私有构造
    private function __construct() {}
    //成功跳转
    public function succ($_url, $_info) {
        $this->_tpl->assign('message', $_info);
        $this->_tpl->assign('url', $_url);
        $this->_tpl->display(SMARTY_ADMIN.'public/succ.html');
        exit();
    }
    //失败返回
    public function error($_info) {
        $this->_tpl->assign('message', $_info);
        $this->_tpl->assign('prev', Tool::getPrevPage());
        $this->_tpl->display(SMARTY_ADMIN.'public/error.html');
        exit();
    }
}