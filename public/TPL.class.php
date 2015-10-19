<?php
class TPL extends  Smarty{
    static private $_insance;
    static public function getinstance(){
        if(!(self::$_insance instanceof self)) {
            self::$_insance = new self();
        }
        return self::$_insance;
    }
    public   function  __construct(){
            parent::__construct();
            $this->setTemplateDir('view/');
            $this->caching=0;
        
    }




}