<?php /* Smarty version 3.1.27, created on 2015-10-09 11:35:49
         compiled from "view\default\public\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:1796556173615a4ec31_08455524%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01c580d5870b2988471416fe7778943dbdd8ef09' => 
    array (
      0 => 'view\\default\\public\\index.html',
      1 => 1444361638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1796556173615a4ec31_08455524',
  'variables' => 
  array (
    'stm' => 0,
    'value' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56173615b07637_02852157',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56173615b07637_02852157')) {
function content_56173615b07637_02852157 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1796556173615a4ec31_08455524';
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