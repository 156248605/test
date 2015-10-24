<?php /* Smarty version 3.1.27, created on 2015-10-24 17:16:32
         compiled from "view\admin\public\succ.html" */ ?>
<?php
/*%%SmartyHeaderCode:23665562b4c70b1ba94_34292504%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e904f468cf47a93e8ad646076a1698bf252a5ec' => 
    array (
      0 => 'view\\admin\\public\\succ.html',
      1 => 1445161678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23665562b4c70b1ba94_34292504',
  'variables' => 
  array (
    'url' => 0,
    'message' => 0,
    'key' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562b4c70b63f72_98964391',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562b4c70b63f72_98964391')) {
function content_562b4c70b63f72_98964391 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '23665562b4c70b1ba94_34292504';
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1;url=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" />
    <link rel="stylesheet" href="view/admin/style/basic.css">
    <link rel="stylesheet" href="view/admin/style/succ.css">
    <title>在线商城后台管理</title>
</head>
<body>
<h2>成功 -- 提示页</h2>

<div id="list" class="succ">
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
    <p><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">[如果浏览器没有及时跳转，请点击这里]</a></p>
</div>
</body>
</html><?php }
}
?>