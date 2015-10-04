<?php /* Smarty version 3.1.27, created on 2015-10-03 21:10:28
         compiled from "view\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:28858560fd3c4a83385_33082739%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0cbc5ff7c9a5064a7949a251a43038bcdc4e5d6' => 
    array (
      0 => 'view\\index.html',
      1 => 1443877720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28858560fd3c4a83385_33082739',
  'variables' => 
  array (
    'stm' => 0,
    'value' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560fd3c4b20cf6_98717796',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560fd3c4b20cf6_98717796')) {
function content_560fd3c4b20cf6_98717796 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '28858560fd3c4a83385_33082739';
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>测试</title>
</head>
<body>
<!--
<table id="grade" border="0">
    <thead>
        <tr>
            <th>编号</th>
            <th>姓名</th>
            <th>姓别</th>
            <th>年龄</th>
            <th>分数</th>
        </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->tpl_vars['stm']->value;
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
       <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['sex'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['age'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['score'];?>
</td>
       </tr>
      <?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>
    </tbody>
    <tfoot>
      <tr>
            <td colspan="6">共<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
行</td>
      </tr>
    </tfoot>
</table>
-->
dfdf


</body>
</html><?php }
}
?>