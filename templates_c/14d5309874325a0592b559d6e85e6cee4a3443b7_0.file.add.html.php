<?php /* Smarty version 3.1.27, created on 2015-10-09 16:33:11
         compiled from "view\admin\manager\add.html" */ ?>
<?php
/*%%SmartyHeaderCode:685956177bc72a5f30_76985047%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14d5309874325a0592b559d6e85e6cee4a3443b7' => 
    array (
      0 => 'view\\admin\\manager\\add.html',
      1 => 1444379582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '685956177bc72a5f30_76985047',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56177bc780a943_39346305',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56177bc780a943_39346305')) {
function content_56177bc780a943_39346305 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '685956177bc72a5f30_76985047';
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
<h2><a href="?a=manager">返回管理员列表</a>系统 -- 添加管理员</h2>
<form method="post" action="?a=manager&m=add">
    <dl class="form">
        <dd>用 户 名：<input type="text" name="user" class="text" /> ( * 2-20位之间 )</dd>
        <dd>密　　码：<input type="password" name="pass" class="text" /> ( * 大于6位 )</dd>
        <dd>确认密码：<input type="password" name="notpass" class="text" /> ( * 同密码一致 )</dd>
        <dd>等　　级：<select name="level">
            <option value="0">--请选择一个等级权限--</option>
            <option value="1">超级管理员</option>
            <option value="2">普通管理员</option>
            <option value="3">商品发布专员</option>
            <option value="4">订单处理专员</option>
        </select> ( * 必须选定一个权限 )</dd>
        <dd><input type="submit" name="send" value="新增管理员" class="submit" /></dd>
    </dl>
</form>
</body>
</html><?php }
}
?>