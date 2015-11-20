<?php
/**
 * Created by PhpStorm.
 * User: hugo.zhao
 * Date: 2015/10/24
 * Time: 11:32
 */
//商品控制器
class GoodsAction extends  Action
{
     private $_nav=null;
    public function  __construct()
    {
        parent::__construct();
        $this->_nav=new NavModel();
    }
    public  function  index(){
        $this->_tpl->display(SMARTY_ADMIN.'goods/show.html');
    }

    public  function  add(){
        $this->_tpl->assign('addNav', $this->_nav->findAddGoods());
        $this->_tpl->display(SMARTY_ADMIN . 'goods/add.html');
    }
    public function update(){

            $this->_tpl->display(SMARTY_ADMIN.'goods/update.html');
        }

    public function  delete(){

    }

}