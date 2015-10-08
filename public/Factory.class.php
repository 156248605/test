<?php
class Factory{
    static private $_obj = null;
    static public  function  setAction(){
        $_a=self::getA();
        if(!file_exists(ROOT_PATH.'/controller/'.ucfirst($_a).'Action.class.php'))$_a='index';
        eval('self::$_obj = new '.ucfirst($_a).'Action();');
        return self::$_obj;
    }
    static  public  function  setModel(){
        $_a = self::getA();
        if (file_exists(ROOT_PATH.'/model/'.$_a.'Model.class.php')) eval('self::$_obj = new '.ucfirst($_a).'Model();');
        return self::$_obj;

    }
    static  public  function  setCheck(){
       $_a = self::getA();
        if (file_exists(ROOT_PATH.'/check/'.$_a.'Check.class.php')) eval('self::$_obj = new '.ucfirst($_a).'Check();');
        return self::$_obj;
    }
    static  public  function  getA(){
        return isset($_GET['a']) ? $_GET['a'] : 'Index';


    }


}