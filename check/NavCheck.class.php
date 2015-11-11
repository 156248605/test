<?php
/**
 * Created by PhpStorm.
 * User: hugo.zhao
 * Date: 2015/10/24
 * Time: 17:11
 */
//导航验证类
class NavCheck extends Check {

    public function addCheck(&$_model,array $_requestData,$_param) {
        if (self::isNullString($_requestData['name'])) {
            $this->_message[] = '导航名称不得为空！';
            $this->_flag = false;
        }
        if (self::checkStrLength($_requestData['name'], 2, 'min')) {
            $this->_message[] = '导航名称不得小于2位！';
            $this->_flag = false;
        }
        if (self::checkStrLength($_requestData['name'], 4, 'max')) {
            $this->_message[] = '导航名称不得大于4位！';
            $this->_flag = false;
        }
        if (self::checkStrLength($_requestData['name'], 200, 'max')) {
            $this->_message[] = '导航简介不得大于200位！';
            $this->_flag = false;
        }
        if ($_model->isOne('',$_param)){
            $this->_message[] = '导航名被占用！';
            $this->_flag = false;
        }
        return $this->_flag;
    }
    public  function  delete(&$_model,$_requestData){
        if(!$_model->isOne($_requestData)){
            $this->_message[] = '找不到将要删除的导航！';
            $this->_flag = false;
        }
        return $this->_flag;
    }
    public function updateCheck(&$_model, $_requestData) {
        if (self::checkStrLength($_requestData['info'], 200, 'max')) {
            $this->_message[] = '导航简介不得大于200位！';
            $this->_flag = false;
        }
        return $this->_flag;
    }
    public  function  oneCheck(&$_model, array $_requestData){
        if (!$_model->isOne('',$_requestData)) {
            $this->_message[] = '找不到将要修改的导航名称！';
            $this->_flag = false;
        }
        return $this->_flag;
    }
    public  function  ajax(&$_model,array $_param){
        echo $_model->isOne('',$_param) ?1:2;
    }
}