<?php /* Smarty version 3.1.27, created on 2015-10-24 11:18:51
         compiled from "view\admin\manager\manager.html" */ ?>
<?php
/*%%SmartyHeaderCode:7555562af89bc6e1f9_90838901%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ade99ed1d4cac3edd65674677a00e89be12181ea' => 
    array (
      0 => 'view\\admin\\manager\\manager.html',
      1 => 1445656103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7555562af89bc6e1f9_90838901',
  'variables' => 
  array (
    'AllManager' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562af89bcee958_08852887',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562af89bcee958_08852887')) {
function content_562af89bcee958_08852887 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7555562af89bc6e1f9_90838901';
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
        <tr><th>用户名</th><th>等级</th><th>登录次数</th><th>最后登录ip</th><th>最后登录时间</th><th>操作</th></tr>
        <?php
$_from = $_smarty_tpl->tpl_vars['AllManager']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
        <tr><td><?php echo $_smarty_tpl->tpl_vars['value']->value->user;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->level_name;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->login_count;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->last_ip;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->last_time;?>
</td><td><a href="?a=manager&m=update&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="view/admin/images/edit.gif" alt="编辑" title="编辑" /></a><a href="?a=manager&m=delete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="return confirm('你真的要删除这个管理员吗？') ? true : false"><img src="view/admin/images/drop.gif" alt="删除" title="删除" /></a></td></tr>
        <?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>
    </table>
</div>
<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
</body>
</html><?php }
}
?>