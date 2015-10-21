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
    //表单选项转换
    static  public  function  setFormItem($_data, $_key, $_value){
        $_items =array();
        if (Validate::isArray($_data)){
            foreach ($_data as $_v) {
                $_items[$_v->$_key] = $_v->$_value;
            }
        }
        return $_items;
    }

    //得到上一页
    static public function getPrevPage() {
        return $_SERVER["HTTP_REFERER"];
    }




}