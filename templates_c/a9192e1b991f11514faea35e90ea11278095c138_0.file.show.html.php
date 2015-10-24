<?php /* Smarty version 3.1.27, created on 2015-10-24 16:28:41
         compiled from "view\admin\nav\show.html" */ ?>
<?php
/*%%SmartyHeaderCode:32569562b41398e5197_89605684%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9192e1b991f11514faea35e90ea11278095c138' => 
    array (
      0 => 'view\\admin\\nav\\show.html',
      1 => 1445657509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32569562b41398e5197_89605684',
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562b4139918cd0_39271440',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562b4139918cd0_39271440')) {
function content_562b4139918cd0_39271440 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '32569562b41398e5197_89605684';
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="view/admin/style/basic.css">
    <link rel="stylesheet" href="view/admin/style/nav.css">
    <title></title>
</head>
<body>

<h2><a href="?a=nav&m=add">添加导航</a>系统--导航条列表</h2>
<div id="list">
    <table>
        <tr><th>名称</th><th>简介</th><th>子类</th><th>排序</th><th>操作</th></tr>
    </table>
</div>
<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
</body>
</html><?php }
}
?>