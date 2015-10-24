<?php /* Smarty version 3.1.27, created on 2015-10-20 19:19:41
         compiled from "view\admin\manager\update.html" */ ?>
<?php
/*%%SmartyHeaderCode:170775626234d3f7393_19511512%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6aebe7ce85f6641e1954e620e8204cf1212870ba' => 
    array (
      0 => 'view\\admin\\manager\\update.html',
      1 => 1445339877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170775626234d3f7393_19511512',
  'variables' => 
  array (
    'OneManage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5626234d447521_10947457',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5626234d447521_10947457')) {
function content_5626234d447521_10947457 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '170775626234d3f7393_19511512';
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="view/admin/style/basic.css">
    <link rel="stylesheet" href="view/admin/style/manager.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="view/admin/js/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="view/admin/js/update.js"><?php echo '</script'; ?>
>
    <title>在线商城后台管理</title>
</head>
<body>
<h2><a href="?a=manager">返回管理员列表</a>系统 -- 修改管理员</h2>
<form method="post" name="update" action="?a=manager&m=update&id=<?php echo $_smarty_tpl->tpl_vars['OneManage']->value[0]->id;?>
">
    <input type="hidden" name="flag" id="flag" />
    <dl class="form">
        <dd>用 户 名：<?php echo $_smarty_tpl->tpl_vars['OneManage']->value[0]->user;?>
</dd>
        <dd>密　　码：<input type="password" name="pass" class="text" /> ( * 大于6位 )</dd>
        <dd>确认密码：<input type="password" name="notpass" class="text" /> ( * 同密码一致 )</dd>
        <dd>等　　级：<select name="level">
            <option value="0">--请选择一个等级权限--</option>
            <?php if ($_smarty_tpl->tpl_vars['OneManage']->value[0]->level == 1) {?>
            <option value="1" selected="selected">超级管理员</option>
            <?php } else { ?>
            <option value="1">超级管理员</option>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['OneManage']->value[0]->level == 2) {?>
            <option value="2" selected="selected">普通管理员</option>
            <?php } else { ?>
            <option value="2">普通管理员</option>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['OneManage']->value[0]->level == 3) {?>
            <option value="3" selected="selected">商品发布专员</option>
            <?php } else { ?>
            <option value="3">商品发布专员</option>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['OneManage']->value[0]->level == 4) {?>
            <option value="4" selected="selected">订单处理专员</option>
            <?php } else { ?>
            <option value="4">订单处理专员</option>
            <?php }?>
        </select> ( * 必须选定一个权限 )</dd>
        <dd><input type="submit" name="send"  value="修改管理员" class="submit" /></dd>
    </dl>
</form>
</body>
</html><?php }
}
?>