<?php /* Smarty version 3.1.27, created on 2015-10-24 17:17:04
         compiled from "view\admin\public\error.html" */ ?>
<?php
/*%%SmartyHeaderCode:31318562b4c9063c0b0_96107886%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23a25bfe70b00b969f83a5c052af633b50b8c9b1' => 
    array (
      0 => 'view\\admin\\public\\error.html',
      1 => 1444733941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31318562b4c9063c0b0_96107886',
  'variables' => 
  array (
    'message' => 0,
    'key' => 0,
    'value' => 0,
    'prev' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562b4c90681524_78016576',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562b4c90681524_78016576')) {
function content_562b4c90681524_78016576 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '31318562b4c9063c0b0_96107886';
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="view/admin/style/basic.css">
    <link rel="stylesheet" href="view/admin/style/error.css">
    <title>在线商城后台管理</title>
</head>
<body>
<h2>错误 -- 提示页</h2>

<div id="list" class="error">
    <?php
$_from = $_smarty_tpl->tpl_vars['message']->value;
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
    <p><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
.<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</p>
    <?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>
    <p><a href="<?php echo $_smarty_tpl->tpl_vars['prev']->value;?>
">[返回]</a></p>
</div>

</body>
</html><?php }
}
?>