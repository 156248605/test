<?php
class ListAction extends Action {
    public  function  __construct(){
        parent::__construct();

    }
    public function  index(){
        $this->_tpl->display(SMARTY_STYLE.'list.html');
    }
    public function  update(){
        echo 'update';


    }
}