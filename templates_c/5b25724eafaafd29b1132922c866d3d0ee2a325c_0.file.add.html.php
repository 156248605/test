<?php /* Smarty version 3.1.27, created on 2015-10-24 18:08:10
         compiled from "view\admin\nav\add.html" */ ?>
<?php
/*%%SmartyHeaderCode:20141562b588a34d0d2_20602651%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b25724eafaafd29b1132922c866d3d0ee2a325c' => 
    array (
      0 => 'view\\admin\\nav\\add.html',
      1 => 1445681045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20141562b588a34d0d2_20602651',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562b588a383222_75552698',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562b588a383222_75552698')) {
function content_562b588a383222_75552698 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20141562b588a34d0d2_20602651';
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="view/admin/style/basic.css">
    <link rel="stylesheet" href="view/admin/style/nav.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="view/admin/js/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="view/admin/js/nav.js"><?php echo '</script'; ?>
>
    <title>在线商城后台管理</title>
</head>
<body>
<h2><a href="?a=nav">返回导航条列表</a>系统 -- 添加导航</h2>
<form method="post" action="?a=nav&m=add">
    <input type="hidden" name="flag" id="flag" />
    <dl class="form">
        <dd>名 称：<input type="text" name="name" class="text" /> ( * 2-4位之间 )</dd>
        <dd><span class="middle">简 介：</span><textarea id="info" name="info"></textarea><span class="middle">( *200位以内)</span></dd>
        <dd><input type="submit" name="send" value="新增导航条" class="submit" /></dd>
    </dl>
</form>
</body>
</html><?php }
}
?>