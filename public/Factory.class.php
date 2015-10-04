<?php
class Factory{
    static private $_action = null;
    static public  function  setAction(){
        $_a=isset($_GET['a']) ? $_GET['a'] : 'Index';
        if(!file_exists(ROOT_PATH.'/controller/'.ucfirst($_a).'Action.class.php'))$_a='index';



        eval('self::$_action = new '.ucfirst($_a).'Action();');
        return self::$_action;
    }
}