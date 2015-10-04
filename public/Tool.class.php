<?php
class Tool{
    //获取客户端ip
    static  public  function  getIP(){
        return $_SERVER["REMOTE_ADDR"];
    }

    //获取当前的时间
    static  public  function  getDate(){
        date_default_timezone_set('Asia/Shanghai');
        return date('Y-m-d H:i:s');
    }






}