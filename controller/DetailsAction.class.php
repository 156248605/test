<?php
class DetailsAction extends Action {

    public  function  __construct(){
       parent::__construct();


    }
    public function  index(){
        $this->_tpl->display(SMARTY_FRONT.'public/details.html');
    }

}