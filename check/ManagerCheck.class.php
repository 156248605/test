<?php
class ManagerCheck extends  Check{
    //用户名不得包含指定的非法词组，敏感词
    //密码不能纯数字，纯字母，或者必须包含特殊字符，或者必须大小写混拼
    public  function  addcheck(&$_model,$_param)
    {
        if (self::isNullString($_POST['user'])) {
            $this->_message[] = '管理员用户名不得为空!';
            $this->_flag = false;
        }
        if (self::checkStrLength($_POST['user'], 2, 'min')) {
            $this->_message[] = '管理员用户名不得小于2位！';
            $this->_flag = false;
        }
        if (self::checkStrLength($_POST['user'], 20, 'max')) {
            $this->_message[] = '管理员用户名不得大于20位！';
            $this->_flag = false;
        }
        if (self::checkStrLength($_POST['pass'], 6, 'min')) {
            $this->_message[] = '管理员密码不得小于6位！';
            $this->_flag = false;
        }
        if (!self::checkStrEquals($_POST['pass'],$_POST['notpass'])) {
            $this->_message[] = '管理员密码和确认密码必须保持一致！';
            $this->_flag = false;
        }
        if (self::isNullString($_POST['level'])) {
            $this->_message[] = '管理员等级权限必须选择！';
            $this->_flag = false;
        }
        if ($_model->isOne('',$_param)){
            $this->_message[] = '管理员用户名被占用！';
            $this->_flag = false;
        }
        return $this->_flag;

    }
    public function updateCheck(ManagerModel &$_model) {
        if (self::checkStrLength($_POST['pass'], 6, 'min')) {
            $this->_message[] = '管理员密码不得小于6位！';
            $this->_flag = false;
        }
        if (!self::checkStrEquals($_POST['pass'], $_POST['notpass'])) {
            $this->_message[] = '管理员密码和确认密码必须保持一致！';
            $this->_flag = false;
        }
        if (self::isNullString($_POST['level'])) {
            $this->_message[] = '管理员等级权限必须选择！';
            $this->_flag = false;
        }
        return $this->_flag;
    }
    public  function  delete(ManagerModel &$_model,$_requestData){
        if(!$_model->isOne($_requestData)){
            $this->_message[] = '找不到将要删除的管理员！';
            $this->_flag = false;
        }
         return $this->_flag;
    }
  /*  public  function  oneCheck(&$_model, array $_param){

        if (!$_model->isOne('',$_param)) {
            $this->_message[] = '找不到将要修改的管理员！';
            $this->_flag = false;
        }
        return $this->_flag;
    }*/
    public  function  ajax(&$_model,array $_param){
         echo $_model->isOne('',$_param) ?1:2;
    }
    public  function  loginCheck(&$_model,array $_param){
        if (self::isNullString($_POST['user'])) {
            $this->_message[] = '管理员姓名不得为空！';
            $this->_flag = false;
        }
        if (self::isNullString($_POST['pass'])) {
            $this->_message[] = '管理员密码不得为空！';
            $this->_flag = false;
        }
        if (self::isNullString($_POST['code'])) {
            $this->_message[] = '验证码不得为空！';
            $this->_flag = false;
        }
        if (!self::checkStrEquals(strtoupper($_SESSION['code']), strtoupper($_POST['code']))) {
            $this->_message[] = '验证码不正确！';
            $this->_flag = false;
        }
        if (!$_model->isOne('',$_param)) {
            $this->_message[] = '用户名或密码不正确！';
            $this->_flag = false;
        }
        return $this->_flag;
    }
}