<?php
header("Content-type: text/html; charset=utf-8");
/*$_a=5;
$_b=6;
eval('echo $_a+$_b;');*/
/*$_url = $_SERVER["REQUEST_URI"];
$_par = parse_url($_url);
print_r($_par['query']);
parse_str($_par['query'],$query);
 http_build_query($query);
echo $query['a'];*/
/*require 'public/Page.class.php';
$_page =new Page(5,10);
echo $_page->showpage();*/
/*$a = 10;
$b = 33;
$c=$b/$a;
echo $c;*/
$charset = 'ABCDEFGHKMNPRSTUVWXYZ23456789';
echo is_numeric($charset[29]);