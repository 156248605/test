<?php
class Check extends  Validate{
    protected  $_flag = true;

    protected  $_message = array();

    protected  $_data = array();
    public  function __construct(){

        $this->_data =$_POST;

    }

    public  function  getMessage(){
        return $this->_message;



    }






}