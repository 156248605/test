<?php
/**
 * Created by PhpStorm.
 * User: hugo.zhao
 * Date: 2015/10/20
 * Time: 19:29
 */
 class LevelModel extends  Model
 {
     public function  __construct()
     {
         $this->_fields = array('id', 'level_name',);
         $this->_tables = array(DB_FREFIX . 'level');
         parent::__construct();
     }
     public  function  findAll(){
         return parent::select(array('id','level_name'));
     }

 }