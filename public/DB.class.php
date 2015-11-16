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
     protected  function  add($_tables,$_addData){
         $_addFields = array();
         $_addValues = array();
         foreach ($_addData as $_key=>$_value) {
             $_addFields[] = $_key;
             $_addValues[] = $_value;
         }
         $_addFields = implode(',', $_addFields);
         $_addValues = implode("','", $_addValues);
         $_sql = "INSERT INTO $_tables[0] ($_addFields) VALUES ('$_addValues')";
         return $this->execute($_sql);
     }
    protected function  update(array $_tables,array $_param,array $_updateData){
        $_where= $_setData = '';
        foreach($_param as $_key=>$_value){
            $_where .=$_value.' AND ';
        }
        $_where ='WHERE '.substr($_where, 0, -4);
        foreach ($_updateData as $_key=>$_value) {
            if(Validate::isArray($_value)){
             $_setData .= "$_key=$_value[0],";
            }else {
                $_setData .= "$_key='$_value',";
            }
        }
        $_setData = substr($_setData, 0, -1);
        $_sql = "UPDATE $_tables[0] SET $_setData $_where LIMIT 1";
        return $this->execute($_sql)->rowCount();

    }
     //验证一条数据
    protected  function  isOne($_tables,array $_param){
        $_where = '';
        foreach ($_param as $_key=>$_value){
            $_where .=$_value.' AND ';
        }
        $_where ='WHERE '.substr($_where,0,-4);
        $_sql="SELECT 'id' FROM $_tables[0] $_where LIMIT 1";
        return $this->execute($_sql)->rowCount();
    }
    //删除一条数据
    protected  function  delete($_tables,array $_param){
        $_where = '';
        foreach ($_param as $_key=>$_value){
            $_where .= $_value.' AND ';
        }
        $_where='WHERE '.substr($_where,0,-4);
        $_sql = "DELETE FROM $_tables[0] $_where LIMIT 1";
        return $this->execute($_sql)->rowCount();

    }
    //返回所有数据
    protected  function   select(array $_tables,array $_fileld, array $_param=array()){
        $_limit = $_order = $_where = $_isAnd ='';
        if(Validate::isArray($_param) && !Validate::isNullArray($_param)){
            $_limit = isset($_param['limit']) ? 'LIMIT '.$_param['limit'] : '';
            $_order = isset($_param['order']) ? 'ORDER BY '.$_param['order'] : '';
            if (isset($_param['where'])) {
                foreach ($_param['where'] as $_key=>$_value) {
                    $_isAnd .=$_value. ' AND ' ;
                }
                $_where = 'WHERE '.substr($_isAnd, 0, -4);
            }
        }
        $_selectFields = implode(',',$_fileld);
        $_table = isset($_tables[1]) ? $_tables[0].','.$_tables[1] : $_tables[0];
        $_sql = "SELECT $_selectFields FROM $_table $_where $_order $_limit";
        $_isAll=$this->execute($_sql);
        $_result=array();
        while(!!$row=$_isAll->fetchObject()){
            $_result[]=$row;
        }
        return $_result;
    }
    protected function  total($_tables){
        $_sql= "SELECT COUNT(*) as count FROM $_tables[0]";
        $_stmt = $this->execute($_sql);
        return $_stmt->fetchObject()->count;
    }
    //得到下一个id
    protected function  nextId($_tables){
        $_sql = "SHOW TABLE STATUS LIKE '$_tables[0]'";
        $_stmt = $this->execute($_sql);
       return $_stmt->fetchObject()->Auto_increment;

    }
    //执行并返回影响行数
    private  function  execute($_sql) {
        try {
            $_stmt = $this->_pdo->prepare($_sql);
            $_stmt->execute();
        }catch (PDOException $e){
            exit('SQL语句:'.$_sql.'<br/>'.'错误信息:'.$e->getMessage());
        }
        return $_stmt;
    }
}