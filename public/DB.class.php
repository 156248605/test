<?php
class DB {
     private  $_pdo = null;
    //数据表
    private  $_tables = array();
     static  private  $_instance = null;
     static  protected  function  getInstance($_tables){
         if(!(self::$_instance instanceof self)){
             self::$_instance = new self();
             self::$_instance->_tables=$_tables;
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
     protected  function  add($_addData){
         $_addFields = array();
         $_addValues = array();
         foreach ($_addData as $_key=>$_value) {
             $_addFields[] = $_key;
             $_addValues[] = $_value;
         }
         $_addFields = implode(',', $_addFields);
         $_addValues = implode("','", $_addValues);
         $_sql = "INSERT INTO {$this->_tables[0]} ($_addFields) VALUES ('$_addValues')";
         return $this->execute($_sql);
     }
     //验证一条数据
    protected  function  isOne($_where){
        $_isAnd = '';
        foreach ($_where as $_key=>$_value){
            $_isAnd .= "$_key='$_value' AND ";
        }
        $_isAnd =substr($_isAnd,0,-4);
        $_sql="SELECT 'id' FROM {$this->_tables[0]} WHERE $_isAnd LIMIT 1";
        return $this->execute($_sql)->rowCount();
    }
    //删除一条数据
    protected  function  delete($_deleteData){
        $_isAnd = '';
        foreach ($_deleteData as $_key=>$_value){
            $_isAnd .= "$_key='$_value' AND ";
        }
        $_isAnd = substr($_isAnd,0,-4);
        $_sql = "DELETE FROM {$this->_tables[0]} WHERE $_isAnd LIMIT 1";
        return $this->execute($_sql)->rowCount();

    }
    //返回所有数据
    protected  function   select($_fileld,$_param=array()){
        $_limit = '';
        $_order = '';
        $_where = '';
        if(Validate::isArray($_param) && !Validate::isNullArray($_param)){
            $_limit = isset($_param['limit']) ? 'LIMIT '.$_param['limit'] : '';
            $_order = isset($_param['order']) ? 'ORDER BY '.$_param['order'] : '';
            if (isset($_param['where'])) {
                $_isAnd = '';
                foreach ($_param['where'] as $_key=>$_value) {
                    $_isAnd .= "$_key='$_value' AND ";
                }
                $_where = 'WHERE '.substr($_isAnd, 0, -4);
            }
        }
        $_selectFields = implode(',',$_fileld);
        $_sql = "SELECT $_selectFields FROM {$this->_tables[0]} $_where $_order $_limit";
        $_isAll=$this->execute($_sql);
        $_result=array();
        while(!!$row=$_isAll->fetchObject()){
            $_result[]=$row;
        }
        return $_result;
    }
    protected function  total(){
        $_sql= "SELECT COUNT(*) as count FROM {$this->_tables[0]}";
        $_stmt = $this->execute($_sql);
        return $_stmt->fetchObject()->count;
    }
    //执行并返回影响行数
    private  function  execute($_sql) {
        $_stmt=$this->_pdo->prepare($_sql);
        $_stmt->execute();
        return $_stmt;
    }
}