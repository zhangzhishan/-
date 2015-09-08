<?php /* Smarty version Smarty-3.1.17, created on 2015-08-05 17:52:03
         compiled from "F:\www\eesh\view\admin\edit\file.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1843855c1dcc3ab42d7-34964824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '629fa6c14b1939a241b04de8a031bdf66a87afd5' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\edit\\file.tpl',
      1 => 1438093799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1843855c1dcc3ab42d7-34964824',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'file' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c1dcc3b90940_56204600',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1dcc3b90940_56204600')) {function content_55c1dcc3b90940_56204600($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=edit&m=runAddFile&dir=<?php echo $_GET['dir'];?>
&file=<?php echo $_GET['file'];?>
">Add file </a>System -- directory  list</h2>
<div id="list">
	<table class="public">
		<tr><th>file Name</th><th>Operation</th></tr>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['file']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['value']->value!='.'&&$_smarty_tpl->tpl_vars['value']->value!='..') {?>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td><td><a href="?a=edit&m=runUpdate&dir=<?php echo $_GET['dir'];?>
&file=<?php echo $_GET['file'];?>
&name=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">edit</a> <a onclick="javascript:return confirm('Are you sure to delete<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
?')" href="?a=edit&m=runDelete&dir=<?php echo $_GET['dir'];?>
&file=<?php echo $_GET['file'];?>
&name=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">delete</a></td></tr>
		<?php }?>
		<?php } ?>
		<tr><td colspan="2"><a href="?a=edit&m=dir&dir=<?php echo $_GET['dir'];?>
">[back theme list]</a></td></tr>
	</table>
			
	</table>
	<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>	
</div>

</body>
</html><?php }} ?>
