<?php
class ManagerModel extends  Model{
     public function  __construct(){
         parent::__construct();
         $this->_fields = array('id','user','pass','level','login_count','last_ip','last_time','reg_time');
         $this->_tables = array(DB_FREFIX.'manager');
         $this->_check = new ManagerCheck();
     }
     public  function  findAll(){
         $this->_tables = array(DB_FREFIX.'manager a',DB_FREFIX.'level b');
         return parent::select(array('a.id','a.user','a.level','a.login_count','a.last_ip','a.last_time','b.level_name'),array('where'=>'a.level=b.id','limit'=>$this->_limit,'order'=>'a.reg_time DESC'));
     }
     public  function  findOne(){
         $_oneData = $this->getRequest()->one($this->_fields);
         return parent::select(array('id','user','level'),array('where'=>$_oneData, 'limit'=>'1'));
     }
    public function  findLogin(){
        $this->_tables = array(DB_FREFIX.'manager a',DB_FREFIX.'level b');
        return parent::select(array('a.user','b.level_name'),
                          array('where'=>'a.level=b.id AND a.user='."'{$_POST['user']}'",'limit'=>'1'));
    }
    public function  countLogin(){
         // updat mall_manager set login=login+1,last_ip='',last_time='';
         $_oneData = array('user'=>$_POST['user']);
        $_updateData['login_count']=array('login_count+1');
         $_updateData['last_ip']=Tool::getIP();
         $_updateData['last_time']=Tool::getDate();
         parent::update($_oneData,$_updateData);

    }
     public function total($b=0){
         return parent::total();
     }
     public  function  add($_request,$b=0){
         $_addData = $_request->add($this->_fields);
         $_addData['pass'] = sha1($_addData['pass']);
         $_addData['last_ip'] = Tool::getIP();
         $_addData['reg_time'] = Tool::getDate();
         return parent::add($_addData);
     }
     public  function  update($a=0,$b=0,$c=0){
         $_oneData = $this->getRequest()->one($this->_fields);
         $_updateData = $this->getRequest()->update($this->_fields);
         $_updateData['pass'] = sha1($_updateData['pass']);
         return parent::update($_oneData, $_updateData);
     }
     public  function  delete($b=0,$a=0){
         $_deleteData = $this->getRequest()->delete($this->_fields);
         return parent::delete($_deleteData);
     }
     public  function  isOne($_where,$b=0) {
         return parent::isOne($_where);
     }
    public  function  login(){
        return $this->getRequest()->login();


    }
 }