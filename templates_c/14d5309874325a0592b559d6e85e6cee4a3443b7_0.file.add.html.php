<?php /* Smarty version 3.1.27, created on 2015-10-24 17:15:48
         compiled from "view\admin\manager\add.html" */ ?>
<?php
/*%%SmartyHeaderCode:23064562b4c440c2512_46691775%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14d5309874325a0592b559d6e85e6cee4a3443b7' => 
    array (
      0 => 'view\\admin\\manager\\add.html',
      1 => 1445656103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23064562b4c440c2512_46691775',
  'variables' => 
  array (
    'AllLevel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562b4c44115db5_82185502',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562b4c44115db5_82185502')) {
function content_562b4c44115db5_82185502 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'D:\\github\\test\\smarty\\plugins\\function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '23064562b4c440c2512_46691775';
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
 type="text/javascript" src="view/admin/js/manager.js"><?php echo '</script'; ?>
>
    <title>在线商城后台管理</title>
</head>
<body>
<h2><a href="?a=manager">返回管理员列表</a>系统 -- 添加管理员</h2>
<form method="post" action="?a=manager&m=add">
    <input type="hidden" name="flag" id="flag" />
    <dl class="form">
        <dd>用 户 名：<input type="text" name="user" class="text" /> ( * 2-20位之间 )</dd>
        <dd>密　　码：<input type="password" name="pass" class="text" /> ( * 大于6位 )</dd>
        <dd>确认密码：<input type="password" name="notpass" class="text" /> ( * 同密码一致 )</dd>
        <dd>等　　级：<select name="level">
            <option value="0">--请选择一个等级权限--</option>
           <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['AllLevel']->value),$_smarty_tpl);?>

        </select> ( * 必须选定一个权限 )</dd>
        <dd><input type="submit" name="send" value="新增管理员" class="submit" /></dd>
    </dl>
</form>
</body>
</html><?php }
}
?>