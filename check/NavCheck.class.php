<?php
/**
 * Created by PhpStorm.
 * User: hugo.zhao
 * Date: 2015/10/24
 * Time: 17:11
 */
//导航验证类
class NavCheck extends Check {

    public function addCheck(&$_model) {
        if (self::isNullString($this->_data['name'])) {
            $this->_message[] = '导航名称不得为空！';
            $this->_flag = false;
        }
        if (self::checkStrLength($this->_data['name'], 2, 'min')) {
            $this->_message[] = '导航名称不得小于2位！';
            $this->_flag = false;
        }
        if (self::checkStrLength($this->_data['name'], 4, 'max')) {
            $this->_message[] = '导航名称不得大于4位！';
            $this->_flag = false;
        }
        if (self::checkStrLength($this->_data['name'], 200, 'max')) {
            $this->_message[] = '导航简介不得大于200位！';
            $this->_flag = false;
        }
        return $this->_flag;
    }
}