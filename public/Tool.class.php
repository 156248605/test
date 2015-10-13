<?php
class Tool{
    //获取客户端ip
    static  public  function  getIP(){
        return $_SERVER["REMOTE_ADDR"];
    }

    //获取当前的时间
    static  public  function  getDate(){
        return date('Y-m-d H:i:s');
    }

    //得到上一页
    static public function getPrevPage() {
        return $_SERVER["HTTP_REFERER"];
    }




}