<?php /* Smarty version 3.1.27, created on 2015-10-03 22:48:47
         compiled from "view\admin\manager\manager.html" */ ?>
<?php
/*%%SmartyHeaderCode:31850560feacfa15c57_51208068%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ade99ed1d4cac3edd65674677a00e89be12181ea' => 
    array (
      0 => 'view\\admin\\manager\\manager.html',
      1 => 1443883720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31850560feacfa15c57_51208068',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560feacfa561b7_80183355',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560feacfa561b7_80183355')) {
function content_560feacfa561b7_80183355 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '31850560feacfa15c57_51208068';
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="view/admin/style/basic.css">
    <link rel="stylesheet" href="view/admin/style/manager.css">
    <title></title>
</head>
<body>

<h2><a href="?a=manager&m=add">添加管理员</a>系统--管理员列表</h2>
<div id="list">
    <table>
        <tr><th>用户名</th><th>登录</th><th>登录次数</th><th>最后登录ip</th><th>最后登录时间</th><th>操作</th></tr>
        <tr><td>用户名</td><td>登录</td><td>登录次数</td><td>最后登录ip</td><td>最后登录时间</td><td><img src="view/admin/images/edit.gif" alt="编辑" title="编辑" /><img src="view/admin/images/drop.gif" alt="删除" title="删除" /></td></tr>
    </table>
</div>

</body>
</html><?php }
}
?>