<?php /* Smarty version Smarty-3.1.17, created on 2015-08-05 17:55:43
         compiled from "F:\www\eesh\view\admin\pic\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2171455c1dd9f19e102-66900144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9829bdd86edd65b33ea27b156a7d0ff1ba04b1d6' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\pic\\show.tpl',
      1 => 1438073345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2171455c1dd9f19e102-66900144',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dir' => 0,
    'value' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c1dd9f27ba21_30946319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1dd9f27ba21_30946319')) {function content_55c1dd9f27ba21_30946319($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/admin/style/pic.css" />
</head>
<body>

<h2>System -- picture directory  list</h2>

<div id="list">
	<table class="public">
		<tr><th>Timedirectory </th><th>picture numbers</th><th>Operation</th></tr>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dir']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
		<?php if (mb_substr($_smarty_tpl->tpl_vars['key']->value,10,-1,'utf8')==0) {?>
			<td><a href="?a=pic&m=delDir&file=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">deletedirectory </a></td>
		<?php } else { ?>
			<td><a href="?a=pic&m=file&file=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">Jump into directory </a></td>
		<?php }?>
		

		</tr>
		<?php } ?>
	</table>
</div>


</body>
</html><?php }} ?>
