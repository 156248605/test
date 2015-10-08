<?php
class ManagerCheck extends  Check{

    public  function  check(){
        if(self::isNullString($this->_data['user'])){
            $this->_message[]='管理员用户名不得为空!';
            $this->_flag = false;
        }
        return $this->_flag;


    }






}