<?php
class ManagerCheck extends  Check{
    //用户名不得包含指定的非法词组，敏感词
    //密码不能纯数字，纯字母，或者必须包含特殊字符，或者必须大小写混拼
    public  function  check(&$_model)
    {
        if (self::isNullString($this->_data['user'])) {
            $this->_message[] = '管理员用户名不得为空!';
            $this->_flag = false;
        }
        if (self::checkStrLength($this->_data['user'], 2, 'min')) {
            $this->_message[] = '管理员用户名不得小于2位！';
            $this->_flag = false;
        }
        if (self::checkStrLength($this->_data['user'], 20, 'max')) {
            $this->_message[] = '管理员用户名不得大于20位！';
            $this->_flag = false;
        }
        if (self::checkStrLength($this->_data['pass'], 6, 'min')) {
            $this->_message[] = '管理员密码不得小于6位！';
            $this->_flag = false;
        }
        if (!self::checkStrEquals($this->_data['pass'], $this->_data['notpass'])) {
            $this->_message[] = '管理员密码和确认密码必须保持一致！';
            $this->_flag = false;
        }
        if (self::isNullString($this->_data['level'])) {
            $this->_message[] = '管理员等级权限必须选择！';
            $this->_flag = false;
        }
        if ($_model->isOne(array('user'=>$this->_data['user']))){
            $this->_message[] = '管理员用户名被占用！';
            $this->_flag = false;
        }

        return $this->_flag;
    }
    public  function  ajax(&$_model){
         echo $_model->isOne(array('user'=>$_POST['user'])) ?1:2;
    }







}