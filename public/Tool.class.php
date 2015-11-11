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
    //表单提交字符转义
    static public function setFormString($_string) {
        if (!get_magic_quotes_gpc()) {
            if (Validate::isArray($_string)) {
                foreach ($_string as $_key=>$_value) {
                    $_string[$_key] = self::setFormString($_value);	//不支持就用代替addslashes();
                }
            } else {
                return addslashes($_string); //mysql_real_escape_string($_string, $_link);
            }
        }
        return $_string;
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
 //转义过滤
    static public  function  setRequest(){
        if(isset($_GET)) $_GET=Tool::setFormString($_GET);
        if(isset($_GET)) $_POST=Tool::setFormString($_POST);
    }


    //得到上一页
    static public function getPrevPage() {
        return isset($_SERVER["HTTP_REFERER"])?$_SERVER["HTTP_REFERER"]:'?a=admin';
    }




}