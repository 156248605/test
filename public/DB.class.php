<?php
class DB {
     private  $_pdo = null;
     static  private  $_instance = null;
     static  protected  function  getInstance(){
         if(!(self::$_instance instanceof self)){
             self::$_instance = new self();
         }
           return self::$_instance;
     }
     private  function __clone(){}
     private  function  __construct()
     {
         try {
             $this->_pdo =new PDO(DB_DNS, DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8'));
             $this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         } catch (PDOException $e) {

             exit('数据库连接失败:'.$e->getMessage());

         }

     }
     protected  function  add($_addData, $_tables){
         $_addFields = array();
         $_addValues = array();
         foreach ($_addData as $_key=>$_value) {
             $_addFields[] = $_key;
             $_addValues[] = $_value;
         }
         $_addFields = implode(',', $_addFields);
         $_addValues = implode("','", $_addValues);
         $_sql = "INSERT INTO $_tables[0] ($_addFields) VALUES ('$_addValues')";
         $_stmt = $this->_pdo->prepare($_sql);
         $_stmt->execute();
         return $_stmt->rowCount();


     }



}