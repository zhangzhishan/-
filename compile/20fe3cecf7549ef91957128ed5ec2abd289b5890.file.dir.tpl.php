<?php /* Smarty version Smarty-3.1.17, created on 2015-08-05 17:51:59
         compiled from "F:\www\eesh\view\admin\edit\dir.tpl" */ ?>
<?php /*%%SmartyHeaderCode:483355c1dcbfeeefc0-01494183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20fe3cecf7549ef91957128ed5ec2abd289b5890' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\edit\\dir.tpl',
      1 => 1438074647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '483355c1dcbfeeefc0-01494183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dir' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c1dcc00fd4b0_68138146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1dcc00fd4b0_68138146')) {function content_55c1dcc00fd4b0_68138146($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=edit&m=runAddDir">Add directory </a>System -- directory  list</h2>
<div id="list">
	<table class="public">
		<tr><th>directory Name</th><th>Operation</th></tr>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dir']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td><td><a href="?a=edit&m=file&dir=<?php echo $_GET['dir'];?>
&file=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">Jump into directory </a></td></tr>
		<?php } ?>
		<tr><td colspan="2"><a href="?a=edit">[backtheme ]</a></td></tr>
			
	</table>
	<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>	
</div>

</body>
</html><?php }} ?>
