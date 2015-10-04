<?php
require 'test.php';
class b extends  a{
     public function add(  ){

         $test=new a();
         $test->add(5,6,7);


     }

}
$h=new b();
$h->add();