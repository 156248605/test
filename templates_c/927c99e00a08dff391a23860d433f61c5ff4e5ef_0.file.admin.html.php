<?php /* Smarty version 3.1.27, created on 2015-10-03 20:56:21
         compiled from "view\default\admin.html" */ ?>
<?php
/*%%SmartyHeaderCode:24037560fd075b86dd7_76909032%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '927c99e00a08dff391a23860d433f61c5ff4e5ef' => 
    array (
      0 => 'view\\default\\admin.html',
      1 => 1443876894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24037560fd075b86dd7_76909032',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560fd075bb9759_48428225',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560fd075bb9759_48428225')) {
function content_560fd075bb9759_48428225 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '24037560fd075b86dd7_76909032';
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>在线商城后台管理</title>
    <link rel="stylesheet" href="view/default/style/basic.css">
    <link rel="stylesheet" href="view/default/style/admin.css">
    <?php echo '<script'; ?>
 src="view/default/js/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="view/default/js/iframe.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="view/default/js/channel.js"><?php echo '</script'; ?>
>
</head>
<body>
 <div id="header">
     <p>您好，admin[超级管理员][去首页][退出]登录了</p>
     <ul>
         <li class="first"><a href="?a=admin&m=main" target="in">起始页</a></li>
         <li><a href="javascript:channel(0)">商品</a></li>
         <li><a href="javascript:channel(1)">订单</a></li>
         <li><a href="javascript:channel(2)">会员</a></li>
         <li><a href="javascript:channel(3)">系统</a></li>
     </ul>
 </div>
 <div id="sidebar">
     <dl style="display:block">
         <dt>商品</dt>
         <dd><a href="###">商品1</a></dd>
         <dd><a href="###">商品2</a></dd>
         <dd><a href="###">商品3</a></dd>
     </dl>
     <dl style="display:none">
         <dt>订单</dt>
         <dd><a href="###">订单1</a></dd>
         <dd><a href="###">订单2</a></dd>
         <dd><a href="###">订单3</a></dd>
     </dl>
     <dl style="display:none">
         <dt>会员</dt>
         <dd><a href="###">会员1</a></dd>
         <dd><a href="###">会员2</a></dd>
         <dd><a href="###">会员3</a></dd>
     </dl>
     <dl style="display:none">
         <dt>系统</dt>
         <dd><a href="###">系统1</a></dd>
         <dd><a href="###">系统2</a></dd>
         <dd><a href="###">系统3</a></dd>
     </dl>

 </div>

 <div id="main">
     <iframe src="?a=admin&m=main" name="in"></iframe>


 </div>


</body>
</html><?php }
}
?>